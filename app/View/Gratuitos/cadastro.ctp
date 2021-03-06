<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>

<section class='gray'>
    <div class='container'>
        <p align="center"> <img src="/img/ico/gratuitoico.png"> </p>
        <h2 align="center"> Cadastro de usuários do tipo Gratuito / <?php echo $cidadeSPC;?></h2>
        <p align="center"> Preencha os dados abaixo para fazer o seu pré-cadastro online. </p>
    </div>
</section>

<div class='clear'></div>


<div class="container heightauto">
		<div class="sixteen columns form heightauto">
     
      <form action="/Gratuitos/cadastrar" id="GratuitoCadastrarForm" class="register heightauto" method="post" accept-charset="utf-8">
    <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
              <?php 
           $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
            }
        ?>
         <p align=center> Antes de concluir o cadastro certifique-se de que seus dados estão corretos, pois não poderão ser alterados!!! <p>
    <fieldset class="row1">    
        <legend>Dados Pessoais</legend>
        <p> 
            <label>* Nome completo: </label>
            <input name="data[Gratuito][nome]" id="GratuitoNome" maxlength="200" type="text" size="80" required  class="long">
        </p> 
        <p> 
            <label>*RG: </label>
            <input name="data[Gratuito][rg]" id="GratuitoRg" maxlength="20" type="text" required class="campos campopequeno rg" autocomplete="off">
        </p>
        <p> 
            <label>* Orgão Emissor: </label>
            <input name="data[Gratuito][emissor]" id="GratuitoEmissor" maxlength="10" type="text" required  class="campos campopequeno" placeholder="Ex: SSP, SEGUP, etc.">
        </p>
        <p> 
            <label>* CPF:</label>
            <input name="data[Gratuito][cpf]" maxlength="20" type="text" id="GratuitoCpf" required class="campos campopequeno cpf" autocomplete="off">
        </p>
        <p> 
            <label>* Data de Nascimento: </label>   
            <input name="data[Gratuito][dataNasc]" id="datepicker" maxlength="10" type="text" required  class="campos campopequeno data"  autocomplete="off">
        </p>
        <p> 
            <label>Nº Aposentadoria: </label>   
            <input name="data[Gratuito][nroAposentadoria]" id="GratuitoNroAposentadoria" maxlength="10" type="text" class="campos campopequeno">
        </p>
        <p>
            <label >* Sexo: </label>
            <label for="sexo1" class="sexo">M </label><input name="data[Gratuito][sexo]" id="sexo1"  type="radio" value="M" required>
            <label for="sexo2" class="sexo"> F  </label><input name="data[Gratuito][sexo]" id="sexo2"  type="radio" value="F" required> 
        </p>
            </fieldset>


    <fieldset class="row1">    
        <legend>Endereço</legend>
        <p> 
            <label>* Endereço: </label>
            <input name="data[Gratuito][endereco]" placeholder="Ex: Rua São João, 618" id="GratuitoEndereco" maxlength="100" type="text" size="80" required class="long">
        </p>
        <p> 
            <label>* Bairro: </label>
            <input name="data[Gratuito][bairro]" id="GratuitoBairo" maxlength="50" type="text" size="30" required class="campos campopequeno">        
        </p>
        <p> 
            <label>* CEP: </label>
            <input name="data[Gratuito][cep]" id="GratuitoCep" maxlength="20" type="text" required class="campos  campopequeno cep" autocomplete="off">
        </p>

        <p> 
            <label>* Cidade: </label>
            <select name="data[Gratuito][cidade]" id="GratuitoCidade" maxlength="20" class="campos campopequeno" >
                <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
            </select>
        </p>
        <p> 
            <label>* Estado: </label>
            <select name="data[Gratuito][estado]" id="GratuitoEstado" maxlength="1"  class="campos campopequeno" >
                <option value="PA"> PA </option>
            </select>
        </p>
    </fieldset>

    <fieldset class="row1">    
        <legend>Contatos</legend>
        <p> 
            <label>* Telefone: </label>
            <input name="data[Gratuito][telefone]" id="GratuitoTelefone" maxlength="15" type="text" required class="campos campopequeno telefone" autocomplete="off">        
        </p>
        <p title="Com o dígito 9">
            <label>Celular: </label>
            <input name="data[Gratuito][celular]" id="GratuitoCelular" maxlength="15" type="text" class="campos campopequeno celular" autocomplete="off">        
        </p>
    </fieldset>



    <fieldset class="buttons">
        <p style= "float:right; font-size:16px;"> * Campos obrigatórios</p>
        <p style=" float:right;"> 
            <button class="button" value="Voltar" id="btnvoltar" onclick="history.back();"> Voltar </button>  
            <button class="button" type="submit" value="Salvar cadastro" id="btncadastrar"> Salvar cadastro! </button> 
        </p>	       
    </fieldset>


    </form>
</div>
    <script>
         //animação obrigatoria em todos os conteudos
        $("html, body").animate({scrollTop:$("section.gray").offset().top }, 'slow');
    </script>
</div>

