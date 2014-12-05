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
                    // Evento de clique do elemento: ul#menu li.parent > a
                    $('ul#menu li.parent > a').click(function() {
                            // Expande ou retrai o elemento ul.sub-menu dentro do elemento pai (ul#menu li.parent)
                            $('ul.sub-menu', $(this).parent()).slideToggle('fast', function() {
                                    // Depois de expandir ou retrair, troca a classe 'aberto' do <a> clicado       
                                    $(this).parent().toggleClass('aberto');
                            });
                            return false;
                    });
                    
                    $( "select#selectNivel" ).change(function () {
                        var str = "";
                        $( "select#selectNivel option:selected" ).each(function() {
                            str = $( this ).text();
                        });
                        if(str === "Fundamental"){
                            
                            $('tr#iniFim input.desreq').attr("required",false);  
                            $('tr#cursoEMatricula input.desreq').attr("required",false);
                            $('tr#periodoEGrau input.desreq').attr("required",false);
                            $('tr#iniFim').hide();
                            $('tr#cursoEMatricula').hide(); 
                            $('tr#periodoEGrau').hide(); 
                            
                        }else if(str === "Médio"){
                            $('tr#iniFim input.desreq').attr("required",false);  
                            $('tr#cursoEMatricula input.desreq').attr("required",false);
                            $('tr#periodoEGrau input.desreq').attr("required",false);
                            $('tr#iniFim').hide();
                            $('tr#cursoEMatricula').hide(); 
                            $('tr#periodoEGrau').hide(); 
                            
                        }else if(str === "Superior"){
                            $('tr#iniFim input.desreq').attr("required",true);  
                            $('tr#cursoEMatricula input.desreq').attr("required",true);
                            $('tr#periodoEGrau input.desreq').attr("required",true);
                            $('tr#iniFim').show();
                            $('tr#cursoEMatricula').show(); 
                            $('tr#periodoEGrau').show(); 
                            
                        }
                        
                        //alert( str );
                    }).change();
                    
                    $(".cpf").mask("999.999.999-99");
                    $(".rg").mask("999999-9");
                    $(".data").mask("99/99/9999");
                    $(".cnpj").mask("99.999.999/9999-99");
                    $(".cep").mask("99999-999");
                    $(".celular").mask("(99)9999 9999");
                    $(".telefone").mask("(99)9999 9999");
                    $(".fax").mask("(99)9999 9999");
                    $(".ano").mask("9999");
                    
            });
            
            
        </script>
    </head>
    <body>
       
       <header>
       <nav>
                        <div class="container">
            
				<div class="sixteen columns">
					<ul class="mainMenu">
						<li><a href="#" title="Home">Página Inicial</a></li>
						<li><a href='#' title='Contato'>Fale Conosco!</a></li>
						<li><a href='#' title='ComoFunciona'>Como Funciona?</a></li>
						<li><a href='#' title='Duvidas'>Dúvidas Frequentes</a></li>
					</ul>
				</div>
			</div>
		</nav>

		
			
      
    </header>
        
        <div class="container">

		<div class="one-third column">
                    <a href="http://www.contasuper.com.br"><img src="/img/ico/icncard.png">
                        <h4 style="font-size: 28px;"> Crédito Master Card</h4>
                        <p> Conheça as vantagens do crédito MasterCard!</p> </a>
		</div>


		<div class="one-third column">
			<a href="http://00244.transdatasmart.com.br:24401/TDMaxwebcommerce/default.aspx"><img src="/img/ico/icnvale.png">
			<h4 style="font-size: 28px;"> Vale Transporte </h4>
			<p> Adquira seus VT's através do nosso sistema online! (Somente para empresas)</p> </a>
		</div>



		<div class="one-third column">
			<a href=""><img src="/img/ico/icnsim.png">
			<h4 style="font-size: 28px;">Como funciona?</h4>
			<p> Alguma dúvida? Tire todas as suas dúvidas aqui!</p> </a>
		</div>
		
	</div>
        
        <div class="clear"></div>
        
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
                
                
	<script type="text/javascript">
		var toper = $('a#top');


		$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                toper.fadeIn( 200 );
            } else {
                toper.fadeOut( 200 );
            }
        });

         toper.click(function(){
        	$('html, body').animate({scrollTop:0}, 500);	        	
        	return false;
    	}); 
	</script>
        
                
        </div>
	</footer>
           
           
    </body>
</html>
