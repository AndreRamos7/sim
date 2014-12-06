   <?php 
    $msg = $this->Session->flash();
     if(isset($msg) and $msg != ""){
         //echo ("erro em mensagem.ctp");
     }
    ?> 
<section class='gray'>
    <div class='container'>
        <h2 align="center"> <?php echo $dados['result'];?> </h2>
        <p align="center"> N° Protocolo => <?php echo $dados['protocolo'];?> </p>
        <p align="center"> <?php echo $msg;?> </p>
        <p align="center"> <?php echo $dados['chamado'];?> </p>
        <p>            
            <button class="button" value="Voltar" id="btnPrint" onclick="imprimirComprovante();"> Imprimir </button>              
        </p>
    </div>
</section>
<script>
    //animação obrigatoria em todos os conteudos
    $("html, body").animate({scrollTop:$("section.gray").offset().top }, 'slow'); 
</script>
<div class='clear'></div>
