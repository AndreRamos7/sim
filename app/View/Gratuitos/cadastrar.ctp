<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>

<section class='gray'>
		<div class='container'>
        
        <p align="center"> <img src="/img/ico/gratuitoico.png"> </p>
			
				<h2 align="center"> Cadastro de usuários do tipo Gratuito / <?php echo $cidadeSPC;?></h2>
                
				<p align="center"> Preencha os dados abaixo para fazer o seu pré-cadastramento online. </p>
			</div>

	</section>


	<div class='clear'></div>


<div class="container heightauto">
		<div class="sixteen columns form heightauto">
     
      <form action="/Gratuitos/cadastrar/<?php echo $cidade;?>" id="GratuitoCadastrarForm" class="register heightauto" method="post" accept-charset="utf-8">
    <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
              <?php 
           $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
            }
        ?>
         
    <fieldset class="row1">    
        <legend>Dados Pessoais</legend>
        <p> <label>* Nome completo: </label>
                            <input name="data[Gratuito][nome]" id="GratuitoNome" maxlength="200" type="text" size="80" required  class="long">
        </p> 
        <p> <label>*RG: </label>
                            <input name="data[Gratuito][rg]" id="GratuitoRg" maxlength="20" type="text" required class="campos campopequeno rg">
        </p>
        <p> <label>* Orgão Emissor: </label>
                            <input name="data[Gratuito][emissor]" id="GratuitoEmissor" maxlength="10" type="text" required  class="campos campopequeno">
        </p>
        <p> <label>* CPF:</label>
                            <input name="data[Gratuito][cpf]" maxlength="20" type="text" id="GratuitoCpf" required class="campos campopequeno cpf">
        </p>
        <p> <label>* Data de Nascimento: </label>   
                            <input name="data[Gratuito][dataNasc]" id="datepicker" maxlength="10" type="text" required  class="campos campopequeno data" readonly="">
        </p>
        <p> <label>* Nº Aposentadoria: </label>   
                            <input name="data[Gratuito][nroAposentadoria]" id="GratuitoNroAposentadoria" maxlength="10" type="text" required  class="campos campopequeno">
        </p>
        <p> <label>* Sexo: </label>                    
                            <label>M <input name="data[Gratuito][sexo]" id="GratuitoSexo" maxlength="1" type="radio" value="M"> </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<label>F <input name="data[Gratuito][sexo]" id="GratuitoSexo" maxlength="1" type="radio" value="F">  </label>
        </p>
            </fieldset>


    <fieldset class="row1">    
                <legend>Endereço</legend>
                <p> <label>* Endereço: </label>
                    <input name="data[Gratuito][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="GratuitoEndereco" maxlength="100" type="text" size="80" required class="long">
                </p>
                <p> <label>* Bairro: </label>
                            <input name="data[Gratuito][bairro]" id="GratuitoBairo" maxlength="50" type="text" size="30" required class="campos campopequeno">        
                </p>
                <p> <label>* CEP: </label>
                            <input name="data[Gratuito][cep]" id="GratuitoCep" maxlength="20" type="text" required class="campos  campopequeno cep">
                </p>

                <p> <label>* Cidade: </label>
                            <select name="data[Gratuito][cidade]" id="GratuitoCidade" maxlength="20" class="campos campopequeno" >
                                <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
                            </select>
                </p>
                <p> <label>* Estado: </label>
                            <select name="data[Gratuito][estado]" id="GratuitoEstado" maxlength="1"  class="campos campopequeno" >
                                <option value="PA"> PA </option>
                            </select>
                </p>
            </fieldset>

    <fieldset class="row1">    
                <legend>Contatos</legend>
                <p> <label>* Telefone: </label>
                            <input name="data[Gratuito][telefone]" id="GratuitoTelefone" maxlength="15" type="text" required class="campos campopequeno telefone">        
                </p>
                <p>            <label>Celular: </label>
                            <input name="data[Gratuito][celular]" id="GratuitoCelular" maxlength="15" type="text" class="campos campopequeno celular">        
                </p>
            </fieldset>



    <fieldset class="buttons">
             <p style= "float:right; font-size:16px;"> * Campos obrigatórios</p>
        <p style=" float:right;"> 
        <button class="button" value="Voltar" id="btnvoltar" onclick="history.back();"> Voltar </button>  
        <button class="button" type="submit" value="Salvar cadastro" id="btncadastrar"> Salvar cadastro! </button> </p>	       
      
        </fieldset>


    </form>
</div>
                </div>

