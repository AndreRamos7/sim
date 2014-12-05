<?php
class GratuitosController extends AppController { 
    
    public $name = "Gratuitos";

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
            die("erro");
        }
        
        if ($this->request->is('post')) {
            if ($this->Gratuito->save($this->request->data)) {

                //código para gerar protocolo de cadastro
                $newId = $this->Gratuito->id;
                $protocolo = rand(11111, 99999) . "-$newId";//echo "Protocolo: $protocolo";
                
                if($this->Gratuito->saveField('protocolo', $protocolo)){
                    //código para gerar arquivo XML
                    $todos = $this->Gratuito->query("SELECT `nome`, `cpf`, `rg`, `emissor`, `subTipoGratuitoID`, `nroAposentadoria`, `sexo`, `dataNasc`, `dataValidade`, `limiteMensal`,"
                            . " `telefone`, `cep`, `cidade`, `bairro`, `endereco`, `celular`, `estado` "
                            . "FROM `gratuitos` WHERE `cidade` = '$cidadeSPC'");
                    $paraGravar = array("CadastroSim$cidade" => array("Gratuito" => $todos));
                    $xml = Xml::build($paraGravar, array('return' => 'domdocument'));                
                    $xml->save("$path/app/DATAXML/$cidadeSPC/Gratuitos.xml");                
                    $this->Session->setFlash('Seu cadastro foi realizado com sucesso!!', 'flash_custom');
                    
                    $this->set('protocolo', $protocolo);
                    
                    $this->Session->setFlash("Documentos necessários (Cópia e Original): CPF, RG e comprovante de residência. Necessário também uma foto 3x4.", "flash_custom");
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
