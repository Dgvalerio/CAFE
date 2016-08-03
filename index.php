<!DOCTYPE html>
<!-- REGRAS PARA ID'S
        - 1º Sempre começar com letras minúsculas;
        - 2º Não são permitidos espaços nem acentos;
        - 3º A primeira letra de cada palavra é maiúscula, só a primeira letra, independentemente de ser uma sigla ou não.
-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> C.A.F.E. </title>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">

    <script src="0/jQuery/jquery-3.1.0.min.js"></script>
</head>
<body class="cr9">
    <div class="container">

        <form class="form-signin">
            <h1 class="form-signin-heading">Cálculo de Acompanhamento Físico e Energético</h1>

            <div id="pn01">
                <label for="pNome">Nome:</label> <br/>
                <input id="pNome" type="text" class="form-control"> <br/>

                <label for="pIdade">Idade:</label> <br/>
                <input id="pIdade" type="text" class="form-control"> <br/>

                <label>Sexo:</label> <br/>
                    <div class="checkbox">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="pSexMasculino" type="checkbox"><span class="custom-control-indicator"></span>Masculino <br/>
                        </label><br/>
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="pSexFeminino" type="checkbox"><span class="custom-control-indicator"></span>Feminino
                        </label><br/>
                    </div>

            </div> <br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular</button>
        </form>

    </div> <!-- /container -->
</body>
</html>

<!--<form class="form-control">
    <h1 class="">Cálculo de Acompanhamento Físico e Energético</h1>

    <div id="pn01">
        <label for="pNome">Nome:</label> <br/>
        <input id="pNome" type="text"> <br/>

        <label for="pIdade">Idade:</label> <br/>
        <input id="pIdade" type="text"> <br/>

        <label>Sexo:</label> <br/>
        <input id="pSexMasculino" type="checkbox"> <label for="pSexMasculino">Masculino</label>
        <input id="pSexFeminino" type="checkbox"> <label for="pSexFeminino">Feminino</label> <br/>
    </div> <br/>

    <div id="pn02">
        <label for="pMassa">Massa corporal:</label>
        <input id="pMassa" type="text"> <br/>

        <label for="pEstrutura">Estrutura:</label>
        <input id="pEstrutura" type="text">m <br/>

        <div id="pnGravida">
            <label for="pGravida">Grávida:</label>
            <input id="pGravida" type="checkbox"> <br/>
        </div>
    </div> <br/>

    <div id="pn03">
        <label for="pNivel">Nível de atividade física:</label>
        <select id="pNivel">
            <option value="opLeve"> Leve </option>
            <option value="opModerada"> Moderada </option>
            <option value="opIntensa"> Intensa </option>
        </select> <br/>

        <label for="pImcDes">IMC desejado:</label>
        <input id="pEstrutura" type="text"> <br/>

        <label for="pPesoDes">Peso desejado:</label>
        <input id="pPesoDes" type="text"> <br/>
    </div> <br/>

    <button>CALCULAR</button>

    <div id="pnResposta">
        <br/>
        <label for="">Fator de atividade Física:</label> <br/>
        <label for="">Correção do fator de atividade Física:</label> <br/>
        <br/>
        <label for="">GMB (Gasto Metabólico Basal):</label> <br/>
        <label for="">GET (Gasto Energético Total):</label> <br/>
        <label for="">IMC (Índice de Massa Corporal):</label> <br/>
        <label for="">IMC desejado:</label> <br/>
        <label for="">Peso desejado:</label> <br/>
        <label for="">Quantidade de quilos a perder/ganhar:</label> <br/>
    </div> <br/>
</form> -->