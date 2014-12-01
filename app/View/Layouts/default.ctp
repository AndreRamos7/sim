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

                    echo $this->Html->css('style');
                    echo $this->Html->script('jquery-1.10.2.min');
                    

                    echo $this->fetch('meta');
                    echo $this->fetch('css');
                    echo $this->fetch('script');
                   // echo filter_input(INPUT_SERVER, "DOCUMENT_ROOT");
            ?>
        
        <script type="text/javascript">
            
        </script>

        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <link href="/css/style.css" type="text/css" rel="stylesheet">
        
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
                    
                    
                 
                    // ## Abrindo ModalEstudantes
                    $('#botaoAbrirModal1').click( function ( event ){
                        event.preventDefault();
                        $('#md-blockEstudantes ').addClass('md-showEstudantes');
                    });

                    // ## Fechando Modal Estudantes
                    $('#md-closeEstudantes, #md-overlayEstudantes').click( function ( event ){
                        event.preventDefault();
                        $('#md-blockEstudantes').removeClass('md-showEstudantes');
                    });

                    // ## Abrindo ModalComuns
                    $('#botaoAbrirModal2').click( function ( event ){
                        event.preventDefault();
                        $('#md-blockComuns ').addClass('md-showComuns');
                    });

                    // ## Fechando Modal Comuns
                    $('#md-closeComuns, #md-overlayComuns').click( function ( event ){
                        event.preventDefault();
                        $('#md-blockComuns').removeClass('md-showComuns');
                    });

                    // ## Abrindo ModalEmpresas
                    $('#botaoAbrirModal3').click(function ( event ){
                        event.preventDefault();
                        $('#md-blockEmpresas ').addClass('md-showEmpresas');
                    });

                    // ## Fechando ModalEmpresas
                    $('#md-closeEmpresas, #md-overlayEmpresas').click(function ( event ){
                        event.preventDefault();
                        $('#md-blockEmpresas').removeClass('md-showEmpresas');
                    });

                    // ## Abrindo ModalGratuitos
                    $('#botaoAbrirModal4').click(function ( event ){
                        event.preventDefault();
                        $('#md-blockGratuitos ').addClass('md-showGratuitos');
                    });

                    // ## Fechando ModalEmpresas
                    $('#md-closeGratuitos, #md-overlayGratuitos').click( function ( event ){
                        event.preventDefault();
                        $('#md-blockGratuitos').removeClass('md-showGratuitos');
                    });
                 });
           
            

        </script>
    </head>
    <body>
       
       <header> </header>
        <nav> 
            <ul class="menuv">
                    <li><a href="/"> <p class="textocentro"> <img class="img" src="/app/webroot/img/ico/icnhouse.png"> </p> Página inicial</a></li>
                    <li><a href="http://www.contasuper.com.br/"> <p class="textocentro"> <img class="img" src="/app/webroot/img/ico/icncard.png"> </p> Crédito Master Card </a></li>
                    <li><a href="http://00244.transdatasmart.com.br:24401/TDMaxwebcommerce/default.aspx"> <p class="textocentro"> <img class="img" src="/app/webroot/img/ico/icnvale.png"> </p> Vale Transporte</a></li>
                    <li><a href="javascript:;"> <p class="textocentro"> <img class="img" src="/app/webroot/img/ico/contatoico.png"> </p> Fale conosco!</a></li>
                    <li><a href="javascript:;"> <p class="textocentro"> <img class="img" src="/app/webroot/img/ico/icnsim.png"> </p> Como funciona?</a></li>               
            </ul>
        </nav>
        <div id="content">
            <?php echo $this->fetch('content'); ?>        
        </div>
        <footer>
              <div id="logosim" > 
                <p class="marginleft"><img src="/app/webroot/img/ico/icoSim.png"> </p>
                <p class="marginleft legenda"> Desenvolvido por | <a href="mailto:biasilvabsi11@gmail.com" text-decoration="none"> Bianca Silva </a> | <a href="mailto:andre-rammos@hotmail.com" text-decoration="none"> André Ramos </a></p> 
              </div>

              <div id="contatos" >
                <p class="textocentro"> Entre em contato conosco! </p>
                <p class="textocentro"> Email: contato@sistemasim.com.br </p>
                <p class="textocentro"> Telefone (Castanhal): (91) 3721-6210 </p>
                <p class="textocentro"> Endereço (Castanhal): </p>    
              </div>

              <div id="redesocial">
                <p> Redes Sociais </p> 
                <a href="https://www.facebook.com/pages/Agora-Sim/1420155461570401?ref=hl"><img class="imgicon" src="/app/webroot/img/ico/icnface.png" alt='Facebook'></a>
                <a href="https://twitter.com/agorasim_" ><img class="imgicon" src="/app/webroot/img/ico/icntwit.png" alt='twitter'></a>
                <a href="https://www.youtube.com/channel/UC8JLlfsvyuL2NJfG83h-l5g"><img class="imgicon" src="/app/webroot/img/ico/icnyoutube.png" alt='youtube'></a>
              </div>

       </footer>
    </body>
</html>
