<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="icon" type="img/png" href="../assets/logo.png">
    <title>Produtos do Futuro</title>
</head>

<body>
    <button onclick="location.href='../index.php'" id="x">
        X
    </button>
    <div class="d-flex align-items-center py-4 px-5">
        <main class="w-100 p-3">
            <div class="container" id="container1">
                <form action="./cadastro.php" method="post">
                    <div class="row">
                        <div id="div">
                            <img src="../assets/logo.png" alt="logo">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nome" id="usuario" placeholder="Usuário">
                            <label for="usuario">
                                <p class="place">Usuário</p>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            <label for="email">
                                <p class="place">Email</p>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="pw1" id="senha" placeholder="Senha">
                            <label for="senha">
                                <p class="place">Senha</p>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="pw2" id="senha1"
                                placeholder="Confirmar Senha">
                            <label for="senha1">
                                <p class="place">Confirmar Senha</p>
                            </label>
                        </div>
                    </div>
                    <!--submit-->
                    <input class="btn btn-primary mt-3 mx-auto" type="submit" value="Cadastrar" name="gravar"
                        id="button">
                </form>
                <div class="container bottomPart">
                    <p class="text-center">Já possui uma conta? | <a href="../loginCadastro/login.php">Entre!</a>
                    </p>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
<?php
include "./../util/config.php";
$err;
if (isset($_POST['gravar'])) {
    if (isset($_POST['pw1']) && isset($_POST['pw2'])) {
        $pw1 = $_POST['pw1'];
        $pw2 = $_POST['pw2'];
        if ($pw1 !== $pw2) {
            $err = "As senhas devem ser iguais";
        } else {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $pw = md5($pw1);
            if (!empty($nome) && !empty($email) && !empty($pw)) {
                $grava = $conn->prepare('INSERT INTO `login`(`id_log`, `nome_log`, `email_log`, `pw_log`) VALUES (NULL, :pnome, :pemail, :ppw)');
                $grava->bindValue(':pnome', $nome);
                $grava->bindValue(':pemail', $email);
                $grava->bindValue(':ppw', $pw);
                $grava->execute();
                header("location: ./cadastro/index.php");
            } else {
                $err = "Por favor preencha todos os campos corretamente";
            }
        }
    }
}
?>


</html>