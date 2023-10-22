<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href=" ../../css/default.css">
    <title>Produtos do Futuro ADM</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .forms {
        margin-top: 51px;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;


    }

    .form-check {
        width: fit-content;

        font-size: 30px;
        display: flex;
    }

    h2 {
        color: black;
        padding-top: 45px;
    }

    main {

        width: 80%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        justify-content: center;


    }

    main div.buttons {
        filter: drop-shadow(9px 5px 15px #a8a8a8);
        border-radius: 50px 50px 0px 0px;
        background-color: #dcf7df;
        height: fit-content;
        padding: 50px 50px 50px 50px;
        justify-content: space-evenly;
        display: flex;
    }

    main div.actions {
        width: 100%;
        height: 500px;
        background-color: #c7c7c7;
    }

    p {
        color: white;
        text-align: center;
        font-size: 30px;
    }



    div.info {
        display: flex;
        justify-content: space-around;
        background-color: black;
        padding: 15px;
    }

    p.title {
        color: black;
    }

    div.title {
        background-color: white;
    }


    #seeAll,
    #remover,
    #editar {
        display: none;
    }
</style>

<body>

    <main>
        <div class="buttons">
            <button class="btn btn-dark" onclick="changeView(0)">Escolher Tabela</button>
            <button class="btn btn-dark" onclick="changeView(1)">Ver tudo</button>
            <button class="btn btn-dark" id="remover">Remover</button>
            <button class="btn btn-dark" id="editar">Edit</button>
        </div>

        <div class="actions" id="default">
            <h2 class="title">Qual Tabela você quer acessar?</h2>
            <div class="forms">
                <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off"
                    checked>
                <label class="btn btn-outline-success" for="success-outlined">Usuários, Emails e Senhas</label>

                <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                <label class="btn btn-outline-success" for="danger-outlined">Informações de Vendedores</label>

            </div>
        </div>
        <div class="actions" id="seeAll">
            <div id="addAll">


            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPh cTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
<?php
include "../../util/config.php";
$stmt = $conn->prepare('SELECT * FROM `login`');
$stmt->execute();
$data = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

if (isset($_COOKIE["removeId"])) {

    $conn->prepare("DELETE FROM `login` WHERE `login`.`id_log` = $cokie");
}

?>

<script>
    const tablesName = [
        "login",
        "dadosVendedor",
    ];
    let selected = 0;
    const arrs = <?php echo json_encode($data) ?>;
    let selectedCheckbox = null;


    function selecionar(index) {
        const currentCheckbox = document.getElementById(index);
        if (currentCheckbox !== selectedCheckbox) {
            if (selectedCheckbox) {
                selectedCheckbox.querySelector('input').checked = false;
            }
            selectedCheckbox = currentCheckbox;
        }

    }




    function changeView(number) {
        const ids = [
            'default',
            'seeAll',
            'remover',
            'editar',
        ];
        for (let id of ids) {
            document.getElementById(id).style.display = "none";
        }
        document.getElementById(ids[number]).style.display = "block";
        if (number == 1) {

            document.getElementById(ids[2]).style.display = "block";
            document.getElementById(ids[3]).style.display = "block";
        }
        if (arrs.length == 0) { document.getElementById("addAll").innerHTML = "<p>Sem registro</p>"; return; }
        let result = "<div class='info title'><p class='title'>Nome</p><p class=' title'>Email</p ></div>"
        for (var info of arrs) {
            var i = info["id_log"];
            result += "<div class='info' id='" + i + "'><div class='form-check'><input class='form-check-input' type='checkbox' id='exampleCheck1' onclick='selecionar(" + i + ")'><label class='form-check-label' for='exampleCheck1'></label></div><p>" + info["nome_log"] + "</p><p>" + info["email_log"] + "</p></div>";
        }
        document.getElementById("addAll").innerHTML = result;

    }



</script>



</html>