<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>
<div class="box">
<form action="/sim/comums/cadastrar/<?php echo $cidade;?>" id="ComumCadastrarForm" method="post" accept-charset="utf-8">
    <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
    <h1 class="boxh1"> Cadastro de Usuário Comum /  <?php echo $cidadeSPC;?> </h1>
        <?php 
           $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
            }
        ?>
        <fieldset>    
            <legend>Dados Pessoais</legend>
            <table border='0'>
                <tr>
                    <td colspan="2">
                        <label for="comumNome">* Nome completo: </label><br>
                        <input name="data[Comum][nome]" id="comumNome" maxlength="200" type="text" size="80" required  class="campos campogrande">
                    </td> 
                </tr>    
                <tr>    
                    <td colspan="2">
                        <label> Nome da Mãe: </label><br>
                        <input name="data[Comum][nomeMae]" id="comumNomeMae" maxlength="100" type="text" size="80" class="campos campogrande">
                    </td>
                </tr>

                <tr>
                    <td >
                        <label for="">*RG: </label><br>
                        <input name="data[Comum][rg]" id="comumRg" maxlength="20" type="text" required class="campos campopequeno rg">
                    </td>            
                    <td >
                        <label for="">* Orgão Emissor: </label><br>
                        <input name="data[Comum][emissor]" id="comumEmissor" maxlength="10" type="text" required  class="campos campopequeno">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">* CPF:</label><br>
                        <input name="data[Comum][cpf]" maxlength="20" type="text" id="comumCpf" required class="campos campopequeno cpf">
                    </td>
                    <td>
                        <label>* Sexo: </label><br>
                        <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="F"> F
                        <input name="data[Comum][sexo]" id="comumSexo" maxlength="1" type="radio" value="M"> M
                    </td>
                </tr>
            </table>
        </fieldset>
        
        
        <fieldset>    
            <legend>Endereço</legend>
            <table>
                <tr>
                    <td colspan="2">
                        <label for="">* Endereço: </label><br>
                        <input name="data[Comum][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="comumEndereco" maxlength="100" type="text" size="80" required class="campos campogrande">
                    </td>
                </tr>

                <tr>
                    <td >
                        <label for="">* Bairro: </label><br>
                        <input name="data[Comum][bairro]" id="comumBairo" maxlength="50" type="text" size="30" required class="campos campopequeno">        
                    </td>
                    <td>
                        <label for="">* CEP: </label><br>
                        <input name="data[Comum][cep]" id="comumCep" maxlength="20" type="text" required class="campos  campopequeno cep">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label  for="">* Cidade: </label><br>
                        <select name="data[Comum][cidade]" id="comumCidade" maxlength="20" class="campos campopequeno" >
                            <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
                        </select>
                    </td>
                    <td>
                        <label for="">* Estado: </label><br>
                        <select name="data[Comum][estado]" id="comumEstado" maxlength="1"  class="campos campopequeno">
                            <option value="PA"> PA </option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        
        <fieldset>    
            <legend>Contatos</legend>
            <table>
                <tr >
                    <td colspan="2">
                        <label for="ComumEmail">* Email: </label><br>
                        <input name="data[Comum][email]" id="ComumEmail" maxlength="100" type="email" size="80" required class="campos campogrande">
                    </td>
                </tr>
                <tr>
                    <td  colspan="2">
                        <label for=""> Site: </label><br>
                        <input name="data[Comum][site]" id="comumSite" maxlength="100" type="text" size="80" class="campos campogrande">
                    </td>
                </tr>

                <tr >
                    <td>
                        <label for="">* Telefone: </label><br>
                        <input name="data[Comum][telefone]" id="comumTelefone" maxlength="15" type="text" required class="campos campopequeno telefone">        
                    </td>            
                    <td >
                        <label for=""> Celular: </label><br>
                        <input name="data[Comum][celular]" id="comumCelular" maxlength="15" type="text" class="campos campopequeno celular">        
                    </td>
                </tr>
                <tr class="groupfield">
                    <td>
                        <label for=""> Fax: </label><br>
                        <input name="data[Comum][fax]" id="comumFax" maxlength="15" type="text" class="campos campopequeno fax">        
                    </td>
                    <td></td>
                </tr>
            </table>    
        </fieldset>
        
        
       
    <fieldset>
        <h5>* Campos obrigatórios</h5>
        <input type="button" value="Voltar" id="btnvoltar" onclick="history.back();"> 
        <input type="submit" value="Salvar cadastro" id="btncadastrar">        
    </fieldset>

    
</form>
  </div>
