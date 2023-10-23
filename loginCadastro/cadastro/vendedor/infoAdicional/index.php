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
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
            <h1>Mais Informações</h1>
        </div>

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

                    <div class="form-floating mb-2">
                        <input type="Checkbox" class="form-control" name="subArea" id="subArea"
                            placeholder="Especialidade" required pattern="^[A-Za-z ]+$"
                            title="Apenas letras e espaços são permitidos.">
                        <label for="subArea">
                            <p class="place">Especialidade</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="date" class="form-control" name="semestre" id="semestre"
                            placeholder="Atual Semestre" required pattern="^[A-Za-z ]+$"
                            title="Apenas letras e espaços são permitidos.">
                        <label for="semestre">
                            <p class="place">Início do Curso</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="date" class="form-control" name="totalSemestre" id="totalSemestre"
                            placeholder="Total de Semestres" required pattern="^[A-Za-z ]+$"
                            title="Apenas letras e espaços são permitidos.">
                        <label for="totalSemestre">
                            <p class="place">Término do Curso</p>
                        </label>
                    </div>
                </div>

                <!-------------------------- ---------------------------- -------------------- -------------------------- --------------     -->
                <div class="infoPersonal">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="faculdade" id="faculdade" placeholder="Faculdade"
                            required pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="faculdade">
                            <p class="place">Data de Nascimento</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="select" class="form-control" name="curso" id="curso" placeholder="Curso" required
                            pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="curso">
                            <p class="place">Gênero</p>
                        </label>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="select" class="form-control" name="area" id="area" placeholder="Área do curso"
                            required pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                        <label for="area">
                            <p class="place">Cidade</p>
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Buscando Emprego ?</label>
                    </div>

                </div>
            </div>


        </form>


    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
<!--
INSERT INTO `infovendedor`
(`id_vend`, `id_login`, `facul`, `curso`, `area`, `sub_area`, `semestre`, `semestre_total`, `empregado`, `cidade`, `genero`, `nascimento`);
VALUES ('', '8', 'Opet', 'Curso de Análise e Desenvolvimento de Sistemas', 'ti', 'back-end', '2', '5', '0', 'Curitiba', '1', '28/05/2003');
 -->

</html>