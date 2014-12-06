<?php
class GratuitosController extends AppController { 
    
    public $name = "Gratuitos";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");        
        
        if ($this->request->is('post')) {
            if ($this->Gratuito->save($this->request->data)) {

                
                $cidade =  $this->request->data['Gratuito']['cidade'];
                $cidadeSemEspaco = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                
                $newId = $this->Gratuito->id;
                $protocolo = rand(11111, 99999) . "-$newId";
                
                if($this->Gratuito->saveField('protocolo', $protocolo)){
                    //código para gerar arquivo XML
                    $todos = $this->Gratuito->query("SELECT `nome`, `cpf`, `rg`, `emissor`, `subTipoGratuitoID`, `nroAposentadoria`, `sexo`, `dataNasc`, `dataValidade`, `limiteMensal`,"
                            . " `telefone`, `cep`, `cidade`, `bairro`, `endereco`, `celular`, `estado` "
                            . "FROM `gratuitos` WHERE `cidade` = '$cidade'");
                    $paraGravar = array("CadastroSim$cidadeSemEspaco" => array("Gratuito" => $todos));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidade/Gratuitos.xml");                
                    
                    $dados["result"] = "Usuário gratuito cadastrado com sucesso!!";
                    $dados["protocolo"] = $protocolo;
                    $dados["chamado"] = "Favor comparecer ao escritório do SIM portando documentações solicitadas e o n° de protocolo gerado!";
                    
                    $this->set('dados', $dados);                                  
                    $this->Session->setFlash("Documentos necessários (Cópia e Original): CPF, RG e comprovante de residência. Necessário também uma foto 3x4.", "flash_custom");
                    
                }else{
                    $dados["result"] = "Não foi possível cadastrar você!!";                    
                    $this->set('dados', $dados);  
                    $this->Session->setFlash('Erro! Protocolo de cadastro não pode ser gerado!', 'flash_custom');                   
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
