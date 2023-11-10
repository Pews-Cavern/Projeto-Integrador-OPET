<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../../../../assets/logo.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../util/ajax.js"></script>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../css/default.css">
    <title>Produtos do Futuro</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px
    }

    main {
        height: fit-content;
        /*Top, Right, Bottom, Left*/
        padding: 10px 40px 10px 40px;
        width: 90%;
        background-color: #dcf7df;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        justify-content: center;
        border-radius: 50px;
        filter: drop-shadow(9px 10px 15px #a8a8a8);
    }

    main * {
        color: black
    }

    img.logo {
        height: 150px
    }

    .bottomPart {
        margin-top: 20px;
    }

    div.row {
        padding: 15px 15px 15px 15px;
        display: flex;
        flex-direction: row;
    }

    div.infoFaculty {

        width: 50%;
        display: flex;
        flex-direction: column;
    }

    div.infoPersonal {
        width: 50%;
        display: flex;
        flex-direction: column;
    }

    div.form-check {
        font-size: larger;
        font-weight: 700;
        text-align: center;
    }

    div.myRow {
        margin-bottom: 0.5rem !important;
        display: flex;
        align-content: center;
        align-items: baseline;

        justify-content: space-between;
    }

    div.myRow p {
        margin-right: 15px;
        font-size: larger;
        font-weight: 700;
    }

    div.genderSelect {
        background-color: white;
        border-radius: 30px;
        border-style: inset;
    }
</style>

<body>


    <main>
        <img src="../../../../assets/logo.png" alt="logo" class="logo">
        <h1>Mais Informações</h1>

        <form method="post">
            <div class="row">
                <div class="infoFaculty">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="faculdade" id="faculdade" placeholder="Faculdade"
                            required pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="faculdade">
                            <p class="place">Nome da Faculdade</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2 myRow">
                        <p>Nome do Curso</p>
                        <select class="selectpicker" data-live-search="true" id="major">
                            <option>Selecione um</option>
                            <option>Análise e Desenvolvimento de Sistemas</option>
                            <option>Ciência da Computação</option>
                            <option>Engenharia de Software</option>
                            <option>Sistemas de Informação</option>
                            <option>Ciência de Dados</option>
                            <option>Segurança da Informação</option>
                            <option>Redes de Computadores</option>
                            <option>Inteligência Artificial</option>
                            <option>Engenharia Eletrônica</option>
                            <option>Engenharia de Redes</option>
                            <option>Engenharia de Computação</option>
                            <!--  -->
                            <option>Design Gráfico</option>
                            <option>Design de Produto</option>
                            <option>Design de Interiores</option>
                            <option>Design de Moda</option>
                            <option>Design de Jogos</option>
                            <option>Design de Comunicação</option>
                            <option>Design de Experiência do Usuário (UX)</option>
                            <option>Design de Interação</option>
                            <option>Design Industrial</option>
                            <!--  -->
                            <option>Marketing Digital</option>
                            <option>Marketing de Conteúdo</option>
                            <option>Marketing de Mídias Sociais</option>
                            <option>Marketing de Influência</option>
                            <option>Marketing Estratégico</option>
                            <option>Publicidade e Propaganda</option>
                            <option>Comunicação Social com ênfase em Marketing</option>
                            <!--  -->
                            <option>Nutrição</option>
                            <!--  -->
                            <option>Produção de Vídeos</option>
                            <option>Edição de Vídeos</option>
                            <option>Produção de Áudio</option>
                            <option>Animação</option>
                            <option>Fotografia</option>
                            <option>Pós-Produção</option>
                            <!--  -->
                            <option>Publicidade Tradicional</option>
                            <option>Planejamento de Campanhas</option>
                            <option>Estratégia de Anúncios</option>
                            <option>Criatividade Publicitária</option>
                            <option>Marketing Promocional</option>
                            <option>Outdoor e Mídia Impressa</option>
                            <!--  -->
                            <option>Jornalismo de Investigação</option>
                            <option>Jornalismo de Dados</option>
                            <option>Jornalismo Esportivo</option>
                            <option>Jornalismo de Moda</option>
                            <option>Reportagem Política</option>
                            <option>Jornalismo Cultural</option>
                            <!--  -->


                        </select>
                    </div>

                    <div class="form-floating mb-2 myRow">
                        <p>Áreas de competência</p>
                        <div id="dummy">
                            <select class="selectpicker" multiple data-live-search="true" id="subareaselect">
                            </select>
                        </div>

                        <div style="display:none" id="ti">
                            <select class="selectpicker" multiple data-live-search="true" id="select_ti">
                                <option>Programação Front-End</option>
                                <option>Programação Back-End</option>
                                <option>Programação Mobile</option>
                                <option>Programação de Software</option>
                                <option>Analista de Banco de Dados</option>
                                <option>Desenvolvedor de Jogos</option>
                            </select>
                        </div>

                        <div style="display:none" id="design">

                            <select class="selectpicker" multiple data-live-search="true" id="select_design">
                                <option>Design Gráfico</option>
                                <option>Design de Interface de Usuário (UI)</option>
                                <option>Design de Experiência do Usuário (UX)</option>
                                <option>Design de Produto</option>
                                <option>Design de Interação</option>
                                <option>Design de Ilustração</option>
                                <option>Design de Embalagens</option>
                                <option>Design de Identidade Visual</option>
                                <option>Design de Sites</option>
                                <option>Design de Aplicativos Móveis</option>
                            </select>
                        </div>


                        <div style="display:none" id="marketing">

                            <select class="selectpicker" multiple data-live-search="true" id="select_marketing">
                                <option>Marketing Digital</option>
                                <option>Marketing de Conteúdo</option>
                                <option>Publicidade Online</option>
                                <option>Estratégia de Marketing</option>
                                <option>Marketing de Mídias Sociais</option>
                                <option>SEO (Otimização de Mecanismos de Busca)</option>
                                <option>E-mail Marketing</option>
                                <option>Marketing de Influência</option>
                            </select>
                        </div>

                        <div style="display:none" id="nutricao">

                            <select class="selectpicker" multiple data-live-search="true" id="select_nutricao">
                                <option>Nutrição Clínica</option>
                                <option>Nutrição Esportiva</option>
                                <option>Nutrição Infantil</option>
                                <option>Nutrição Vegana/Vegetariana</option>
                                <option>Nutrição para Emagrecimento</option>
                                <option>Nutrição para Idosos</option>
                            </select>
                        </div>



                        <div style="display:none" id="audiovisuais">
                            <select style="display:none" id="select_audiovisuais" class="selectpicker" multiple
                                data-live-search="true">
                                <option>Produção de Vídeos</option>
                                <option>Edição de Vídeos</option>
                                <option>Produção de Áudio</option>
                                <option>Animação</option>
                                <option>Fotografia</option>
                                <option>Pós-Produção</option>
                            </select>
                        </div>


                        <div style="display:none" id="publicidade">
                            <select class="selectpicker" multiple data-live-search="true" id="select_publicidade">
                                <option>Publicidade Tradicional</option>
                                <option>Planejamento de Campanhas</option>
                                <option>Estratégia de Anúncios</option>
                                <option>Criatividade Publicitária</option>
                                <option>Marketing Promocional</option>
                                <option>Outdoor e Mídia Impressa</option>
                            </select>
                        </div>


                        <div style="display:none" id="jornalismo">
                            <select class="selectpicker" multiple data-live-search="true" id="select_jornalismo">
                                <option>Jornalismo de Investigação</option>
                                <option>Jornalismo de Dados</option>
                                <option>Jornalismo Esportivo</option>
                                <option>Jornalismo de Moda</option>
                                <option>Reportagem Política</option>
                                <option>Jornalismo Cultural</option>
                            </select>
                        </div>



                    </div>




                    <div class="form-floating mb-2">
                        <input type="date" class="form-control" name="inicioCurso" id="inicioCurso"
                            placeholder="Início do Curso" required pattern="^[A-Za-z ]+$"
                            title="Apenas letras e espaços são permitidos.">
                        <label for="inicioCurso">
                            <p class="place">Início do Curso</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="date" class="form-control" name="finalCurso" id="finalCurso"
                            placeholder="Término do Curso" required pattern="^[A-Za-z ]+$"
                            title="Apenas letras e espaços são permitidos.">
                        <label for="finalCurso">
                            <p class="place">Término do Curso</p>
                        </label>
                    </div>
                </div>

                <!-------------------------- ---------------------------- -------------------- -------------------------- --------------     -->
                <div class="infoPersonal">
                    <div class="form-floating mb-2">
                        <input type="date" class="form-control" name="nascimento" id="nascimento"
                            placeholder="Nascimento" required pattern="^[A-Za-z ]+$"
                            title="Apenas letras e espaços são permitidos.">
                        <label for="nascimento">
                            <p class="place">Data de Nascimento</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2 myRow">
                        <p>Seu Gênero</p>
                        <select class="selectpicker" data-live-search="true" id="genero" name="genero">
                            <option>Selecione um</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required
                            pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="cidade">
                            <p class="place">Cidade</p>
                        </label>
                    </div>

                    <!-- <div class="form-check form-switch">
                        <input class="form-check-input" name="buscandoEmprego" type="checkbox" role="switch"
                            id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Buscando Emprego ?</label>
                    </div> -->
                    <div class="form-floating mb-2 myRow">
                        <p>Buscando Emprego?</p>
                        <select class="selectpicker" data-live-search="true" id="buscandoEmprego" name="buscandoEmprego">
                            <option>Selecione um</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>

                    <input class="btn btn-primary mt-3 mx-auto" type="submit" value="Cadastrar" name="gravar"
                        id="button" required>

                </div>
            </div>


        </form>


    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        const majorToID = {
            'Selecione um': 0,
            'Ciência da Computação': 1,
            'Engenharia de Software': 1,
            'Sistemas de Informação': 1,
            'Ciência de Dados': 1,
            'Segurança da Informação': 1,
            'Redes de Computadores': 1,
            'Inteligência Artificial': 1,
            'Desenvolvimento Web': 1,
            'Engenharia Eletrônica': 1,
            'Engenharia de Redes': 1,
            'Engenharia de Computação': 1,
            'Análise e Desenvolvimento de Sistemas': 1,
            'Design Gráfico': 2,
            'Design de Produto': 2,
            'Design de Interiores': 2,
            'Design de Moda': 2,
            'Design de Jogos': 2,
            'Design de Comunicação': 2,
            'Design de Experiência do Usuário (UX)': 2,
            'Design de Interação': 2,
            'Design Industrial': 2,
            'Marketing Digital': 3,
            'Marketing de Conteúdo': 3,
            'Marketing de Mídias Sociais': 3,
            'Marketing de Influência': 3,
            'Marketing Estratégico': 3,
            'Publicidade e Propaganda': 3,
            'Comunicação Social com ênfase em Marketing': 3,
            'Nutrição': 4,
            'Produção de Vídeos': 5,
            'Edição de Vídeos': 5,
            'Produção de Áudio': 5,
            'Animação': 5,
            'Fotografia': 5,
            'Pós-Produção': 5,
            'Publicidade Tradicional': 6,
            'Planejamento de Campanhas': 6,
            'Estratégia de Anúncios': 6,
            'Criatividade Publicitária': 6,
            'Marketing Promocional': 6,
            'Outdoor e Mídia Impressa': 6,
            'Jornalismo de Investigação': 7,
            'Jornalismo de Dados': 7,
            'Jornalismo Esportivo': 7,
            'Jornalismo de Moda': 7,
            'Reportagem Política': 7,
            'Jornalismo Cultural': 7,
        };


        const areaSubareaMap = {
            0: ["Selecione um"],
            1: [
                "ProgramaçãoFront-End",
                "ProgramaçãoBack-End",
                "ProgramaçãoMobile",
                "ProgramaçãodeSoftware",
                "AnalistadeBancodeDados",
                "DesenvolvedordeJogos",
            ],
            2: [
                "DesignGráfico",
                "DesigndeInterfacedeUsuário(UI)",
                "DesigndeExperiênciadoUsuário(UX)",
                "DesigndeProduto",
                "DesigndeInteração",
                "DesigndeIlustração",
                "DesigndeEmbalagens",
                "DesigndeIdentidadeVisual",
                "DesigndeSites",
                "DesigndeAplicativos Móveis",
            ],
            3: [
                "MarketingDigital",
                "MarketingdeConteúdo",
                "PublicidadeOnline",
                "EstratégiadeMarketing",
                "MarketingdeMídiasSociais",
                "SEO(OtimizaçãodeMecanismosdeBusca)",
                "E-mailMarketing",
                "MarketingdeInfluência",
            ],
            4: [
                "NutriçãoClínica",
                "NutriçãoEsportiva",
                "NutriçãoInfantil",
                "NutriçãoVegana/Vegetariana",
                "NutriçãoparaEmagrecimento",
                "NutriçãoparaIdosos",
            ],
            5: [
                "ProduçãodeVídeos",
                "EdiçãodeVídeos",
                "ProduçãodeÁudio",
                "Animação",
                "Fotografia",
                "Pós-Produção",
            ],
            6: [
                "PublicidadeTradicional",
                "PlanejamentodeCampanhas",
                "EstratégiadeAnúncios",
                "CriatividadePublicitária",
                "MarketingPromocional",
                "OutdooreMídiaImpressa",
            ],
            7: [
                "JornalismodeInvestigação",
                "JornalismodeDados",
                "JornalismoEsportivo",
                "JornalismodeModa",
                "ReportagemPolítica",
                "JornalismoCultural",
            ],
        };
        function setCookie(name, value, days) {
            const expires = new Date();
            expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
        }
        let subAreas = [];
        let divIdToListen = "dummy";
        const courseSelect = document.getElementById("major");

        const ids = ["dummy", "ti", "design", "marketing", "nutricao", "audiovisuais", "publicidade", "jornalismo"];

        courseSelect.addEventListener("change", function () {
            const selectedOption = courseSelect.options[courseSelect.selectedIndex].text;
            const majorID = majorToID[selectedOption];
            for (var divs of ids) {
                document.getElementById(divs).style.display = "none";

            }
            document.getElementById(ids[majorID]).style.display = "block";
            setCookie("curso", selectedOption, 30);
            let subAreas = [];
            setCookie("area", majorID, 30);


            document.getElementById(`select_${ids[majorID]}`).addEventListener("change", function () {

                var trigged = false;
                for (var div of document.getElementsByClassName('filter-option-inner-inner')) {
                    if (div.innerText == "Selecione um" || div.innerText == selectedOption) continue;
                    subAreas = div.innerText.split(",");
                    trigged = true;
                }
                let subAreasID = [];
                for (var area of subAreas) {
                    let stringTrated = areaSubareaMap[majorID].indexOf(area.replace(/ /g, ""));
                    if (!subAreasID.indexOf(stringTrated)) continue;
                    subAreasID.push(stringTrated);
                }
                if (!trigged) subAreasID = [];
                setCookie("subArea", subAreasID.toString(), 30);

            });
        });


        setCookie("email", new URLSearchParams(window.location.search).get('email'), 30);

    </script>
</body>

<?php
include "./../../../../util/config.php";
$errType = false;


if (isset($_POST['gravar'])) {
    $faculdade = $_POST['faculdade'];
    $curso = $_COOKIE['curso'];
    $area = $_COOKIE['area'];
    $subArea = $_COOKIE['subArea'];
    $inicioCurso = $_POST['inicioCurso'];
    $finalCurso = $_POST['finalCurso'];
    $buscandoEmprego = $_POST['buscandoEmprego'];
    $cidade = $_POST['cidade'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $email = $_COOKIE['email']; //<- Tá Certo assim

    $grava = $conn->prepare('INSERT INTO `infovendedor` (`id_vend`, `email`, `faculdade`, `curso`, `area`, `subArea`, `inicioCurso`, `finalCurso`, `buscandoEmprego`, `cidade`, `genero`, `nascimento`) VALUES (NULL, :email, :faculdade, :curso, :area, :subArea, :inicioCurso, :finalCurso, :buscandoEmprego, :cidade, :genero, :nascimento)');

    $grava->bindValue(":faculdade", $faculdade);
    $grava->bindValue(":email", $email);
    $grava->bindValue(":curso", $curso);
    $grava->bindValue(":area", $area);
    $grava->bindValue(":subArea", $subArea);
    $grava->bindValue(":inicioCurso", $inicioCurso);
    $grava->bindValue(":finalCurso", $finalCurso);
    $grava->bindValue(":buscandoEmprego", $buscandoEmprego);
    $grava->bindValue(":cidade", $cidade);
    $grava->bindValue(":genero", $genero);
    $grava->bindValue(":nascimento", $nascimento);
    $grava->execute();

}
?>

</html>