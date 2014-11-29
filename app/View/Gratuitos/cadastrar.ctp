<!DOCTYPE html>

<!-- CADASTRO DE USUÁRIOS DO TIPO GRATUITO -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
    <form action="/sim/gratuitos/cadastrar" id="GratuitoCadastrarForm" method="post" accept-charset="utf-8">
    
        <h1 class="boxh1"> Cadastro de Gratuitos / Cidade </h1>
        
        <div class="box">
        <label>
            <span> Nome completo: * </span>
        <input name="data[Gratuito][nome]" id="gratuitoNome" maxlength="200" type="text" size="80" required>
        </label> 
        
        <label>
        <span> RG: * </span> 
        <input name="data[Gratuito][rg]" id="gratuitoRg" maxlength="20" type="text" required>
        </label>
                
        <label>
        <span> Órgão Emissor: * </span> 
        <input name="data[Gratuito][emissor]" id="gratuitoEmissor" maxlength="10" type="text" required >
        </label> 

        <label>
        <span> CPF: * </span> 
        <input name="data[Gratuito][cpf]" maxlength="20" type="text" id="gratuitoCpf" required>
        </label>
        
        <label>
        <span> Sexo:  </span> 
        <input name="data[Gratuito][sexo]" id="gratuitoSexo" maxlength="1" type="radio" value="F"> F
        <input name="data[Gratuito][sexo]" id="gratuitoSexo" maxlength="1" type="radio" value="M"> M
        </label>
            
        <label>
        <span> Data de Nascimento: *</span> 
        <input name="data[Gratuito][dataNasc]" id="gratuitoDataNasc" maxlength="20" type="text" required>
        </label>
                
        <label>
        <span> Número de aposent. : *</span> 
        <input name="data[Gratuito][nroAposentadoria]" id="gratuitoNroAposentadoria" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Data de Validade:*</span> 
        <input name="data[Gratuito][dataValidade]" id="gratuitoDataValidade" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Limite mensal:*</span> 
        <input name="data[Gratuito][limiteMensal]" id="gratuitoLimiteMensal" maxlength="20" type="text" required>
        </label>
              
        <!-- ESTADO SÓ O UF, CAMPO SELECT -->
        <label>
        <span> Estado: </span> 
        <select name="data[Gratuito][estado]" id="gratuitoEstado" maxlength="1" >
        <option value="PA"> PA </option>
        </select>
        </label>
        
        <!-- CAMPO SELECT SÓ COM A OPÇÃO "CASTANHAL" -->
        <label>
        <span> Cidade: </span> 
        <select name="data[Gratuito][cidade]" id="gratuitoCidade" maxlength="20">
        <option value="Castanhal"> Castanhal </option>
        </select>
        </label>
       
        <label>
        <span> Endereço: *</span> 
        <input name="data[Gratuito][endereco]" id="gratuitoEndereco" maxlength="100" type="text" size="80" required>
        <p class="legenda"> *Ex: Rua Maria Caetana da Mota, 43. </p>
        </label>

        <label>
        <span> Bairro: *</span>
        <input name="data[Gratuito][bairro]" id="gratuitoBairro" maxlength="50" type="text" size="50" required>
        </label>

        <label>
        <span> CEP: *</span>
        <input name="data[Gratuito][cep]" id="gratuitoCep" maxlength="20" type="text" required>
        </label>

        <label>
        <span> Telefone: *</span> 
        <input name="data[Gratuito][telefone]" id="gratuitoTelefone" maxlength="15" type="text" required>
        </label>

        <label>
        <span> Celular: </span> 
        <input name="data[Gratuito][celular]" id="gratuitoCelular" maxlength="15" type="text">
        </label>
        
        <label>
        <p class="legenda" align="right"> * Campos obrigatórios! </p>
        <input type="submit" value="Salvar cadastro" class="button">
        <input type="button" value="Voltar" class="button" onclick=""> 
        </label>

        </div>
        </form>
  </body>
</html>
