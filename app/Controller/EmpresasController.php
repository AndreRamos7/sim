<?php


class EmpresasController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Empresas";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
        
        if ($this->request->is('post')) {
            if ($this->Empresa->save($this->request->data)) {
                $cidade =  $this->request->data['Empresa']['cidade'];
                $cidadeSemEspaco = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                
                $newId = $this->Empresa->id;
                $protocolo = rand(11111, 99999) . "-$newId";
                $nomeUsuario =  $this->Empresa->field("nomeFantasia",array("id =" => $newId));
                $modified =  $this->Empresa->field("modified",array("id =" => $newId));
                
                if($this->Empresa->saveField('protocolo', $protocolo)){

                    //código para gerar arquivo XML
                    $todos = $this->Empresa->query("SELECT `protocolo`, `razaoSocial`, `nomeFantasia`, `cnpj`, "
                            . "`inscEstadual`, `maxCartoes`, `qtdVts`, `qtdFuncionarios`, `subTipo`, "
                            . "`perfilCompra`, `estado`, `cidade`, `endereco`, `bairro`, `cep`, `site`, "
                            . "`telefone`, `celular`, `fax`, `email` FROM `empresas` WHERE cidade = '$cidade'");
                    $paraGravar = array("CadastroSim$cidadeSemEspaco" => array("Empresa" => $todos));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidade/Empresas.xml");                
                    
                    //dados enviados para VIEW
                    $dados["dateTime"] = $modified;
                    $dados["nomeUsuario"] = $nomeUsuario;
                    $dados["result"] = "Empresa cadastrada com sucesso!!";
                    $dados["protocolo"] = $protocolo;
                    $dados["chamado"] = "Favor comparecer ao escritório do SIM "
                            . "portando documentações solicitadas e o n° de "
                            . "protocolo gerado em até 7 dias ou seu cadastro "
                            . "será invalidado.";
                    
                    $this->set('dados', $dados);                   
                    $this->Session->setFlash(" Documentos necessários (Cópia e Original): "
                            . "Cartão CNPJ, Inscrição Estadual e/ou Inscrição Municipal"
                            . " (Se houver). ", "flash_custom");
                    
                }else{
                    $dados["result"] = "Não foi possível cadastrar você!!";                    
                    $this->set('dados', $dados);                   
                    $this->Session->setFlash('Erro! Protocolo de cadastro não pode ser salvo!', 'flash_custom');
                }
                    
            }else{
                $dados["result"] = "Não foi possível cadastrar você!!";                    
                $this->set('dados', $dados);                   
                $this->Session->setFlash('Não foi possivel salvar seu cadastro!!', 'flash_custom');                               
            }
        }
    }
    
    public function cadastro() {
        $numArgs = func_num_args();        
        if ($numArgs > 0) {
            $cidade = func_get_arg(0);         
            if($cidade == "Castanhal" or $cidade == "Ananindeua" or $cidade == "SantaIsabel"){         
                $this->set('cidade', $cidade);            
            }else{
                $this->redirect("/Error");
            }
        }else{
            $this->redirect("/Error");
        }
    }
}
