<?php 
App::uses('XML2Array', 'Controller');
App::uses('Util', 'app/Lib');


class ComumsController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Comums";

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
            if ($this->Comum->save($this->request->data)) {
                
                //código para gerar protocolo de cadastro
                $newId = $this->Comum->id;
                $protocolo = rand(11111, 99999) . "-$newId";//echo "Protocolo: $protocolo";
                
                if($this->Comum->saveField('protocolo', $protocolo)){

                    //código para gerar arquivo XML
                    $todosComuns = $this->Comum->query("SELECT "
                            . "`protocolo`, `nome`, `emissor`, `rg`, `cpf`, `sexo`, `email`, `cep`, `estado`, `cidade`"
                            . ", `bairro`, `endereco`, `site`, `celular`, `fax`, `nomeMae`, `telefone` "
                            . "FROM `comums` WHERE cidade = '$cidadeSPC'");                    
                    $paraGravar = array("CadastroSim$cidade" => array("comum" => $todosComuns));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidadeSPC/comuns.xml"); 
                    
                    //código para enviar o protocolo para VIEW
                    $this->set('protocolo', $protocolo);
                     
                    //código de mensagem de resultado e redirecionamento
                    $this->Session->setFlash("Documentos necessários (Cópia e Original): CPF, RG e comprovante de residência. Necessário também uma foto 3x4.  ", "flash_custom");
                    header("location: /$cidadeSPC");
                    exit();
                }else{
                    $this->Session->setFlash('Erro! Protocolo de cadastro não pode ser gerado!', 'flash_custom');
                }
                //$this->redirect("/$cidade");
            }else{
                
                $this->Session->setFlash('Não foi possivel salvar seu cadastro!!', 'flash_custom');                
                //$this->redirect("/castanhal");
            }
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function teste() {
        $todosComuns = $this->Comum->query("SELECT "
                            . "`protocolo`, `nome`, `emissor`, `rg`, `cpf`, `sexo`, `email`, `cep`, `estado`, `cidade`"
                            . ", `bairro`, `endereco`, `site`, `celular`, `fax`, `nomeMae`, `telefone` "
                            . "FROM `comums` WHERE cidade = 'castanhal'");
        $path = filter_input(INPUT_SERVER, "DOCUMENT_ROOT");            
        
        $novoModeloArray = array();
        foreach ($todosComuns as $key => $value) {
            $novoModeloArray["comuns"] = $value["comums"];
            //$value
            //echo $key ;
            echo "<pre>";
            //print_r($value);
            echo "</pre>";
        }
        /*/*echo json_encode($todosComuns, $options);
        
        
        $xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test_array, array ($xml, 'addChild'));
print $xml->asXML();
        */
        
        array(
            1 => array("comums" => array("nome" => "andre", "id" => "asd")), 
            2 => array("comums" => array("nome" => "andre", "id" => "asd"))
            );
        $paraGravar = array("root" => $novoModeloArray);
         
         //$paraGravar = array_values($todosComuns);
        $xml = Xml::build($novoModeloArray, array('return' => 'domdocument'));                
        $xml->save("$path/app/DATAXML/Castanhal/comuns.xml"); 
        
        
        echo "<pre>";
            print_r($paraGravar);
        echo "</pre>";
    }
    
    
}

