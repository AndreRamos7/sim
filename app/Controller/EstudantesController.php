<?php
class EstudantesController extends AppController { 
    //public $helpers = array("Form", "Html"); 
    public $name = "Estudantes";

    public function cadastrar() { 
       // $this->set('title', 'Adicionar usuÃ¡rio'); 
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
                    $dados["chamado"] = "Favor comparecer ao escritório do SIM portando documentações solicitadas e o n° de protocolo gerado a partir do dia 02/03/2015. Para evitar transtornos, compareça na data mencionada. Atendimento por ordem de chegada.";
                    $dados["docs"] = "Documentos necessários (Cópia e Original): CPF, RG, Comprovante de residência, Comprovante de Matrícula e Comprovante de Frequência. Apresentar também esta página impressa.";
					
                    $this->set('dados', $dados);                              
                    $this->Session->setFlash("Favor guardar seu n° de protocolo.", "flash_custom");
                    
                }else{
                    $dados["result"] = "Nao foi possível cadastrar você!!";                    
                    $this->set('dados', $dados);   
                    $this->Session->setFlash('Erro! Protocolo de cadastro não pode ser gerado!', 'flash_custom');
                }
            }else{
                $dados["result"] = "Não foi possível cadastrar você!!";                    
                $this->set('dados', $dados);   
                $this->Session->setFlash('Não foi possível salvar seu cadastro!!', 'flash_custom');                                
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
    public function recuperar() {
         if ($this->request->is('post')) {
            $dataParaComparecer = "26/02/2015";

            $nomeForm =  $this->request->data['Usuario']['nome'];
            $cidade =  $this->request->data['Usuario']['cidade'];
            $dataNasc =  $this->request->data['Usuario']['dataNasc'];
           // $cepForm =  $this->request->data['Usuario']['cep'];
            
            
          //  $cidadeSemEspaco = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
            //$condicaoDeConsulta = array("nome =" => $nomeForm, "cidade = " => $cidade, "dataNascimento =" => $dataNasc);
                    //,"cep =" => $cepForm);
            
            $where = "nome = '$nomeForm' "
                    . "and cidade = '$cidade' "
                    . "and dataNascimento = '$dataNasc' ";
             //       . "and cep = '$cepForm'";
                
            /*$query = $this->Estudante->find('first', array(
                'fields' => array('nome', 'protocolo', 'modified'),
                'order' => array('modified' => 'asc'),
                'conditions' => $condicaoDeConsulta
            ));*/
           // $nomeUsuario =  $this->Estudante->field("nome",$condicaoDeConsulta, 'modified desc');
            
            //$dataNascUsuario =  $this->Estudante->field("dataNascimento",$condicaoDeConsulta, 'modified desc');
			//echo $nomeUsuario;
            
            $todos = $this->Estudante->query("SELECT protocolo,  FROM `estudantes` WHERE $where");
                        //print_r($todos);
                        //echo count($todos);
            //if($nomeUsuario != null and $nomeUsuario != "" ){
            if(isset($todos) and count($todos) > 0 ){
                //$protocolo =  $this->Estudante->field("protocolo",$condicaoDeConsulta, 'modified desc');
                //$modified =  $this->Estudante->field("modified",$condicaoDeConsulta, 'modified desc');

                //dados enviados para VIEW
    //            $query['Estudante'][''] 
                $dados["dateTime"] = $todos[0]["estudantes"]["modified"];
                $dados["nomeUsuario"] = $todos[0]["estudantes"]["nome"];                
                $dados["protocolo"] = $todos[0]["estudantes"]["protocolo"];
                $dados["dataNasc"] = $todos[0]["estudantes"]["dataNascimento"];
                
                $dados["result"] = "O protocolo do seu pré-cadastro foi encontrado!!";
                $dados["chamado"] = "Favor comparecer ao escritório do SIM portando documentações solicitadas e o n° de protocolo gerado a partir do dia $dataParaComparecer. Para evitar transtornos, compareça na data mencionada. Atendimento por ordem de chegada.";
                $dados["docs"] = "Documentos necessários (Cópia e Original): CPF, RG, Comprovante de residência, Comprovante de Matrícula e Comprovante de Frequência. Apresentar também esta página impressa. ATENÇÃO! O estudante deve comparecer pessoalmente para capturar a biometria e tirar a foto que será impressa no cartão!";

                $this->set('dados', $dados);                              
                $this->Session->setFlash("Favor guardar seu número de protocolo.", "flash_custom");
            }else{
                $dados["result"] = "Nome ou data de nascimento NÃO foram encontrados!!";
                $this->set('dados', $dados);                              
                //$this->Session->setFlash("Digite seu nome corretamente!!", "flash_custom");
                
            }
        }

    }
    public function recuperacao() {
        $numArgs = func_num_args();        
            if ($numArgs > 0) {
                $cidade = func_get_arg(0);
                $this->set('cidade', $cidade);                              
            }else{
                $this->redirect("/Error");
            }
            
    }
    
    
}