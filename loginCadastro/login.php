<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="../assets/logo.png">
    <link rel="stylesheet" href="../css/login.css">
    <title>Produtos do Futuro</title>
</head>

<body class="d-flex align-items-center py-4 px-5">

    <main class="w-100 p-3">
        <div class="container" id="container1">
            <form action="login.php" method="post">
                <div id="div">
                    <img src="../assets/logo.png" alt="logo">
                </div>
                <!--inputs-->
                <div class="row">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">
                            <p class="place">Email</p>
                        </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="pw" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">
                            <p class="place">Senha</p>
                        </label>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check" id="botaoLogin">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lembrar Login</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#">Esqueci minha senha</a>
                            </div>
                        </div>
                    </div>
                    <!--submit-->
                    <input class="btn btn-primary mt-3" type="submit" name="logar" value="Entrar" id="button">
                </div>
            </form>
            <div class="container bottomPart">
                <p class="text-center">Ainda não tem uma conta? | <a
                        href="../loginCadastro/cadastro.php">Cadastre-se!</a>
                </p>
            </div>
            <p id="err">Login ou senha invalida</p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>


<?php
include "config.php";
$errType = false;

if (isset($_POST['logar'])) {
    $email = $_POST['email'];
    $pw = MD5($_POST['pw']);

    $login = $conn->prepare('SELECT * FROM login WHERE email_log = :email AND pw_log=:pw');
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
        header("location: teste.php");
    }
}

?>
<script>
    document.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault();
        checkPw();
    });

    function checkPw() {
        const result = <?php echo $errType; ?>;
        if (result == 1) {
            document.getElementById("err").style.display = "block";
        } else {
            document.getElementById("err").style.display = "none";
        }

        setTimeout(() => {
            document.getElementById("err").style.display = "none";
        }, 8 * 100)
    }
</script>

</html>