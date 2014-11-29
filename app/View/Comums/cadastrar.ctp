<div class="box">
<form action="/sim/comums/cadastrar" id="ComumCadastrarForm" method="post" accept-charset="utf-8">
    
    <h1 class="boxh1"> Cadastro de Usuário Comum/ Cidade </h1>
        
        <fieldset>    
            <legend>Dados Pessoais</legend>
            <div>
                <label>Nome completo</label>
                <input name="data[Comum][nome]" id="comumNome" maxlength="200" type="text" size="80" required>
            </div>
            
            <div>
                <label>RG *</label>
                <input name="data[Comum][rg]" id="comumRg" maxlength="20" type="text" required>
            </div>
            
            <div>
                <label>Orgão Emissor*</label>
                <input name="data[Comum][emissor]" id="comumEmissor" maxlength="10" type="text" required >
            </div>
            
            <div>
                <label>CPF *</label>
                <input name="data[Comum][cpf]" maxlength="20" type="text" id="comumCpf" required>
            </div>
            
            <div>
                <label>Sexo *</label>
                <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="F"> F
                <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="M"> M
            </div>
            
            <div>
                <label>Nome da Mãe</label>
                <input name="data[Comum][nomeMae]" id="comumNomeMae" maxlength="100" type="text" size="80">
            </div>
        </fieldset>
        
        
        <fieldset>    
            <legend>Endereço</legend>
            <!-- ESTADO SÓ O UF, CAMPO SELECT -->        
            <select name="data[Comum][estado]" id="comumEstado" maxlength="1" >
                <option value="PA"> PA </option>
            </select>
            <!-- CAMPO SELECT SÓ COM A OPÇÃO "CASTANHAL" -->
            <select name="data[Comum][cidade]" id="comumCidade" maxlength="20">
                <option value="Castanhal"> Castanhal </option>
            </select>
            <input name="data[Comum][endereco]" id="comumEndereco" maxlength="100" type="text" size="80" required>
            <input name="data[Comum][bairro]" id="comumBairo" maxlength="50" type="text" size="50" required>        
            <input name="data[Comum][cep]" id="comumCep" maxlength="20" type="text" required>
        </fieldset>
        
        <fieldset>    
            <legend>Contatos</legend>
            <input name="data[Comum][email]" id="comumEmail" maxlength="100" type="text" size="80" required>
            <input name="data[Comum][telefone]" id="comumTelefone" maxlength="15" type="text" required>        
            <input name="data[Comum][celular]" id="comumCelular" maxlength="15" type="text">        
            <input name="data[Comum][fax]" id="comumFax" maxlength="15" type="text">        
            <input name="data[Comum][site]" id="comumSite" maxlength="100" type="text" size="80">
        </fieldset>
        
        
       
       <div id="botoesform">
        <input type="submit" value="Salvar cadastro" class="button">
        <input type="button" value="Voltar" class="button" onclick="history.back();"> 
       </div>

    
</form>
  </div>