<!DOCTYPE html>
<div class='orange'>
    <div class='container'>
        <h2> Seja bem-vindo ao SIM Ananindeua! </h2>
        <h1> Escolha abaixo a opção que melhor se encaixa no seu perfil de usuário. <br />
        Após concluir o seu pré-cadastro, as informações necessárias para o término do seu cadastro serão mostradas na tela! <br />
        </h1>
		<h1> Endereço: Cidade Nova 5, WE 31, Antigo Tattoo Park. </h1>
        <a href='/' class='dalej'> Voltar </a> 
        
    </div>
</div>

        <?php 
            $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
        }
          ?>
      
<div class="clear"></div>
    <div class="container">
	
    
    <ul class="ca-menu">
    <li>
        <a href="/comums/cadastro/Ananindeua" id="botaoAbrirComuns" title="AbrirComuns">
            <span class="ca-icon"><img src="img/ico/userico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main"> Comuns </h2>
                
            </div>
        </a>
    </li>
    
     <li>
        <a href="/estudantes/cadastro/Ananindeua" id="botaoAbrirModal1" title="AbrirEstudantes">
            <span class="ca-icon"><img src="img/ico/estudanteico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Estudantes</h2>
                
            </div>
        </a>
    </li>
    
    <br />
    
    <li>
        <a href="http://00244.transdatasmart.com.br:24401/TDMaxwebcommerce/NovoCadastro.aspx" id="botaoAbrirModal3" title="AbrirEmpresas">
            <span class="ca-icon"><img src="img/ico/empresaico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Empresas</h2>
                
            </div>
        </a>
    </li>
    
     <li>
        <a href="/gratuitos/cadastro/Ananindeua" id="botaoAbrirModal4" title="AbrirGratuitos">
            <span class="ca-icon"><img src="img/ico/gratuitoico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Gratuidade</h2>
                
            </div>
        </a>
    </li>
</ul>
    <script>
            $("html, body").animate({scrollTop:$("div.orange").offset().top }, 'slow'); //animação obrigatoria em todos os conteudos
            
        </script>
    
    </div>
          <div class="clear"></div>