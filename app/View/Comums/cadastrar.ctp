<div class="box">
<form action="/sim/comums/cadastrar" id="ComumCadastrarForm" method="post" accept-charset="utf-8">
    <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
    <h1 class="boxh1"> Cadastro de Usuário Comum /  <?php echo $cidade;?> </h1>
         <?php 
            echo $this->Session->flash();
          ?>
        <fieldset>    
            <legend>Dados Pessoais</legend>
            <section class="groupfield">
                <div>
                    <label>* Nome completo: </label>
                    <input name="data[Comum][nome]" id="comumNome" maxlength="200" type="text" size="80" required  class="campos campogrande">
                </div> 
                <div>
                    <label>* Nome da Mãe: </label>
                    <input name="data[Comum][nomeMae]" id="comumNomeMae" maxlength="100" type="text" size="80" class="campos campogrande">
                </div>
            </section>
            
            <section class="groupfield">
                <div class="esquerda">
                    <label>*RG: </label>
                    <input name="data[Comum][rg]" id="comumRg" maxlength="20" type="text" required class="campos">
                </div>            
                <div class="direita">
                    <label>* Orgão Emissor: </label>
                    <input name="data[Comum][emissor]" id="comumEmissor" maxlength="10" type="text" required  class="campos">
                </div>
            </section>
            
            <section class="groupfield">
                <div class="esquerda">
                    <label>* CPF:</label>
                    <input name="data[Comum][cpf]" maxlength="20" type="text" id="comumCpf" required class="campos">
                </div>
                <div class="direita">
                    <label>* Sexo: </label>
                    <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="F"> F
                    <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="M"> M
                </div>
            </section>
            
        </fieldset>
        
        
        <fieldset>    
            <legend>Endereço</legend>
            
            <section class="groupfield">
                 <div class="esquerda">
                    <label>* Endereço: </label>
                    <input name="data[Comum][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="comumEndereco" maxlength="100" type="text" size="80" required class="campos campogrande">
                </div>
            </section>
            
            <section class="groupfield">
                <div class="esquerda">
                    <label>* Bairro: </label>
                    <input name="data[Comum][bairro]" id="comumBairo" maxlength="50" type="text" size="30" required class="campos">        
                </div>
                <div class="direita">
                    <label>* CEP: </label>
                    <input name="data[Comum][cep]" id="comumCep" maxlength="20" type="text" required class="campos">
                </div>
            </section>
                
            
            <section class="groupfield">
                <div  class="esquerda">
                    <label>* Cidade: </label>
                    <select name="data[Comum][cidade]" id="comumCidade" maxlength="20" class="campos">
                        <option value="Castanhal"> <?php echo $cidade;?> </option>
                    </select>
                </div>
                <div class="direita">
                    <label>* Estado: </label>
                    <select name="data[Comum][estado]" id="comumEstado" maxlength="1"  class="campos">
                        <option value="PA"> PA </option>
                    </select>
                </div>
            </section>
        </fieldset>
        
        <fieldset>    
            <legend>Contatos</legend>
            
            <div class="input text">
                <label for="ComumEmail">* Email: </label>
                
                <input name="data[Comum][email]" id="ComumEmail" maxlength="100" type="text" size="80" required class="campos campogrande">
            </div>
            <div>
                <label>* Site: </label>
                <input name="data[Comum][site]" id="comumSite" maxlength="100" type="text" size="80" class="campos campogrande">
            </div>
            
            <section class="groupfield">
                <div  class="esquerda">
                    <label>* Telefone: </label>
                    <input name="data[Comum][telefone]" id="comumTelefone" maxlength="15" type="text" required class="campos">        
                </div>            
                <div class="direita">
                    <label>* Celular: </label>
                    <input name="data[Comum][celular]" id="comumCelular" maxlength="15" type="text" class="campos">        
                </div>
            </section>
            <section class="groupfield">
                 <div  class="esquerda">
                    <label>* Fax: </label>
                     <input name="data[Comum][fax]" id="comumFax" maxlength="15" type="text" class="campos">        
                </div>
            </section>
                
        </fieldset>
        
        
       
    <fieldset>
        <input type="button" value="Voltar" id="btnvoltar" onclick="history.back();"> 
        <input type="submit" value="Salvar cadastro" id="btncadastrar">        
    </fieldset>

    
</form>
  </div>