<div class="orange">
   
<div class="container">
    <div class="sixteen columns form">

        <form action="/Estudantes/recuperar" id="" class="recuperar" method="post" accept-charset="utf-8">
            <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
               
            <fieldset class="row1"> 
                <input type="hidden" name="data[Usuario][cidade]" value="<?php echo $cidade;?>">
                <br>
                    <p> 
                        <label for="usuarioNome">Digite o nome completo cadastrado: </label>
                        <input name="data[Usuario][nome]" id="usuarioNome" maxlength="200" type="text" size="100" required  class="long">
                    </p>
                    <p> 
                        <label for="usuarioDataNasc">Digite sua data de nascimento: </label>
                       <br> <input name="data[Usuario][dataNasc]" id="usuarioDataNasc" maxlength="10" type="text" size="40" required  class="short data">
                    </p>
            <!--        <p> 
                       <label for="usuarioCep">Digite o cep: </label>
                       <br> <input name="data[Usuario][cep]" id="usuarioCep" type="text" size="40" required  class="short cep">
                    </p>-->
            </fieldset>
            <fieldset class="buttons">
                <button class="button" type="button" value="Voltar" id="btnvoltar" onclick="history.back();"> Voltar </button>  
                <button class="button" type="submit" value="Salvar cadastro" id="btncadastrar"> Procurar </button></p>	       
            </fieldset>
        </form>
    </div>
</div>
    <script>
        $("html, body").animate({scrollTop:$("div.orange").offset().top }, 'slow'); //animação obrigatoria em todos os conteudos
    </script>
</div>


