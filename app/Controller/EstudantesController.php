<?php
class EstudantesController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Estudantes";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
        $numArgs = func_num_args();
        $cidades = array("Castanhal", "Ananindeua", "SantaIsabel");
        
        if ($numArgs > 0) {
            $cidade = func_get_arg(0); 
            //echo "Cidade: $cidade";
            if($cidade == "Castanhal" or $cidade == "Ananindeua" or $cidade == "SantaIsabel"){                 
                $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                $this->set('cidade', $cidade);            
            }else{
                $this->redirect("/Error");
            }
        }else{
            $this->redirect("/Error");
        }

        if ($this->request->is('post')) {
            if ($this->Estudante->save($this->request->data)) {
                
                //código para gerar protocolo de cadastro
                $newId = $this->Estudante->id;
                $protocolo = rand(11111, 99999) . "-$newId";//echo "Protocolo: $protocolo";
                if($this->Estudante->saveField('protocolo', $protocolo)){
                    
                    $todos = $this->Estudante->query("SELECT `nome`, `telefone`, `rg`, `emissor`, `dataNascimento`, `sexo`, `nomeMae`, `nomePai`, `endereco`, `bairro`, `cidade`, `cep`, `naturalidade`, `estado`, `nomeEscola`, `cnpj`, `serie`, "
                            . "`grau`, `curso`, `periodo`, `matricula`, `dataIni`, `dataFim` "
                            . "FROM `estudantes` WHERE cidade = '$cidadeSPC'");
                    $paraGravar = array('CadastroSimCastanhal' => array("Estudante" => $todos));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidadeSPC/Estudantes.xml"); 
                    
                    $this->set('protocolo', $protocolo);
                    
                    $this->Session->setFlash("Documentos necessários (Cópia e Original): CPF, RG, comprovante de residência, comprovante de matrícula, declaração de frequencia (para atestar a frequência do aluno nas aulas).
. Necessário também uma foto 3x4.  ", "flash_custom");
                    header("location: /$cidadeSPC");
                    exit();
                }else{
                    $this->Session->setFlash('Erro! Protocolo de cadastro não pode ser gerado!', 'flash_custom');
                }
            }else{
                $this->Session->setFlash('Não foi possivel salvar seu cadastro!!', 'flash_custom');                
                $this->redirect("/$cidadeSPC");
            }
        }

        
    }
}
