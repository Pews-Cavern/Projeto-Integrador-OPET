<!DOCTYPE html>
<html lang="en">
<?php
session_start();
session_destroy();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/default.css">
    <title>Produtos do Futuro</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px
    }

    main {
        height: fit-content;
        padding: 20px 50px 0px 50px;
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
        <img src="../../assets/logo.png" alt="logo" class="logo">
        <h1>Login</h1>
        <form action="./index.php" method="post">


            <div class="form-floating mb-2">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required
                    pattern="[^@\s]+@[^@\s]+\.[a-zA-Z]{2,}"
                    title="Digite um endereço de email válido (exemplo: nome@dominio.com)">
                <label for="email">
                    <p class="place">Email</p>
                </label>
            </div>


            <div class="form-floating mb-2">
                <input type="password" class="form-control" name="pw" id="senha" placeholder="Senha" required
                    pattern=".{8,}" title="A senha deve ter no mínimo 8 caracteres">
                <label for="senha">
                    <p class="place">Senha</p>
                </label>
            </div>


            <input class="btn btn-primary mt-3 mx-auto" type="submit" value="Entrar" name="logar" id="button" required>

            <div class="container bottomPart">
                <p class="text-center">Ainda não tem uma conta? | <a href="../index.php">Cadastre-se!</a>
                </p>
            </div>

        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>


<?php
include "../../util/config.php";
$errType = false;
if (isset($_POST['logar'])) {
    $email = $_POST['email'];
    $pw = MD5($_POST['pw']);
    $login = $conn->prepare('SELECT * FROM `login` WHERE email_log = :email AND pw_log=:pw');
    $login->bindValue(":email", $email);
    $login->bindValue(":pw", $pw);
    $login->execute();
    if ($login->rowCount() == 0) {
        $errType = true;
    } else {
        $cons = $login->fetch();
        $id = $cons['id_log'];
        session_start();
        $_SESSION['login'] = $id;
        header("location: ./../../perfil/cliente/index.php");
    }
}
?>

<script>
    // console.log(<?php echo $err ?>);
</script>

</html>