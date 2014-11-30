<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>
<div class="box">
<form action="/sim/Empresas/cadastrar/<?php echo $cidade;?>" id="EmpresaCadastrarForm" method="post" accept-charset="utf-8">
    <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
    <h1 class="boxh1"> Cadastro de Empresas /  <?php echo $cidadeSPC;?> </h1>
        <?php 
           $msg = $this->Session->flash();
            if(isset($msg) and $msg != ""){
                echo "<script>alert('$msg')</script>";
            }
        ?>
        <fieldset>    
            <legend>Dados da Empresa</legend>
            <table>
                <tr >
                    <td colspan="2">
                        <label>* Nome fantasia: </label>
                        <input name="data[Empresa][nomeFantasia]" id="EmpresaNomeFantasia" maxlength="200" type="text" size="80" required  class="campos campogrande">
                    </td> 
                </tr>
                <tr>
                    <td  colspan="2">
                        <label> Razão Social: </label>
                        <input name="data[Empresa][razaoSocial]" id="EmpresaRazaoSocial" maxlength="100" type="text" size="" class="campos campogrande">
                    </td>
                </tr>

                <tr >
                    <td >
                        <label>* Quant. VT's: </label><br>
                        <input name="data[Empresa][qtdVts]" id="EmpresaQtdVts" maxlength="20" type="text" required class="campos campopequeno">
                    </td>            
                    <td >
                        <label>* Quantidade de Funcionários: </label><br>
                        <input name="data[Empresa][qtdFuncionarios]" id="EmpresaQtdFuncionarios" maxlength="10" type="text" required  class="campos campopequeno">
                    </td>
                </tr>

                <tr >
                    <td >
                        <label>* CNPJ:</label><br>
                        <input name="data[Empresa][cnpj]" maxlength="20" type="text" id="EmpresaCnpj" required class="campos campopequeno cnpj">
                    </td>
                    <td >
                        <label for="EmpresaInscEstadual"> Inscrição Estadual: </label><br>
                        <input name="data[Empresa][inscEstadual]" id="EmpresaInscEstadual" maxlength="14" type="text" class="campos campopequeno"> 
                    </td>
                </tr>
            </table>
        </fieldset>
        
        
        <fieldset>    
            <legend>Endereço</legend>
            <table>
                <tr>
                     <td  colspan="2">
                        <label>* Endereço: </label><br>
                        <input name="data[Empresa][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="EmpresaEndereco" maxlength="100" type="text" size="80" required class="campos campogrande">
                    </td>
                </tr>

                <tr >
                    <td >
                        <label>* Bairro: </label><br>
                        <input name="data[Empresa][bairro]" id="EmpresaBairro" maxlength="50" type="text" size="30" required class="campos campopequeno">        
                    </td>
                    <td>
                        <label>* CEP: </label><br>
                        <input name="data[Empresa][cep]" id="EmpresaCep" maxlength="20" type="text" required class="campos campopequeno cep">
                    </td>
                </tr>


                <tr>
                    <td >
                        <label>* Cidade: </label><br>
                        <select name="data[Empresa][cidade]" id="EmpresaCidade" maxlength="20" class="campos  campopequeno" >                
                            <option value="<?php echo $cidadeSPC;?>"><?php echo $cidadeSPC;?></option>
                        </select>
                    </td>
                    <td >
                        <label>* Estado: </label><br>
                        <select name="data[Empresa][estado]" id="EmpresaEstado" maxlength="1"  class="campos  campopequeno" >
                            <option value="PA"> PA </option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        
        <fieldset>    
            <legend>Contatos</legend>
            <table>
                <tr>
                    <td colspan="2">
                        <label for="ComumEmail">* Email: </label>
                        <input name="data[Empresa][email]" id="EmpresaEmail" maxlength="100" type="email" size="80" required class="campos campogrande">
                    </td>
                </tr>    
                <tr>
                    <td colspan="2">
                        <label> Site: </label>
                        <input name="data[Empresa][site]" id="EmpresaSite" maxlength="100" type="text" size="80" class="campos campogrande">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>* Telefone: </label><br>
                        <input name="data[Empresa][telefone]" id="EmpresaTelefone" maxlength="15" type="text" required class="campos campopequeno telefone">        
                    </td>            
                    <td>
                        <label> Celular: </label><br>
                        <input name="data[Empresa][celular]" id="EmpresaCelular" maxlength="15" type="text" class="campos campopequeno celular">        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Fax: </label><br>
                        <input name="data[Empresa][fax]" id="EmpresaFax" maxlength="15" type="text" class="campos campopequeno fax">        
                    </td>
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