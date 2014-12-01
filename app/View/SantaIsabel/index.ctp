<!DOCTYPE html>

<!--
POR CONVENÇÃO ESSA PÁGINA INDEX TEM QUE FICAR DENTRO DA PASTA Santa Isabel
ESSA É A PÁGINA PRINCIPAL DE QUEM ENTRA EM "Santa Isabel"
-->

<!-- MENU ESTUDANTES, COMUNS, EMPRESA, GRATUIDADE, COM DIV OCULTA DE DOCUMENTOS NECESSÁRIOS -->
        
        <h3 align="center"> Bem vindo à Santa Isabel! </h3>
        <!-- MENU -->
        
        <?php 
            $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
        }
          ?>
        <ul class="ca-menu">
    <li>
        <a href="javascript:;" id="botaoAbrirModal2" title="AbrirComuns">
            <span class="ca-icon"><img src="img/ico/userico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main"> Comuns </h2>
                <h3 class="ca-sub">Tem SIM para todo mundo!</h3>
            </div>
        </a>
    </li>
    
     <li>
        <a href="javascript:;" id="botaoAbrirModal1" title="AbrirEstudantes">
            <span class="ca-icon"><img src="img/ico/estudanteico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Estudantes</h2>
                <h3 class="ca-sub">Tem SIM para estudantes!</h3>
            </div>
        </a>
    </li>
    
    <li>
        <a href="javascript:;" id="botaoAbrirModal3" title="AbrirEmpresas">
            <span class="ca-icon"><img src="img/ico/empresaico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Empresas</h2>
                <h3 class="ca-sub">Tem SIM para empresas!</h3>
            </div>
        </a>
    </li>
    
     <li>
        <a href="javascript:;" id="botaoAbrirModal4" title="AbrirGratuitos">
            <span class="ca-icon"><img src="img/ico/gratuitoico.png"></span>
            <div class="ca-content">
                <h2 class="ca-main">Gratuidade</h2>
                <h3 class="ca-sub">Tem SIM para a gratuidade!</h3>
            </div>
        </a>
    </li>
</ul>
            
<!-- JANELA MODAL DE USUÁRIOS ESTUDANTES -->

<div id="md-blockEstudantes">
        
    <h3 id="md-titleEstudantes">
        Documentos necessários para estudantes
    </h3>

    <div id="md-contentEstudantes">
        <p> Apresentar os originais e cópias de:</p>
        <p> - CPF; </p>
        <p> - RG; </p>
        <p> - Comprovante de Residência; </p>
        <p> - Declaração de matrícula; </p>
        <p> - Declaração de frequência; (Comprovação de que o aluno frequenta as aulas normalmente) </p>
        <p> - Uma foto 3x4; (Não é necessário cópia)</p>
    </div>
       <a href="/estudantes/cadastrar/SantaIsabel" id="md-cadastra"> Cadastre-se agora! </a> </p>   
    <a href="javascript:;" id="md-closeEstudantes" title="Fechar">Fechar</a>

</div>

<div id="md-overlayEstudantes"></div>

<!-- JANELA MODAL DE USUÁRIOS COMUNS -->

   <div id="md-blockComuns">
    <h3 id="md-titleComuns">
        Documentos necessários para usuários Comuns:
    </h3>

    <div id="md-contentComuns">
        <p> Apresentar os originais e cópias de: </p>
        <p> - CPF; </p>
        <p> - RG; </p>
        <p> - Comprovante de residência; </p>
    </div>
    <a href="/comums/cadastrar/SantaIsabel" id="md-cadastra"> Cadastre-se agora! </a> </p>   
    <a href="javascript:;" id="md-closeComuns" title="Fechar">Fechar</a>

</div>

<div id="md-overlayComuns"></div>
    
<!-- JANELA MODAL DE USUÁRIOS EMPRESAS -->

<div id="md-blockEmpresas">
    <h3 id="md-titleEmpresas">
        Documentos necessários para Empresas:
    </h3>

    <div id="md-contentEmpresas">
        <p>Apresentar os originais e cópias de:</p>
        
    </div>
       <a href="/empresas/cadastrar/SantaIsabel" id="md-cadastra"> Cadastre-se agora! </a> </p>   
    <a href="javascript:;" id="md-closeEmpresas" title="Fechar">Fechar</a>

</div>

<div id="md-overlayEmpresas"></div>


<!-- JANELA MODAL DE USUÁRIOS GRATUITOS --> 

<div id="md-blockGratuitos">
    <h3 id="md-titleGratuitos">
        Documentos necessários para Gratuidade:
    </h3>

    <div id="md-contentGratuitos">
        <p> Apresentar os originais e cópias de: </p>
        <p> - CPF; </p>
        <p> - RG; </p>
        <p> - Comprovante de residência; </p>
   </div>
   <a href="/gratuitos/cadastrar/SantaIsabel" id="md-cadastra"> Cadastre-se agora! </a> </p>   
    <a href="javascript:;" id="md-closeGratuitos" title="Fechar">Fechar</a>

</div>

<div id="md-overlayGratuitos"></div>
