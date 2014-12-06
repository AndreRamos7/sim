<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Sistema SIM');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        
            <?php echo $this->Html->charset(); ?>
            <title>
                    <?php echo $cakeDescription ?>:
                    <?php echo $this->fetch('title'); ?>
            </title>
            <?php
                    echo $this->Html->meta('icon');

                    echo $this->Html->css('base');
                    echo $this->Html->css('layout');
                    echo $this->Html->css('reset');
                    echo $this->Html->css('skeleton');
                    
                    echo $this->Html->script('jquery-1.10.2.min');
                                      

                    echo $this->fetch('meta');
                    echo $this->fetch('css');
                    echo $this->fetch('css');
                    echo $this->fetch('css');
                    echo $this->fetch('css');
                    echo $this->fetch('script');
                   // echo filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
            ?>
        
        <script type="text/javascript">
            //location.replace();
        </script>

        <link rel="shortcut icon" type="image/x-icon" href="/img/ico/favicon.ico">
        
        <!-- Mobile Specific Metas
        ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- PT Sans -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- Crete Roung -->
	<link href='http://fonts.googleapis.com/css?family=Crete+Round&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
                
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        
         
        <script src="/js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="/js/jquery-1.2.6.pack.js" type="text/javascript"></script>
        <script src="/js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript"></script>
        
        <script language="JavaScript" type="text/javascript">
           $(document).ready(function() {

                $("fieldset p input.cpf").mask("999.999.999-99");
                $("fieldset p input.rg").mask("999999-9");
                $("fieldset p input.data").mask("99/99/9999");
                $("fieldset p input.cnpj").mask("99.999.999/9999-99");
                $("fieldset p input.cep").mask("99999-999");
                $("fieldset p input.celular").mask("(99)9999 9999");
                $("fieldset p input.telefone").mask("(99)9999 9999");
                $("fieldset p input.fax").mask("(99)9999 9999");
                $("fieldset p input.ano").mask("9999");

                $( "select#selectNivel" ).change(function () {
                    var str = "";
                    $( "select#selectNivel option:selected" ).each(function() {
                        str = $( this ).text();
                    });
                    if(str === "Fundamental"){
                        
                        $('p.superior input.desreq').attr("required",false);
                        
                        $('p.fundamental').show();
                        $('p.superior').hide();
                        
                    }else if(str === "Médio"){
                        $('p.superior input.desreq').attr("required",false);
                        
                        $('p.fundamental').show();
                        $('p.superior').hide();
                    }else if(str === "Superior"){
                        $('p.superior input.desreq').attr("required",true);
                        
                        $('p.fundamental').hide();
                        $('p.superior').show();
                    }
                   // alert( str );
                }).change();
                    
            });
            
            
        </script>
    </head>
    <body>
       
       <header>
       <nav>
                        <div class="container">
            
				<div class="sixteen columns">
					<ul class="mainMenu">
						<li><a href="/" title="Home">Página Inicial</a></li>
						<li><a href='/info/contato' title='Contato'>Fale Conosco!</a></li>
						<li><a href='/info' title='ComoFunciona'>Como Funciona?</a></li>
						<li><a href='/info/duvidas' title='Duvidas'>Dúvidas Frequentes</a></li>
					</ul>
				</div>
			</div>
		</nav>

	      
    </header>
        
               
        <div id="content">
            <?php echo $this->fetch('content'); ?>        
        </div> 
        
            <footer>
		<div class="container">
			
			<div class="six columns">
                            <p></p> <br/>
                                 <p align="center"> SIM | Copyright ‎© 2014 <p>
                                <p align="center"> Desenvolvido por :<a href="mailto:biasilvabsi11@gmail.com"> Bianca Silva </a> e <a href="mailto:">André Ramos</a></p>
			</div>

			<div class="four columns social">
                            <p></p> <br />
				<h5 align="center"> Redes sociais </h5>
                                <p align="center">
                                <a href="https://www.youtube.com/channel/UC8JLlfsvyuL2NJfG83h-l5g"><img src='/img/ico/you_tube_1.png'></a>
				<a href="https://www.facebook.com/pages/Agora-Sim/1420155461570401?ref=hl"><img src='/img/ico/facebook.png'></a>
                                <a href="https://twitter.com/agorasim_"><img src='/img/ico/twitter.png'></a> </p>
				</div>

			<div class="six columns">
                            <p></p><br />
				<h5 align="center"> Entre em contato conosco! </h5>
				 <p align="center"> Mande-nos um email: 
					<a align="center" href='mailto:contato@sistemasim.com.br'>contato@sistemasim.com.br</a></p>
                                 
                        
                        </div>


		<a id="top" href='#'>&uarr;</a>	
                
                
	
        
                
        </div>
	</footer>
           
           
    </body>
</html>
