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
                if($this->Estudante->saveField('protocolo', $protocolo)){
                    
                    $todos = $this->Estudante->query("SELECT `nome`, `telefone`, `rg`, `emissor`, `dataNascimento`, `sexo`, `nomeMae`, `nomePai`, `endereco`, `bairro`, `cidade`, `cep`, `naturalidade`, `estado`, `nomeEscola`, `cnpj`, `serie`, "
                            . "`grau`, `curso`, `periodo`, `matricula`, `dataIni`, `dataFim` "
                            . "FROM `estudantes` WHERE cidade = '$cidade'");
                    $paraGravar = array("CadastroSim$cidadeSemEspaco" => array("Estudante" => $todos));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidade/Estudantes.xml"); 
                    
                    $dados["result"] = "Estudante cadastrado com sucesso!!";
                    $dados["protocolo"] = $protocolo;
                    $dados["chamado"] = "Favor comparecer ao escritório do SIM portando documentações solicitadas e o n° de protocolo gerado!";
                    
                    $this->set('dados', $dados);                              
                    $this->Session->setFlash("Documentos necessários (Cópia e Original): CPF, RG, comprovante de residência, comprovante de matrícula, declaração de frequencia (para atestar a frequência do aluno nas aulas). Necessário também uma foto 3x4.  ", "flash_custom");
                    
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
