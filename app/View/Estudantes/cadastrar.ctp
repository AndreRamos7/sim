<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>

<section class='gray'>
		<div class='container'>
        
        <p align="center"> <img src="/img/ico/estudanteico.png"> </p>
			
				<h2 align="center"> Cadastro de usuários do tipo Estudantes / <?php echo $cidadeSPC;?></h2>
                
				<p align="center"> Preencha os dados abaixo para fazer o seu pré-cadastramento online. </p>
			</div>

	</section>


	<div class='clear'></div>


<div class="container">
		<div class="sixteen columns form">
                    <div id="boxForm">
     
      <form action="/Estudantes/cadastrar/<?php echo $cidade;?>" id="EstudanteCadastrarForm" class="register" method="post" accept-charset="utf-8">
    <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
              <?php 
           $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
            }
        ?>


    <fieldset class="row1">    
        <legend>Dados Pessoais</legend>
        <p> 
            <label>* Nome completo: </label>
            <input name="data[Estudante][nome]" id="EstudanteNome" maxlength="200" type="text" size="80" required  class="long">
        </p>
        <p> 
            <label>* Nome da Mãe: </label>
            <input name="data[Estudante][nomeMae]" id="EstudanteNomeMae" maxlength="100" type="text" size="80" class="long">
        </p>
        <p> 
            <label>* Nome do Pai: </label>
            <input name="data[Estudante][nomePai]" id="EstudanteNomeMae" maxlength="100" type="text" size="80" class="long">
        </p>
        <p> 
            <label>*RG: </label>
            <input name="data[Estudante][rg]" id="EstudanteRg" maxlength="20" type="text" required class="campos campopequeno rg">
        </p>
        <p> 
            <label>* Orgão Emissor: </label>
            <input name="data[Estudante][emissor]" id="EstudanteEmissor" maxlength="10" type="text" required  class="campos campopequeno">
        </p>
        <p> 
            <label>* CPF:</label>
            <input name="data[Estudante][cpf]" maxlength="20" type="text" id="EstudanteCpf" required class="campos campopequeno cpf">
        </p>
        <p>
            <label >* Sexo: </label>
            <label for="sexo1" class="sexo">M </label><input name="data[Estudante][sexo]" id="sexo1"  type="radio" value="M">
            <label for="sexo2" class="sexo"> F  </label><input name="data[Estudante][sexo]" id="sexo2"  type="radio" value="F"> 
        </p>
        <p> 
            <label>* Data de Nascimento: </label><br>
            <input name="data[Estudante][dataNascimento]" id="datepicker" maxlength="10" type="text" required  class="campos campopequeno data" readonly="">
        </p>
    </fieldset>


    <fieldset class="row1">    
        <legend>Endereço</legend>
        <p> 
            <label>* Endereço: </label>
            <input name="data[Estudante][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="EstudanteEndereco" maxlength="100" type="text" size="80" required class="long">
        </p>                    
        <p> 
            <label>* Bairro: </label>
            <input name="data[Estudante][bairro]" id="EstudanteBairo" maxlength="50" type="text" size="30" required class="campos campopequeno">        
        </p>
        <p> 
            <label>* CEP: </label>
            <input name="data[Estudante][cep]" id="EstudanteCep" maxlength="20" type="text" required class="campos campopequeno cep">
        </p>
        <p> 
            <label>* Cidade: </label>
            <select name="data[Estudante][cidade]" id="EstudanteCidade" maxlength="20" class="campos campopequeno" >
                <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
            </select>
        </p>
        <p> 
            <label>* Estado: </label>
            <select name="data[Estudante][estado]" id="EstudanteEstado" maxlength="1"  class="campos campopequeno" >
                <option value="PA"> PA </option>
            </select>
        </p>
    </fieldset>

    <fieldset class="row1">    
        <legend>Dados Escolares</legend>

        <p>
            <label>* Nível de Escolaridade: </label> 
            <select id="selectNivel"  class="campos campopequeno" name="data[Estudante][grau]">
                <option value="1">Fundamental</option>
                <option value="2">Médio</option>
                <option value="3">Superior</option>                                    
            </select>
        </p>                        

        <p > 
            <label>* Nome da Instituição: </label>
            <input name="data[Estudante][nomeEscola]" id="EstudanteNomeEscola" maxlength="200" type="text" size="80" required  class="long">
        </p>

        <p class="superior"> 
            <label for="EstudanteCurso">* Curso: </label> 
            <input name="data[Estudante][curso]" id="EstudanteCurso" maxlength="50" type="text" size="30" required class="campos campopequeno desreq">
        </p>

        <p class="superior"> 
            <label for="EstudanteMatricula" >* Matricula: </label> 
            <input name="data[Estudante][matricula]" id="EstudanteMatricula" maxlength="20" type="text" required class="campos campopequeno desreq">
        </p>

        <p class="superior">  
            <label for="EstudanteDataIni">* Ano Início:</label>  
            <input name="data[Estudante][dataIni]" id="EstudanteDataIni" maxlength="4" type="text" size="20" required class="campos campopequeno desreq">
        </p>

        <p class="superior">
            <label for="EstudanteDataFim">* Ano Fim: </label>
            <input name="data[Estudante][dataFim]" id="EstudanteDataFim" maxlength="4" type="text" required class="campos campopequeno desreq">
        </p>

        <p class="superior"> 
            <label for="EstudantePeriodo">* Período: </label> 
            <input name="data[Estudante][periodo]" id="EstudantePeriodo" placeholder=" Ex: 6º semestre" maxlength="50" type="text" size="20" required class="campos campopequeno desreq">
        </p>

        <p class="fundamental medio"> 
            <label for="EstudanteSerie" id="EstudanteSerie">* Série: </label>
            <input name="data[Estudante][serie]" id="EstudanteSerie" maxlength="20" type="text" required class="campos campopequeno desreq">
        </p>
    </fieldset>

            <fieldset class="row1">    
                <legend>Contatos</legend>
                <p> <label for="ComumEmail">* Email: </label>
                            <input name="data[Estudante][email]" id="ComumEmail" maxlength="100" type="email" size="80" required class="long">
                </p>
                <p> <label> Site: </label>
                            <input name="data[Estudante][site]" id="EstudanteSite" maxlength="100" type="text" size="80" class="long">
                </p>
                <p> <label>* Telefone: </label>
                            <input name="data[Estudante][telefone]" id="EstudanteTelefone" maxlength="15" type="text" required class="campos  campopequeno telefone">        
                </p>
                <p> <label>* Celular: </label>
                            <input name="data[Estudante][celular]" id="EstudanteCelular" maxlength="15" type="text" class="campos campopequeno celular">        
                </p>
                <p> <label> Fax: </label>
                    <input name="data[Estudante][fax]" id="EstudanteFax" maxlength="15" type="text" class="campos campopequeno fax">        
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
    <script>
        $("html, body").animate({scrollTop:$("section.gray").offset().top }, 'slow'); //animação obrigatoria em todos os conteudos

    </script>
                </div> 