<?php
class EstudantesController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Estudantes";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
        
        if ($this->request->is('post')) {
            if ($this->Estudante->save($this->request->data)) {
                
                $cidade =  $this->request->data['Estudante']['cidade'];
                $cidadeSemEspaco = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                
                
                $newId = $this->Estudante->id;
                $protocolo = rand(11111, 99999) . "-$newId";
                $nomeUsuario =  $this->Estudante->field("nome",array("id =" => $newId));
                $modified =  $this->Estudante->field("modified",array("id =" => $newId));;
                if($this->Estudante->saveField('protocolo', $protocolo)){
                    
                    $todos = $this->Estudante->query("SELECT `protocolo`, `nome`, `telefone`, `rg`, `emissor`, `dataNascimento`, `sexo`, `nomeMae`, `nomePai`, `endereco`, `bairro`, `cidade`, `cep`, `naturalidade`, `estado`, `nomeEscola`, `cnpj`, `serie`, "
                            . "`grau`, `curso`, `periodo`, `matricula`, `dataIni`, `dataFim` "
                            . "FROM `estudantes` WHERE cidade = '$cidade'");
                    $paraGravar = array("CadastroSim$cidadeSemEspaco" => array("Estudante" => $todos));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidade/Estudantes.xml"); 
                    
                    //dados enviados para VIEW
                    $dados["dateTime"] = $modified;
                    $dados["nomeUsuario"] = $nomeUsuario;
                    $dados["result"] = "Estudante cadastrado com sucesso!!";
                    $dados["protocolo"] = $protocolo;
                    $dados["chamado"] = "Favor comparecer ao escritório do SIM portando documentações solicitadas e o n° de protocolo gerado a partir do dia 02/01/2015.";
                    
                    $this->set('dados', $dados);                              
                    $this->Session->setFlash("Favor guardar seu número de protocolo.", "flash_custom");
                    
					$browser = filter_input(INPUT_SERVER, "HTTP_USER_AGENT");
					$fp = fopen("logDeNavegadores.xml", "a");
					$escreve = fwrite($fp, "<navegador><protocolo> $protocolo</protocolo> <nav> $browser </nav></navegador>");
					fclose($fp);
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
