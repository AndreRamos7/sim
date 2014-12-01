<?php


class EmpresasController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Empresas";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuário'); 
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
        $numArgs = func_num_args();
        $cidades = array("Castanhal", "Ananindeua", "SantaIsabel");
        
        if ($numArgs > 0) {
            $cidade = func_get_arg(0); 
            //echo "Cidade: $cidade";
            if($cidade == "Castanhal" or $cidade == "Ananindeua" or $cidade == "SantaIsabel"){ 
               // $cidade = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;
                $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
                $this->set('cidade', $cidade);            
            }else{                
                $this->redirect("/Error");
                exit();
            }
        }else{
            $this->redirect("/Error");
        }
        if ($this->request->is('post')) {
            if ($this->Empresa->save($this->request->data)) {
                $todos = $this->Empresa->query("SELECT `razaoSocial`, `nomeFantasia`, `cnpj`, "
                        . "`inscEstadual`, `maxCartoes`, `qtdVts`, `qtdFuncionarios`, `subTipo`, "
                        . "`perfilCompra`, `estado`, `cidade`, `endereco`, `bairro`, `cep`, `site`, "
                        . "`telefone`, `celular`, `fax`, `email` FROM `empresas` WHERE cidade = '$cidadeSPC'");
                
                $paraGravar = array("CadastroSim$cidade" => array("Empresa" => $todos));
                $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                $xml->save("$path/sim/app/DATAXML/$cidadeSPC/Empresas.xml");                
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
