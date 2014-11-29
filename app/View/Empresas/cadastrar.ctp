<!DOCTYPE html>

<!-- CADASTRO DE EMPRESAS -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
    <form action="/sim/empresas/cadastrar" id="EmpresasCadastrarForm" method="post" accept-charset="utf-8">
    
        <h1 class="boxh1"> Cadastro de Empresa / Cidade </h1>
        
        <div class="box">
        <label>
            <span> Nome fantasia: * </span>
        <input name="data[Empresa][nomeFantasia]" id="empresaNomeFantasia" maxlength="200" type="text" size="80" required>
        </label> 
        
        <label>
        <span> Razão Social: * </span> 
        <input name="data[Empresa][razaoSocial]" id="empresaRazaoSocial" maxlength="200" type="text" size="80" required>
        </label>
                
        <label>
        <span> CNPJ: * </span> 
        <input name="data[Empresa][cnpj]" id="empresaCnpj" maxlength="20" type="text" required >
        </label> 

        <label>
        <span> Inscrição Estadual: * </span> 
        <input name="data[Empresa][inscEstadual]" maxlength="30" type="text" id="empresaInscEstadual" required>
        </label>
        
            <!-- radio 
        <label>
        <span> Sexo:  </span> 
        <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="F"> F
        <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="M"> M
        </label>
                
            -->
            
        <label>
        <span> Max. de cartões:*</span> 
        <input name="data[Empresa][maxCartoes]" id="empresaMaxCartoes" maxlength="10" type="text" required>
        </label>
        
        <label>
        <span> Qtd. de VT'S:*</span> 
        <input name="data[Empresa][qtdVts]" id="empresaQtdVts" maxlength="10" type="text" required>
        </label>
            
        <label>
        <span> Qtd. de Func.:*</span> 
        <input name="data[Empresa][qtdFuncionarios]" id="empresaQtdFuncionarios" maxlength="10" type="text" required>
        </label>
              
        <!-- ESTADO SÓ O UF, CAMPO SELECT -->
        <label>
        <span> Estado: </span> 
        <select name="data[Empresa][estado]" id="empresaEstado" maxlength="1" >
        <option value="PA"> PA </option>
        </select>
        </label>
        
        <!-- CAMPO SELECT SÓ COM A OPÇÃO "CASTANHAL" -->
        <label>
        <span> Cidade: </span> 
        <select name="data[Empresa][cidade]" id="empresaCidade" maxlength="20">
        <option value="Castanhal"> Castanhal </option>
        </select>
        </label>
       
        <label>
        <span> Endereço: *</span> 
        <input name="data[Empresa][endereco]" id="empresaEndereco" maxlength="100" type="text" size="80" required>
        <p class="legenda"> *Ex: Rua Maria Caetana da Mota, 43. </p>
        </label>

        <label>
        <span> Bairro: *</span>
        <input name="data[Empresa][bairro]" id="empresaBairro" maxlength="50" type="text" size="50" required>
        </label>

        <label>
        <span> CEP: *</span>
        <input name="data[Empresa][cep]" id="empresaCep" maxlength="20" type="text" required>
        </label>

        <label>
        <span> Telefone: *</span> 
        <input name="data[Empresa][telefone]" id="empresaTelefone" maxlength="15" type="text" required>
        </label>

        <label>
        <span> Celular: </span> 
        <input name="data[Empresa][celular]" id="empresaCelular" maxlength="15" type="text">
        </label>
        
        <label>
        <span> Fax: </span> 
        <input name="data[Empresa][fax]" id="empresaFax" maxlength="15" type="text">
        </label>

        <label>
        <span> Site: </span>
        <input name="data[Empresa][site]" id="empresaSite" maxlength="100" type="text" size="80">
        </label>
            
        
        <label>
        <span> Email:* </span>
        <input name="data[Empresa][email]" id="empresaEmail" maxlength="100" type="text" size="80" required>
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
