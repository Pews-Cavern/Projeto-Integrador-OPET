<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="./../../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/default.css">
    <title>Produtos do Futuro</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px
    }

    main {
        height: fit-content;
        padding: 50px 50px 0px 50px;
        width: 50%;
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
</style>

<body>

    <main>

        <img src="./../../assets/logo.png" alt="logo" class="logo">
        <h1 id='title'>Cadastro Vendedor</h1>
        <form action="./index.php" method="post">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="name" id="Nome" placeholder="Nome" required
                    pattern="^[A-Za-z ]+$" title="Apenas letras e espaços são permitidos.">
                <label for="Nome">
                    <p class="place">Nome Completo</p>
                </label>
            </div>

            <div class="form-floating mb-2">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required
                    pattern="[^@\s]+@[^@\s]+\.[a-zA-Z]{2,}"
                    title="Digite um endereço de email válido (exemplo: nome@dominio.com)">
                <label for="email">
                    <p class="place">Email</p>
                </label>
            </div>


            <div class="form-floating mb-2">
                <input type="password" class="form-control" name="password" id="senha" placeholder="Senha" required
                    pattern=".{8,}" title="A senha deve ter no mínimo 8 caracteres">
                <label for="senha">
                    <p class="place">Senha</p>
                </label>
            </div>

            <div class="form-floating mb-2">
                <input type="password" class="form-control" name="password-2" id="senha2" placeholder="Senha" required
                    pattern=".{8,}" title="A senha deve ter no mínimo 8 caracteres">
                <label for="senha2">
                    <p class="place">Confirmar Senha</p>
                </label>
            </div>

            <input class="btn btn-primary mt-3 mx-auto" type="submit" value="Cadastrar" name="gravar" id="button"
                onclick="submitForm()" required>

            <div class="container bottomPart">
                <p class="text-center">Já possui uma conta? | <a href="../login/index.php">Entre!</a></p>
            </div>

        </form>
    </main>
    <script>
        document.getElementById('title').textContent = new URLSearchParams(window.location.search).get('type') == 1 ? "Cadastro Cliente" : "Cadastro Vendedor";
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>


<?php
include "./../../util/config.php";
if (isset($_POST['gravar'])) {
    $pw1 = $_POST['password'];
    $pw2 = $_POST['password-2'];
    if ($pw1 !== $pw2) {
        echo "As senhas devem ser iguais";
    } else {
        if (isAlredySaved($_POST['email'])) {
            echo "Você já possui algo assim";
        } else {

            $nome = $_POST['name'];
            $email = $_POST['email'];
            $pw = md5($pw1);
            $grava = $conn->prepare('INSERT INTO `login`(`id_log`, `nome_log`, `email_log`, `pw_log`) VALUES (NULL, :pnome, :pemail, :ppw)');
            $grava->bindValue(':pnome', $nome);
            $grava->bindValue(':pemail', $email);
            $grava->bindValue(':ppw', $pw);
            $grava->execute();
            header("location: ./vendedor/infoAdicional/index.php?email=" . $email);

        }

    }
}
?>


</html>