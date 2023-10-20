<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Document</title>
</head>

<body class="d-flex align-items-center py-4 px-5">
    <main class="w-100 p-3">
        <div class="container" id="container1">
            <form action="cadastro.php" method="post">
                <div class="row">
                    <div id="div">
                        <img src="../assets/logo.png" alt="logo">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Usuário" aria-label="Username" name="nome" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="Email" class="form-control" placeholder="Email" aria-label="Username" name="email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Senha" aria-label="Username" name="pw1" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirmar senha" aria-label="Username" name="pw2" aria-describedby="basic-addon1">
                    </div>

                </div>
                <!--submit-->
                <div class="container">
                    <input class="btn btn-primary mt-3 mx-auto" type="submit" value="Entrar" name="grava" id="button">
                </div>
        </div>
        </div>
        </form>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "config.php";

if (isset($_POST['grava'])) {
    if (isset($_POST['pw1']) && isset($_POST['pw2'])) {
        $pw1 = $_POST['pw1'];
        $pw2 = $_POST['pw2'];

        if ($pw1 !== $pw2) {
            echo "As senhas devem ser iguais";
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
                header("location: login.php");
            } else {
                echo "Por favor preencha todos os campos corretamente";
            }
        }
    }
}
?>