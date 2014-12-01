<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>
<div class="box">
    <form action="/Estudantes/cadastrar/<?php echo $cidade;?>" id="EstudanteCadastrarForm" method="post" accept-charset="utf-8">
        <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
        <h1 class="boxh1"> Cadastro de Estudantes /  <?php echo $cidadeSPC;?> </h1>
            <?php 
                $msg = $this->Session->flash();
                if(isset($msg) and $msg != ""){
                    echo "<script>alert('$msg')</script>";
                }
            ?>
            <fieldset>    
                <legend>Dados Pessoais</legend>
                <table >
                    <tr>
                        <td colspan="2">
                            <label>* Nome completo: </label><br>
                            <input name="data[Estudante][nome]" id="estudanteNome" maxlength="200" type="text" size="80" required  class="campos campogrande">
                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>* Nome da Mãe: </label><br>
                            <input name="data[Estudante][nomeMae]" id="estudanteNomeMae" maxlength="100" type="text" size="80" class="campos campogrande">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>* Nome do Pai: </label><br>
                            <input name="data[Estudante][nomePai]" id="estudanteNomeMae" maxlength="100" type="text" size="80" class="campos campogrande">
                        </td>
                    </tr>

                    <tr>
                        <td >
                            <label>*RG: </label><br>
                            <input name="data[Estudante][rg]" id="estudanteRg" maxlength="20" type="text" required class="campos campopequeno rg">
                        </td>            
                        <td >
                            <label>* Orgão Emissor: </label><br>
                            <input name="data[Estudante][emissor]" id="estudanteEmissor" maxlength="10" type="text" required  class="campos campopequeno">
                        </td>
                    </tr>

                    <tr>
                        <td >
                            <label>* CPF:</label><br>
                            <input name="data[Estudante][cpf]" maxlength="20" type="text" id="estudanteCpf" required class="campos campopequeno cpf">
                        </td>
                        <td >
                            <label>* Sexo: </label><br>                    
                            <label>M <input name="data[Estudante][sexo]" id="estudanteSexo" maxlength="1" type="radio" value="M"> </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<label>F <input name="data[Estudante][sexo]" id="estudanteSexo" maxlength="1" type="radio" value="F"> </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>* Data de Nascimento: </label><br>
                            <input name="data[Estudante][dataNascimento]" id="datepicker" maxlength="10" type="text" required  class="campos campopequeno data" readonly="">
                        </td>
                        <td></td>
                    </tr>
                </table>
            </fieldset>


            <fieldset>    
                <legend>Endereço</legend>
                <table>
                    <tr>
                        <td colspan="2">
                            <label>* Endereço: </label><br>
                            <input name="data[Estudante][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="estudanteEndereco" maxlength="100" type="text" size="80" required class="campos campogrande">
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <label>* Bairro: </label><br>
                            <input name="data[Estudante][bairro]" id="estudanteBairo" maxlength="50" type="text" size="30" required class="campos campopequeno">        
                        </td>
                        <td >
                            <label>* CEP: </label><br>
                            <input name="data[Estudante][cep]" id="estudanteCep" maxlength="20" type="text" required class="campos campopequeno cep">
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <label>* Cidade: </label><br>
                            <select name="data[Estudante][cidade]" id="estudanteCidade" maxlength="20" class="campos campopequeno" >
                                <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
                            </select>
                        </td>
                        <td >
                            <label>* Estado: </label><br>
                            <select name="data[Estudante][estado]" id="estudanteEstado" maxlength="1"  class="campos campopequeno" >
                                <option value="PA"> PA </option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>    
                    <legend>Dados Escolares</legend>
                    <table>
                        <tr>
                            <td colspan="2">
                                <label>* Nível de Escolaridade: </label><br>
                                <select id="selectNivel"  class="campos campopequeno">
                                    <option>Fundamental</option>
                                    <option>Médio</option>
                                    <option>Superior</option>                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>* Nome da Instituição: </label>
                                <input name="data[Estudante][nomeEscola]" id="estudanteNomeEscola" maxlength="200" type="text" size="80" required  class="campos campogrande">
                            </td>
                        </tr>
                        <tr id="cursoEMatricula">
                            <td >
                                <label>* Curso: </label><br>
                                <input name="data[Estudante][curso]" id="estudanteCurso" maxlength="50" type="text" size="30" required class="campos campopequeno desreq">        
                            </td>
                            <td >
                                <label>* Matricula: </label><br>
                                <input name="data[Estudante][matricula]" id="estudanteMatricula" maxlength="20" type="text" required class="campos campopequeno desreq">
                            </td>
                        </tr>
                        <tr id="iniFim">
                            <td >
                                <label>* Ano Início: </label><br>
                                <input name="data[Estudante][dataIni]" id="estudanteDataIni" maxlength="4" type="text" size="20" required class="campos campopequeno desreq">        
                            </td>
                            <td >
                                <label>* Ano Fim: </label><br>
                                <input name="data[Estudante][dataFim]" id="estudanteDataFim" maxlength="4" type="text" required class="campos campopequeno desreq">
                            </td>
                        </tr>
                        <tr id="periodoEGrau">
                            <td >
                                <label>* Período: </label><br>
                                <input name="data[Estudante][periodo]" id="estudantePeriodo" placeholder=" Ex: 6º semestre" maxlength="50" type="text" size="20" required class="campos campopequeno desreq">        
                            </td>
                            <td>
                                <label>* Grau: </label><br>
                                <input name="data[Estudante][grau]" id="estudantegrau" maxlength="20" type="text" required class="campos campopequeno desreq">
                            </td>
                        </tr>
                    </table>
            </fieldset>

            <fieldset>    
                <legend>Contatos</legend>
                <table >
                    <tr>
                        <td colspan="2">
                            <label for="ComumEmail">* Email: </label><br>
                            <input name="data[Estudante][email]" id="ComumEmail" maxlength="100" type="email" size="80" required class="campos campogrande">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label> Site: </label><br>
                            <input name="data[Estudante][site]" id="estudanteSite" maxlength="100" type="text" size="80" class="campos campogrande">
                        </td>
                    </tr>

                    <tr>
                        <td  class="esquerda">
                            <label>* Telefone: </label><br>
                            <input name="data[Estudante][telefone]" id="estudanteTelefone" maxlength="15" type="text" required class="campos  campopequeno telefone">        
                        </td>            
                        <td class="direita">
                            <label>* Celular: </label><br>
                            <input name="data[Estudante][celular]" id="estudanteCelular" maxlength="15" type="text" class="campos campopequeno celular">        
                        </td>
                    </tr>
                    <tr>
                         <td  class="esquerda">
                            <label> Fax: </label><br>
                            <input name="data[Estudante][fax]" id="estudanteFax" maxlength="15" type="text" class="campos campopequeno fax">        
                        </td>
                        <td>
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