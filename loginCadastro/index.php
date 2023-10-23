<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxnatzjc8HDHvvT2MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Produtos do Futuro</title>
</head>

<style>
    * {
        margin: 0px;
        overflow: hidden;
    }

    .container {
        display: flex;
        width: 100%;
    }

    .img {
        flex: 1;
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        font-family: 'Bebas Neue', sans-serif;
        height: 100vh;
        transition: background-color 0.3s, transform 0.3s;
    }

    div.comprador {
        background-image: url('../assets/bookshelf.png');
    }

    div.talentos {
        background-image: url('../assets/handshake.png');

    }

    p.talentos {
        margin-bottom;
        : 1px
    }

    .img:hover {
        background-color: rgba(0, 0, 0, 0.5);
        transform: scale(1.05);
        cursor: pointer;
    }

    h3 {
        font-size: 2rem;
    }

    p {
        font-size: 1.5rem;
        text-align: center;
    }



    .divBehind {
        position: relative;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
        height: fit-content;
        width: 80%;
        padding: 20px 10px 20px 10px;
        text-align: center;
        cursor: pointer;
    }

    .divBehind * {
        color: black
    }

    .divBehind:hover {
        background-color: white;
    }
</style>

<body>
    <div class="container">
        <div class="img talentos" onclick="location.href='./cadastro/index.php?type=1'">
            <div class="divBehind">

                <p class="talentos">Cliente</p>
                <h3>ENCONTRE TALENTOS AGORA</h3>
                <div class="whatYouCanFind">
                    <p>🞄 Receba trabalho por um preço acessível</p>
                    <p>🞄 Ajude uma gama de universitários a ganhar experiência em sua área</p>
                    <p>🞄 Procure por possíveis futuros talentos para sua equipe</p>
                </div>
            </div>
        </div>

        <div class="img comprador" onclick="location.href='./cadastro/index.php?type=2'">
            <div class="divBehind">
                <p class="talentos">Vendedor/Estudante</p>
                <h3>ENCONTRE TRABALHO AGORA</h3>
                <p>🞄 Ofereça seus serviços e habilidades</p>
                <p>🞄 Ganhe experiência prática em sua área de estudo</p>
                <p>🞄 Comece a construir seu futuro profissional</p>
            </div>
        </div>
    </div>

    <div class="container bottomPart">
        <p class="text-center">Já possui uma conta? | <a href="../loginCadastro/login.php">Entre!</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>