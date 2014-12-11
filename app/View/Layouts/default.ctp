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
        <script src="http://maps.googleapis.com/maps/api/js"></script>

        <script>
            var myCenter=new google.maps.LatLng(-1.295338, -47.929356);
            var marker;

            function initialize(){
                var mapProp = {
                  center:myCenter,
                  zoom:17,
                  maxZoom: 20,
                  minZoom:10,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };

                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker=new google.maps.Marker({
                  position:myCenter,
                  animation:google.maps.Animation.BOUNCE,
                  title:"SIM"
                });
                
                marker.setMap(map);
                
                google.maps.event.addListener(map ,'mouseout',function() {
                    map.setZoom(17);
                    map.setCenter(marker.getPosition());
                });
                google.maps.event.addListener(map ,'mouseover',function() {
                    map.setZoom(17);
                    map.setCenter(marker.getPosition());
                });
           
            }
            
            google.maps.event.addDomListener(window, 'load', initialize);
            
        </script>
        <script language="JavaScript" type="text/javascript">
           $(document).ready(function() {
                
                $("fieldset p input.cpf").mask("99999999999");
                $("fieldset p input.rg").mask("999999-9");
                $("fieldset p input.data").mask("99/99/9999");
                $("fieldset p input.cnpj").mask("99.999.999/9999-99");
                $("fieldset p input.cep").mask("99999-999");
                $("fieldset p input.celular").mask("(99)9999 9999");
                $("fieldset p input.telefone").mask("(99)9999 9999");
                $("fieldset p input.fax").mask("(99)9999 9999");
                $("fieldset p input.mesano").mask("99/9999");
                //$("fieldset p input.endereco").mask("aaaaaaa, Nº 999999");
                
                
                $( "select#selectNivel" ).change(function () {
                    var str = "";
                    $( "select#selectNivel option:selected" ).each(function() {
                        str = $( this ).text();
                    });
                    if(str === "Fundamental"){                        
                        $('p.superior input.desreq').attr("required",false);
                        $('p input#EstudanteCpf.desreq').attr("required",false);
                        $('p input#EstudanteRg.desreq').attr("required",false);
                        
                        $('p.fundamental').show();
                        $('p.superior').hide();
                        
                    }else if(str === "Médio"){
                        $('p.superior input.desreq').attr("required",false);
                        $('p input#EstudanteCpf.desreq').attr("required",false);
                        $('p input#EstudanteRg.desreq').attr("required",false);
						
                        $('p.fundamental').show();
                        $('p.superior').hide();
                    }else if(str === "Superior"){
                        $('p.superior input.desreq').attr("required",true);
                        $('p input#EstudanteCpf.desreq').attr("required",true);
                        $('p input#EstudanteRg.desreq').attr("required",true);
                        $('p.fundamental input.desreq,p.medio input.desreq').attr("required",false);
                        
                        $('p.fundamental').hide();
                        $('p.superior').show();
                    }
                   // alert( str );
                }).change();
                
                $("form#GratuitoCadastrarForm").submit(function(event){
                    var inputCPF = $("form#EmpresaCadastrarForm fieldset p input.cpf");
                    var txtCPF = inputCPF.val();
                    if(!testaCPF(txtCPF) && inputCPF.attr("required")){                    
                        event.preventDefault();
                        alert("CPF inválido!!");
                    }
                });
                
                $("form#ComumCadastrarForm").submit(function(event){
                    var inputCPF = $("form#EmpresaCadastrarForm fieldset p input.cpf");
                    var txtCPF = inputCPF.val();
                    if(!testaCPF(txtCPF) && inputCPF.attr("required")){                    
                        event.preventDefault();
                        alert("CPF inválido!!");
                    }
                });
                $("form#EstudanteCadastrarForm").submit(function(event){
                    var inputCPF = $("form#EstudanteCadastrarForm fieldset p input.cpf");
                    var txtCPF = inputCPF.val();
                    if(!testaCPF(txtCPF) && inputCPF.attr("required")){                    
                        event.preventDefault();
                        alert("CPF inválido!!");
                    }
                });
                    
            });
            
            
        </script>
        <script type="text/javascript">
            function imprimirComprovante(){
               if (!window.print){
                  alert("Este navegador não suporta impressão!");
                  return;
               }
               window.print();
            }
            //Verifica se CPF é válido
            function testaCPF(strCPF) {
                var Soma;
                var Resto;
                Soma = 0;   
                //strCPF  = RetiraCaracteresInvalidos(strCPF,11);
                if (strCPF === "00000000000")
                    return false;
                for (i=1; i<=9; i++)
                    Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i); 
                Resto = (Soma * 10) % 11;
                if ((Resto === 10) || (Resto === 11)) 
                    Resto = 0;
                if (Resto !== parseInt(strCPF.substring(9, 10)) )
                    return false;
                    Soma = 0;
                for (i = 1; i <= 10; i++)
                   Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
                Resto = (Soma * 10) % 11;
                if ((Resto === 10) || (Resto === 11)) 
                    Resto = 0;
                if (Resto !== parseInt(strCPF.substring(10, 11) ) )
                    return false;
                return true;
            }
            
            function mostrarLocal(){
                $("html, body").animate({scrollTop:$("div#local.orange").offset().top }, 'slow'); 
            }
        </script>
    </head>
    <body>
        <!--
        <div onclick="$(this).hide();" style="position: fixed; width: 100%; height: 100%;background-color: rgba(182, 90, 24, 0.9); z-index: 50;"> 
           <div id="googleMap" style="width:500px;height:380px;margin: 100px auto;"></div> 
       </div> -->
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
               <p align="center"> Desenvolvido por :<a href="mailto:biasilvabsi11@gmail.com"> Bianca Silva </a> e <a href="mailto:andre-rammos@hotmail.com">André Ramos</a></p>
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
           
    </body>
</html>
