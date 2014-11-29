        <!DOCTYPE html>

<!-- CADASTRO DE USUÁRIOS DO TIPO ESTUDANTES -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
    <form action="/sim/estudantes/cadastrar" id="EstudanteCadastrarForm" method="post" accept-charset="utf-8">
    
        <h1 class="boxh1"> Cadastro de Estudante / Cidade </h1>
        
        <div class="box">
        
        <label>
        <span> Nome completo: * </span>
        <input name="data[Estudante][nome]" id="estudanteNome" maxlength="200" type="text" size="80" required>
        </label> 
        
        <label>
        <span> RG: * </span> 
        <input name="data[Estudante][rg]" id="estudanteRg" maxlength="20" type="text" required>
        </label>
                
        <label>
        <span> Órgão Emissor: * </span> 
        <input name="data[Estudante][emissor]" id="estudanteEmissor" maxlength="10" type="text" required >
        </label> 

        <label>
        <span> Data de Nascimento: * </span> 
        <input name="data[Estudante][data_nascimento]" maxlength="20" type="text" id="comumCpf" required>
        </label>
        
        <label>
        <span> Sexo:  </span> 
        <input name="data[Estudante][sexo]" id="estudanteSexo" maxlength="1" type="radio" value="F"> F
        <input name="data[Estudante][sexo]" id="estudanteSexo" maxlength="1" type="radio" value="M"> M
        </label>
        
        <label>
        <span> Nome da Mãe: </span>
        <input name="data[Estudante][nomeMae]" id="estudanteNomeMae" maxlength="100" type="text" size="80">
        </label>
        
        <label>
        <span> Nome do Pai: </span>
        <input name="data[Estudante][nomePai]" id="estudanteNomePai" maxlength="100" type="text" size="80">
        </label>
            
        <label>
        <span> Naturalidade: </span> 
        <input name="data[Estudante][naturalidade]" id="estudanteNaturalidade" maxlength="30" type="text">
        </label>
           
        <!-- ESTADO SÓ O UF, CAMPO SELECT -->
        <label>
        <span> Estado: </span> 
        <select name="data[Estudante][estado]" id="estudanteEstado" maxlength="1" >
        <option value="PA"> PA </option>
        </select>
        </label>
        
        <!-- CAMPO SELECT SÓ COM A OPÇÃO "CASTANHAL" -->
        <label>
        <span> Cidade: </span> 
        <select name="data[Estudante][cidade]" id="estudanteCidade" maxlength="20">
        <option value="Castanhal"> Castanhal </option>
        </select>
        </label>
       
        <label>
        <span> Endereço: *</span> 
        <input name="data[Estudante][endereco]" id="estudanteEndereco" maxlength="100" type="text" size="80" required>
        <p class="legenda"> *Ex: Rua Maria Caetana da Mota, 43. </p>
        </label>

        <label>
        <span> Bairro: *</span>
        <input name="data[Estudante][bairro]" id="estudanteBairo" maxlength="50" type="text" size="50" required>
        </label>

        <label>
        <span> CEP: *</span>
        <input name="data[Estudante][cep]" id="estudanteCep" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Telefone: *</span> 
        <input name="data[Estudante][telefone]" id="estudanteTelefone" maxlength="15" type="text" required>
        </label>

        <label>
        <span> Nome da escola: * </span> 
        <input name="data[Estudante][nomeEscola]" id="estudanteNomeEscola" maxlength="100" type="text" size="80" required>
        </label>

        <label>
        <span> CNPJ (Escola): *</span>
        <input name="data[Estudante][cnpj]" id="estudanteCnpj" maxlength="20" type="text" required>
        </label>
            
        <label>
        <span> Série: *</span>
        <input name="data[Estudante][serie]" id="estudanteSerie" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Grau: *</span>
        <input name="data[Estudante][grau]" id="estudanteGrau" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Curso: *</span>
        <input name="data[Estudante][curso]" id="estudanteCurso" maxlength="50" type="text"  size="80" required>
        </label>
        
        <label>
        <span> Período: *</span>
        <input name="data[Estudante][periodo]" id="estudantePeriodo" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Matrícula: *</span>
        <input name="data[Estudante][matricula]" id="estudanteMatricula" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Data início: *</span>
        <input name="data[Estudante][dataIni]" id="estudanteDataIni" maxlength="20" type="text" required>
        </label>
        
        <label>
        <span> Data fim: *</span>
        <input name="data[Estudante][dataFim]" id="estudanteDataFim" maxlength="20" type="text" required>
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

  