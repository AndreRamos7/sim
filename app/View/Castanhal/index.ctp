<!DOCTYPE html>
<div class='orange'>

	<div class='container'>
			<h2> Seja bem-vindo ao SIM Castanhal! </h2>
			<h1> Logo abaixo você pode escolher a opção que melhor se encaixa no seu perfil de usuário e fazer o seu pré-cadastramento online! <br />
            Após concluir o seu pré-cadastramento, as informações necessárias para o término do seu cadastro serão mostradas na tela! <br />
            Se você precisar de ajuda pode entrar em contato conosco através do nosso email ou telefone.</h1>
			<a href='#' class='dalej'> Mais informações </a>
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
        <a href="/comums/cadastrar/Castanhal" id="botaoAbrirComuns" title="AbrirComuns">
            <span class="ca-icon"><img src="img/ico/userico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main"> Comuns </h2>
                <h3 class="ca-sub">Tem SIM para todo mundo!</h3>
            </div>
        </a>
    </li>
    
     <li>
        <a href="/estudantes/cadastrar/Castanhal" id="botaoAbrirModal1" title="AbrirEstudantes">
            <span class="ca-icon"><img src="img/ico/estudanteico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Estudantes</h2>
                <h3 class="ca-sub">Tem SIM para estudantes!</h3>
            </div>
        </a>
    </li>
    
    <br />
    
    <li>
        <a href="/empresas/cadastrar/Castanhal" id="botaoAbrirModal3" title="AbrirEmpresas">
            <span class="ca-icon"><img src="img/ico/empresaico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Empresas</h2>
                <h3 class="ca-sub">Tem SIM para empresas!</h3>
            </div>
        </a>
    </li>
    
     <li>
        <a href="/gratuitos/cadastrar/Castanhal" id="botaoAbrirModal4" title="AbrirGratuitos">
            <span class="ca-icon"><img src="img/ico/gratuitoico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Gratuidade</h2>
                <h3 class="ca-sub">Tem SIM para a gratuidade!</h3>
            </div>
        </a>
    </li>
</ul>
    
    
    </div>
     <script>
            $("html, body").animate({scrollTop:$("div.orange").offset().top }, 'slow'); //animação obrigatoria em todos os conteudos
            
        </script>
    <div class="clear"></div>