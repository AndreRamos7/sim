<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>
<div class="box">
    <form action="/sim/Gratuitos/cadastrar/<?php echo $cidade;?>" id="GratuitoCadastrarForm" method="post" accept-charset="utf-8">
        <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
        <h1 class="boxh1"> Cadastro de Gratuidades /  <?php echo $cidadeSPC;?> </h1>
            <?php 
                $msg = $this->Session->flash();
                 if(isset($msg) and $msg != ""){
                     echo "<script>alert('$msg')</script>";
                 }
             ?>
            <fieldset>    
                <legend>Dados Pessoais</legend>
                <table>
                    <tr>
                        <td colspan="2">
                            <label>* Nome completo: </label><br>
                            <input name="data[Gratuito][nome]" id="GratuitoNome" maxlength="200" type="text" size="80" required  class="campos campogrande">
                        </td> 
                    </tr>

                    <tr >
                        <td >
                            <label>*RG: </label><br/>
                            <input name="data[Gratuito][rg]" id="GratuitoRg" maxlength="20" type="text" required class="campos campopequeno rg">
                        </td>            
                        <td >
                            <label>* Orgão Emissor: </label><br>
                            <input name="data[Gratuito][emissor]" id="GratuitoEmissor" maxlength="10" type="text" required  class="campos campopequeno">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>* CPF:</label><br>
                            <input name="data[Gratuito][cpf]" maxlength="20" type="text" id="GratuitoCpf" required class="campos campopequeno cpf">
                        </td>
                        <td>
                            <label>* Data de Nascimento: </label><br>   
                            <input name="data[Gratuito][dataNasc]" id="datepicker" maxlength="10" type="text" required  class="campos campopequeno data" readonly="">
                        </td>
                    </tr>
                    <tr>                        
                        <td >
                            <label>* Nº Aposentadoria: </label><br>   
                            <input name="data[Gratuito][nroAposentadoria]" id="EstudanteNroAposentadoria" maxlength="10" type="text" required  class="campos campopequeno">
                        </td>
                        <td >
                            <label>* Sexo: </label><br>                    
                            <label>M <input name="data[Gratuito][sexo]" id="estudanteSexo" maxlength="1" type="radio" value="M"> </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<label>F <input name="data[Gratuito][sexo]" id="estudanteSexo" maxlength="1" type="radio" value="F">  </label>
                        </td>
                     </tr>            
                </table>
            </fieldset>


            <fieldset>    
                <legend>Endereço</legend>
                <table>
                    <tr >
                        <td colspan="2">
                            <label>* Endereço: </label>
                            <input name="data[Gratuito][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="GratuitoEndereco" maxlength="100" type="text" size="80" required class="campos campogrande">
                        </td>
                    </tr>

                    <tr >
                        <td >
                            <label>* Bairro: </label><br>
                            <input name="data[Gratuito][bairro]" id="GratuitoBairo" maxlength="50" type="text" size="30" required class="campos campopequeno">        
                        </td>
                        <td >
                            <label>* CEP: </label><br>
                            <input name="data[Gratuito][cep]" id="GratuitoCep" maxlength="20" type="text" required class="campos  campopequeno cep">
                        </td>
                    </tr>


                    <tr class="groupfield">
                        <td >
                            <label>* Cidade: </label><br>
                            <select name="data[Gratuito][cidade]" id="GratuitoCidade" maxlength="20" class="campos campopequeno" >
                                <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
                            </select>
                        </td>
                        <td >
                            <label>* Estado: </label><br>
                            <select name="data[Gratuito][estado]" id="GratuitoEstado" maxlength="1"  class="campos campopequeno" >
                                <option value="PA"> PA </option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>    
                <legend>Contatos</legend>
                <table >
                    <tr>
                        <td>
                            <label>* Telefone: </label><br>
                            <input name="data[Gratuito][telefone]" id="GratuitoTelefone" maxlength="15" type="text" required class="campos campopequeno telefone">        
                        </td>            
                        <td>
                            <label>Celular: </label><br>
                            <input name="data[Gratuito][celular]" id="GratuitoCelular" maxlength="15" type="text" class="campos campopequeno celular">        
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