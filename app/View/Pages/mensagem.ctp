   <?php 
    $msg = $this->Session->flash();
     if(isset($msg) and $msg != ""){
         //echo ("erro em mensagem.ctp");
     }
    ?> 
<section class='gray'>
    <div class='container'>
        <h2 align="center"> Usuário cadastrado com sucesso! </h2>
        <p align="center"> N° Protocolo => <?php echo $protocolo;?> </p>
        <p align="center"> <?php echo $msg;?> </p>
        <p align="center"> " Favor comparecer ao escritório do SIM portando documentações solicitadase o n° de protocolo gerado!" </p>
    </div>

</section>
<div class='clear'></div>
