<?php 
    $msg = $this->Session->flash();
     if(isset($msg) and $msg != ""){
         
     }
    ?> 

<div class='orange'>
    <div class='container'>
        <h2 align="center"> Ops! Página em construção! </h2>
        <p> Mande-nos um email com a sua dúvida: duvidas@sistemasim.com.br<br> ou ligue (91)3721-6210 (Atendimento SIM Castanhal) </p>
    <a href="/" class="dalej"> Voltar </a>
    </div>

</div>

 <script>
        //animação obrigatoria em todos os conteudos            
        $("html, body").animate({scrollTop:$("div.orange").offset().top }, 'slow'); 
</script>
    
<div class='clear'></div>
