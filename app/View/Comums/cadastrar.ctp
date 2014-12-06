<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>

 <section class='gray'>
		<div class='container'>
        
        <p align="center"> <img src="/img/ico/userico.png"> </p>
			
				<h2 align="center"> Cadastro de usuários do tipo Comum / <?php echo $cidadeSPC;?></h2>
                
				<p align="center"> Preencha os dados abaixo para fazer o seu pré-cadastramento online. </p>
			</div>

	</section>


	<div class='clear'></div>




    <div class="container">
		<div class="sixteen columns form">
     <div style= "overflow-y:auto; height:900px; margin-bottom: 30px; align: center; ">
      <form action="/comums/cadastrar/<?php echo $cidade;?>" id="ComumCadastrarForm" class="register" method="post" accept-charset="utf-8">
    <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
              <?php 
           $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
            }
        ?>
        
        <fieldset class="row1">    
            <legend> Dados Pessoais </legend>
                        <p> <label for="comumNome">* Nome completo: </label>
                        <input name="data[Comum][nome]" id="ComumNome" maxlength="200" type="text" size="100" required  class="long"></p>
                 <p>    <label for="comumNomeMae"> Nome da Mãe: </label>
                        <input name="data[Comum][nomeMae]" id="ComumNomeMae" maxlength="100" type="text" size="80" class="long">
                 </p>
                 <p>
                        <label for="">*RG: </label>
                        <input name="data[Comum][rg]" id="ComumRg" maxlength="20" type="text" required class="campos campopequeno rg">
                 </p>
                 <p>
                       <label for="">* Orgão Emissor: </label>
                        <input name="data[Comum][emissor]" id="ComumEmissor" maxlength="10" type="text" required  class="campos campopequeno">
                    </p>
                <p>
                        <label for="">* CPF:</label>
                        <input name="data[Comum][cpf]" maxlength="20" type="text" id="ComumCpf" required class=" cpf">
                   </p>
                    <p>
                        <label for="">* Sexo: </label>
                        <label >M<input name="data[Comum][sexo]" id="ComumSexo"  type="radio" value="M"> </label>
                        <label> F <input name="data[Comum][sexo]" id="ComumSexo"  type="radio" value="F"> </label>
                    </p>
               
            
        </fieldset>
        
        
        <fieldset class="row1">    
            <legend>Endereço</legend>
            
                    <p> <label for="">* Endereço: </label>
                        <input name="data[Comum][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="ComumEndereco" maxlength="100" type="text" size="80" required class="long">
                    </p>
                
                <p>    <label for="">* Bairro: </label>
                        <input name="data[Comum][bairro]" id="ComumBairo" maxlength="50" type="text" size="30" required class="">        
                   </p>
                   <p>
                        <label for="">* CEP: </label>
                        <input name="data[Comum][cep]" id="ComumCep" maxlength="20" type="text" required class="campos  campopequeno cep">
                    </p>
                <p>
                        <label  for="">* Cidade: </label>
                        <select name="data[Comum][cidade]" id="ComumCidade" maxlength="20" class="" >
                            <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
                        </select>
                    </p>
                    <p>
                        <label for="">* Estado: </label>
                        <select name="data[Comum][estado]" id="ComumEstado" maxlength="1"  class="">
                            <option value="PA"> PA </option>
                        </select>
                    </p>
                
        </fieldset>
        
        <fieldset class="row1">    
            <legend>Contatos</legend>
                             
                     <p>   <label for="ComumEmail">* Email: </label>
                        <?php echo $this->Form->input('Cliente.nome',array('label' => false,'size'=>80, 'maxlength' => 100, "class" => "long",'error' => array('class' => 'campo-invalido'))); ?>                        
                    </p>
                    
                  <p>      <label for=""> Site: </label>
                        <input name="data[Comum][site]" id="ComumSite" maxlength="100" type="text" size="80" class="long">
                    </p>
                <p>
                        <label for="">* Telefone: </label>
                        <input name="data[Comum][telefone]" id="ComumTelefone" maxlength="15" type="text" required class="">        
                    </p>            
                    <p>
                        <label for=""> Celular: </label>
                        <input name="data[Comum][celular]" id="ComumCelular" maxlength="15" type="text" class="">        <p>
                       <label for=""> Fax: </label>
                        <input name="data[Comum][fax]" id="ComumFax" maxlength="15" type="text" class="">        
                    </p>
                    
                                      
                  
        </fieldset>
        
        
       
    <fieldset class="buttons">
    	<legend> </legend>
        <p style=" float:right; font-size:16px;">* Campos obrigatórios</p>
        <p style=" float:right; "> 
        <button class="button" value="Voltar" id="btnvoltar" onclick="history.back();"> Voltar </button>  
        <button class="button" type="submit" value="Salvar cadastro" id="btncadastrar"> Salvar cadastro! </button></p>	       
    </fieldset>
	</form>
     </div>
		</div>
	</div>

