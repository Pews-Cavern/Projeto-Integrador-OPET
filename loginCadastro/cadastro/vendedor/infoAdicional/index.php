<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../../../../assets/logo.png">
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

                    <div class="form-floating mb-2">
                        <input type="select" class="form-control" name="curso" id="curso" placeholder="Curso" required
                            pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="curso">
                            <p class="place">Nome do Curso</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="select" class="form-control" name="area" id="area" placeholder="Área do curso"
                            required pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="area">
                            <p class="place">Área do curso</p>
                        </label>
                    </div>

                    <!-- <div class="form-floating mb-2">
                        <input type="Checkbox" class="form-control" name="subArea" id="subArea"
                            placeholder="Especialidade" required pattern="^[A-Za-z ]+$"
                            title="Apenas letras e espaços são permitidos.">
                        <label for="subArea">
                            <p class="place">Especialidade</p>
                        </label>
                    </div> -->
                    <div class="form-floating mb-2">
                        <select class="form-select" name="subArea" multiple aria-label="multiple select example">
                            <option>Especialidades :</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
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

                    <!-- <div class="form-floating mb-2">
                        <input type="select" class="form-control" name="curso" id="curso" placeholder="Curso" required
                            pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="curso">
                            <p class="place">Gênero</p>
                        </label>
                    </div> -->
                    <div class="form-floating mb-2">
                        <select class="form-select" name="genero" aria-label="multiple select example">
                            <option selected>Gênero :</option>
                            <option value="1">Homen</option>
                            <option value="2">Mulher</option>
                            <option value="3">Outros</option>
                        </select>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade"
                            required pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="cidade">
                            <p class="place">Cidade</p>
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" name="buscandoEmprego" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Buscando Emprego ?</label>
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
</body>

<?php
include "./../../../../util/config.php";
$errType = false;
if (isset($_POST['gravar'])) {
    $faculcade = $_POST['faculdade'];
    $curso = $_POST['curso'];
    $area = $_POST['area'];
    $subArea = $_POST['subArea'];
    $inicioCurso = $_POST['inicioCurso'];
    $finalCurso = $_POST['finalCurso'];
    $buscandoEmprego = $_POST['buscandoEmprego'];
    $cidade = $_POST['cidade'];
    $genero = $_POST['genero'];
    $nascimeto = $_POST['nascimento'];
    $grava = $conn->prepare('INSERT INTO `infovendedor` (`id_vend`, `id_login`, `facul`, `curso`, `area`, `subArea`, `inicioCurso`, `finalCurso`, `buscandoEmprego`, `cidade`, `genero`, `nascimento`) VALUES (NULL, NULL, :faculdade, :curso, :area, :subArea, :inicioCurso, :finalCurso, :buscandoEmprego, :cidade, :genero, :nascimento)');
    $grava->bindValue(":faculdade", $faculcade);
    $grava->bindValue(":curso", $curso);
    $grava->bindValue(":area", $area);
    $grava->bindValue(":subArea", $subArea);
    $grava->bindValue(":inicioCurso", $inicioCurso);
    $grava->bindValue(":finalCurso", $finalCurso);
    $grava->bindValue(":buscandoEmprego", $buscandoEmprego);
    $grava->bindValue(":cidade", $cidade);
    $grava->bindValue(":genero", $genero);
    $grava->bindValue(":nascimento", $nascimeto);
    $grava->execute();
    if ($login->rowCount() == 0) {
        $errType = true;
    }
}
?>
<!-- INSERT INTO `infovendedor` 
(`id_vend`, `id_login`, `facul`, `curso`, `area`, `subArea`, `inicioCurso`, `finalCurso`, `buscandoEmprego`, `cidade`, `genero`, `nascimento`) 
VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '') -->

</html>