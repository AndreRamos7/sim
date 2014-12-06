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
    </div>

</section>
<div class='clear'></div>
