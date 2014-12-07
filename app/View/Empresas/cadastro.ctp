<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>

<section class='gray'>
    <div class='container'>
        <p align="center"> <img src="/img/ico/empresaico.png"> </p>
        <h2 align="center"> Cadastro de usuários do tipo Empresas / <?php echo $cidadeSPC;?></h2>
        <p align="center"> Preencha os dados abaixo para fazer o seu pré-cadastramento online. </p>
    </div>
</section>
<div class='clear'></div>
<div class="container">
    <div class="sixteen columns form">
     
        <form action="/Empresas/cadastrar" id="EmpresaCadastrarForm" class="register" method="post" accept-charset="utf-8">
            <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
            <?php 
                $msg = $this->Session->flash();
                 if(isset($msg) and $msg != ""){
                     //echo "<script>alert('$msg')</script>";
                 }
            ?>



           <fieldset class="row1">    
                <legend> Dados Pessoais </legend>
                <p> 
                    <label for="EmpresaNomeFantasia">* Nome fantasia: </label>
                    <input name="data[Empresa][nomeFantasia]" id="EmpresaNomeFantasia" maxlength="200" type="text" size="80" required  class="long">
                </p>
                <p> 
                    <label>* Razão Social: </label>
                    <input name="data[Empresa][razaoSocial]" id="EmpresaRazaoSocial" maxlength="100" required type="text" size="" class="long">
                </p>
                <p> 
                    <label>* CNPJ:</label>
                    <input name="data[Empresa][cnpj]" maxlength="20" type="text" id="EmpresaCnpj" required class="campos campopequeno cnpj" autocomplete="off" >
                </p>
                <p> 
                    <label for="EmpresaInscEstadual"> Inscrição Estadual: </label>
                    <input name="data[Empresa][inscEstadual]" id="EmpresaInscEstadual" maxlength="14" type="text" class="campos campopequeno"  autocomplete="off"> 
                </p>
            </fieldset>


            <fieldset class="row1">    
                    <legend>Endereço</legend>
                    <p> 
                        <label>* Endereço: </label>
                        <input name="data[Empresa][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="EmpresaEndereco" maxlength="100" type="text" size="80" required class="long">
                    </p>

                    <p> 
                        <label>* Bairro: </label>
                        <input name="data[Empresa][bairro]" id="EmpresaBairro" maxlength="50" type="text" size="30" required class="campos campopequeno">        
                    </p>
                    <p> 
                        <label>* CEP: </label>
                        <input name="data[Empresa][cep]" id="EmpresaCep" maxlength="20" type="text" required class="campos campopequeno cep"  autocomplete="off">
                    </p>
                    <p> 
                        <label>* Cidade: </label>
                        <select name="data[Empresa][cidade]" id="EmpresaCidade" maxlength="20" class="campos  campopequeno" >                
                            <option value="<?php echo $cidadeSPC;?>"><?php echo $cidadeSPC;?></option>
                        </select>
                    </p>
                    <p>
                        <label>* Estado: </label>
                        <select name="data[Empresa][estado]" id="EmpresaEstado" maxlength="1"  class="campos  campopequeno" >
                            <option value="PA"> PA </option>
                        </select>
                    </p>
            </fieldset>

            <fieldset class="row1">    
                <legend>Contatos</legend>
                <p> 
                    <label for="ComumEmail">* Email: </label>
                    <input name="data[Empresa][email]" id="EmpresaEmail" maxlength="100" type="email" size="80" required class="long">
                </p>

                <p> 
                    <label> Site: </label>
                    <input name="data[Empresa][site]" id="EmpresaSite" maxlength="100" type="text" size="80" class="long">
                </p>

                <p> 
                    <label>* Telefone: </label>
                    <input name="data[Empresa][telefone]" id="EmpresaTelefone" maxlength="15" type="text" required class="campos campopequeno telefone"  autocomplete="off" >        
                </p>            

                <p> 
                    <label> Celular: </label>
                    <input name="data[Empresa][celular]" id="EmpresaCelular" maxlength="15" type="text" class="campos campopequeno celular" autocomplete="off" >        
                </p>
                <p> 
                    <label> Fax: </label>
                    <input name="data[Empresa][fax]" id="EmpresaFax" maxlength="15" type="text" class="campos campopequeno fax"  autocomplete="off">        
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
        $("html, body").animate({scrollTop:$("section.gray").offset().top }, 'slow'); //animação obrigatoria em todos os conteudos
    </script>
</div>
        