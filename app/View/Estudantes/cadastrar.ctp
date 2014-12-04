<?php
    $cidadeSPC = ($cidade == "SantaIsabel") ? "Santa Isabel" : $cidade;  
?>
<div class="box">
    <form action="/Estudantes/cadastrar/<?php echo $cidade;?>" id="EstudanteCadastrarForm" method="post" accept-charset="utf-8">
        <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
        <h1 class="boxh1"> Cadastro de Estudantes /  <?php echo $cidadeSPC;?> </h1>
            
            <fieldset>    
                <legend>Dados Pessoais</legend>
                <table >
                    <tr>
                        <td colspan="2">
                            <label>* Nome completo: </label><br>
                            <input name="data[Estudante][nome]" id="EstudanteNome" maxlength="200" type="text" size="80" required  class="campos campogrande">
                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>* Nome da Mãe: </label><br>
                            <input name="data[Estudante][nomeMae]" id="EstudanteNomeMae" maxlength="100" type="text" size="80" class="campos campogrande">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>* Nome do Pai: </label><br>
                            <input name="data[Estudante][nomePai]" id="EstudanteNomeMae" maxlength="100" type="text" size="80" class="campos campogrande">
                        </td>
                    </tr>

                    <tr>
                        <td >
                            <label>*RG: </label><br>
                            <input name="data[Estudante][rg]" id="EstudanteRg" maxlength="20" type="text" required class="campos campopequeno rg">
                        </td>            
                        <td >
                            <label>* Orgão Emissor: </label><br>
                            <input name="data[Estudante][emissor]" id="EstudanteEmissor" maxlength="10" type="text" required  class="campos campopequeno">
                        </td>
                    </tr>

                    <tr>
                        <td >
                            <label>* CPF:</label><br>
                            <input name="data[Estudante][cpf]" maxlength="20" type="text" id="EstudanteCpf" required class="campos campopequeno cpf">
                        </td>
                        <td >
                            <label>* Sexo: </label><br>                    
                            <label>M <input name="data[Estudante][sexo]" id="EstudanteSexo" maxlength="1" type="radio" value="M"> </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<label>F <input name="data[Estudante][sexo]" id="EstudanteSexo" maxlength="1" type="radio" value="F"> </label>
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
                            <input name="data[Estudante][endereco]" placeholder="Ex: Rua Barão do Rio Branco, nº 643" id="EstudanteEndereco" maxlength="100" type="text" size="80" required class="campos campogrande">
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <label>* Bairro: </label><br>
                            <input name="data[Estudante][bairro]" id="EstudanteBairo" maxlength="50" type="text" size="30" required class="campos campopequeno">        
                        </td>
                        <td >
                            <label>* CEP: </label><br>
                            <input name="data[Estudante][cep]" id="EstudanteCep" maxlength="20" type="text" required class="campos campopequeno cep">
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <label>* Cidade: </label><br>
                            <select name="data[Estudante][cidade]" id="EstudanteCidade" maxlength="20" class="campos campopequeno" >
                                <option value="<?php echo $cidadeSPC;?>"> <?php echo $cidadeSPC;?> </option>
                            </select>
                        </td>
                        <td >
                            <label>* Estado: </label><br>
                            <select name="data[Estudante][estado]" id="EstudanteEstado" maxlength="1"  class="campos campopequeno" >
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
                                <label>* Nível de Escolaridade: <br>
                                    <select id="selectNivel"  class="campos campopequeno" name="data[Estudante][grau]">
                                        <option value="1">Fundamental</option>
                                        <option value="2">Médio</option>
                                        <option value="3">Superior</option>                                    
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>* Nome da Instituição: <br>
                                    <input name="data[Estudante][nomeEscola]" id="EstudanteNomeEscola" maxlength="200" type="text" size="80" required  class="campos campogrande">
                                </label>
                            </td>
                        </tr>
                        <tr id="cursoEMatricula">
                            <td >
                                <label id="EstudanteCurso">* Curso: <br>
                                    <input name="data[Estudante][curso]" id="EstudanteCurso" maxlength="50" type="text" size="30" required class="campos campopequeno desreq">
                                </label>        
                            </td>
                            <td >
                                <label id="EstudanteMatricula" >* Matricula: <br>
                                    <input name="data[Estudante][matricula]" id="EstudanteMatricula" maxlength="20" type="text" required class="campos campopequeno desreq">
                                </label>
                            </td>
                        </tr>
                        <tr id="iniFim">
                            <td >
                                <label id="EstudanteDataIni">* Ano Início: <br>
                                    <input name="data[Estudante][dataIni]" id="EstudanteDataIni" maxlength="4" type="text" size="20" required class="campos campopequeno desreq">
                                </label>
                                    
                            </td>
                            <td >
                                <label id="EstudanteDataFim">* Ano Fim: <br>
                                    <input name="data[Estudante][dataFim]" id="EstudanteDataFim" maxlength="4" type="text" required class="campos campopequeno desreq">
                                </label>
                            </td>
                        </tr>
                        <tr id="periodoESerie">
                            <td >
                                <label id="EstudantePeriodo">* Período: <br>
                                    <input name="data[Estudante][periodo]" id="EstudantePeriodo" placeholder=" Ex: 6º semestre" maxlength="50" type="text" size="20" required class="campos campopequeno desreq">
                                </label>        
                            </td>
                            <td>
                                <label for="EstudanteSerie" id="EstudanteSerie">* Série: <br>
                                    <input name="data[Estudante][serie]" id="EstudanteSerie" maxlength="20" type="text" required class="campos campopequeno desreq">
                                </label>
                                </label>
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
                            <input name="data[Estudante][site]" id="EstudanteSite" maxlength="100" type="text" size="80" class="campos campogrande">
                        </td>
                    </tr>

                    <tr>
                        <td  class="esquerda">
                            <label>* Telefone: </label><br>
                            <input name="data[Estudante][telefone]" id="EstudanteTelefone" maxlength="15" type="text" required class="campos  campopequeno telefone">        
                        </td>            
                        <td class="direita">
                            <label>* Celular: </label><br>
                            <input name="data[Estudante][celular]" id="EstudanteCelular" maxlength="15" type="text" class="campos campopequeno celular">        
                        </td>
                    </tr>
                    <tr>
                         <td  class="esquerda">
                            <label> Fax: </label><br>
                            <input name="data[Estudante][fax]" id="EstudanteFax" maxlength="15" type="text" class="campos campopequeno fax">        
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