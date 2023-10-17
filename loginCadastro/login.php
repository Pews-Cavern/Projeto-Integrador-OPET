<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>

<body class="d-flex align-items-center py-4 px-5">

    <main class="w-100 p-3">
        <div class="container" id="container1">
            <form action="">
                <div id="div">
                    <img src="../assets/logo.png" alt="logo">
                </div>
                <!--inputs-->
                <div class="row">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check" id="botaoLogin">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Lembrar Login
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#">Esqueci minha senha</a>
                            </div>
                        </div>
                    </div>
                    <!--submit-->
                    <input class="btn btn-primary mt-3" type="submit" value="Entrar" id="button">
                </div>
            </form>
            <div class="container mt-5">
                <div class="row">
                    <p class="text-center">Ainda não tem uma conta?<a href="#"> Cadastre-se!</a></p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<?php ?>