 <?php 
 $msg = $this->Session->flash();
  if(isset($msg) and $msg != ""){
      //echo ("erro em mensagem.ctp");
  }
  if(isset($dados)){ ?> 
<section class='gray' id="printable">
    <div class='container'>
        <h2 align="center"> <?php echo $dados['result'];?> </h2>
        <p> Nome do estudante: <?php echo $dados['nomeUsuario'];?> </p>
        <p align="center"> N° Protocolo => <b><?php echo $dados['protocolo'];?></b> </p>
        <p align="center"> Data de cadastro: <b><?php echo $dados['dateTime'];?></b> </p>
        <p align="center"> <?php echo $msg;?> </p>
        <p align="center"> <?php echo $dados['chamado'];?> </p>
		<p align="center"> <?php echo $dados['docs'];?> </p> 
        <p>            
            <button class="button" id="btnPrint" onclick="imprimirComprovante();"> Imprimir </button>                         
        </p>
    </div>
</section>
<script>
    //animaÃ§Ã£o obrigatoria em todos os conteudos
    $("html, body").animate({scrollTop:$("section.gray").offset().top }, 'slow'); 
</script>
<div class='clear'></div>
    <?php }  else {
        echo "<script> alert('Essa URL nÃ£o pode ser acessada diretamente!!');</script>";
    }