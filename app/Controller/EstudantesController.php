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
                //$cidade = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
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
                $todos = $this->Estudante->query("SELECT `nome`, `telefone`, `rg`, `emissor`, `dataNascimento`, `sexo`, `nomeMae`, `nomePai`, `endereco`, `bairro`, `cidade`, `cep`, `naturalidade`, `estado`, `nomeEscola`, `cnpj`, `serie`, "
                        . "`grau`, `curso`, `periodo`, `matricula`, `dataIni`, `dataFim` "
                        . "FROM `estudantes` WHERE cidade = '$cidadeSPC'");

                $paraGravar = array('CadastroSimCastanhal' => array("Estudante" => $todos));
                $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                $xml->save("$path/sim/app/DATAXML/$cidadeSPC/Estudantes.xml");                
                $this->Session->setFlash('Seu cadastro foi realizado com sucesso!!', 'flash_custom');
                //$this->set('mensagem', "Salvo com sucesso!!");
                $this->redirect("/$cidade");
            }else{
                $this->Session->setFlash('Não foi possivel salvar seu cadastro!!', 'flash_custom');                
                $this->redirect("/castanhal");
            }
        }

        
    }
}
