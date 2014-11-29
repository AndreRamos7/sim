<!DOCTYPE html>

<!--
POR CONVENÇÃO ESSA PÁGINA INDEX TEM QUE FICAR DENTRO DA PASTA CASTANHAL
ESSA É A PÁGINA PRINCIPAL DE QUEM ENTRA EM "CASTANHAL"
-->

<!-- MENU ESTUDANTES, COMUNS, EMPRESA, GRATUIDADE, COM DIV OCULTA DE DOCUMENTOS NECESSÁRIOS -->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div id="menucima">
        <?php 
        $msg = $this->Session->flash();
        if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
        
        }
          ?>
        <p> <a href="http://localhost/sim/comums/cadastrar/Castanhal"> Usuário Comum </a> </p>
        <p> <a href="http://localhost/sim/empresa/cadastrar/Castanhal"> Empresa </a> </p>
        <p> <a href="http://localhost/sim/estudante/cadastrar/Castanhal"> Estudante </a> </p>
        <p> <a href="http://localhost/sim/gratuidade/cadastrar/Castanhal"> Gratuidade </a> </p>
        
        </div>
        
    </body>
</html>
