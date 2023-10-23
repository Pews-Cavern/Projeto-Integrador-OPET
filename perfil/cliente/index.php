<!DOCTYPE html>
<html lang="en">

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
    body {
        display: flex;
        flex-direction: row;
    }

    aside {
        background-color: #dcf7df;
        height: fit-content;
        width: fit-content;
        padding: 30px 60px 50px 60px;
        margin: 2% 3%;
        border-radius: 15px;
        position: fixed;
        filter: drop-shadow(5px -1px 16px #000000);

    }

    img#profilePicture {
        border-radius: 100%;
        width: 150px;

    }

    p#nome {
        font-weight: 900;
    }

    p#hastag {
        font-weight: 400;
    }


    p#employed {
        font-weight: 700;
        margin-top: 10px;
    }

    div.infos {
        margin-top: 15px;
        text-align: start;
    }

    p {
        margin-top: 2px;
        color: black;
        font-weight: 600;
    }

    button#redes {
        margin-top: 15px;
        border-radius: 50px;
    }


    /*----*/
    main {
        background-color: #dcf7df;
        height: fit-content;
        width: 100%;
        padding-left: 400px;
        margin-top: 10%;
        padding-top: 25px;
        padding-bottom: 1500px;
    }

    nav.navBar {
        display: flex;
        flex-direction: row;
        width: 40%;
        justify-content: space-between;
    }

    nav.navBar a.navLink {
        font-size: 30px;
        margin-right: 50px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    nav.navBar a.navLink.selected {
        color: #007bff;
    }

    .follow-button {
        background-color: #1DA1F2;
        color: #fff;
        border: none;
        border-radius: 25px;
        padding: 0px 50px;
        font-size: 20px;
        margin-left: auto;
    }

    .follow-button:hover {
        background-color: #0B77B1;
    }

    div.feed {
        background-color: red;
        height: fit-content;
        width: 80%;
        margin-top: 3%;
        padding: 50px;
    }
</style>

<body>


    <aside>
        <img src="https://cdn.vectorstock.com/i/preview-1x/15/40/blank-profile-picture-image-holder-with-a-crown-vector-42411540.jpg"
            alt="profilePicture" id="profilePicture">
        <div class="infos">
            <p id="nome">Paulo E. Konopka</p>
            <p id="hastag">@PauloKonopka</p>

            <p id="employed">Procurando Emprego</p>
            <p id="facul">UniOpet</p>
            <p id="area">Programador</p>
            <p id="dubarea">Desenvolvimento Web</p>
            <p id="semestre">Semestre 2/5</p>
            <p id="city">Curitiba</p>
            <button class="btn btn-success" id="redes">Redes Sociais</button>
        </div>
    </aside>

    <main>
        <nav class="navBar">
            <a href="#" class="navLink selected" onclick="selectNavLink(event)">Teste1</a>
            <a href="#" class="navLink" onclick="selectNavLink(event)">Teste2</a>
            <a href="#" class="navLink" onclick="selectNavLink(event)">Teste3</a>
            <button class="follow-button">Seguir</button>
        </nav>

        <div class="feed">

        </div>
    </main>


    <script>
        function selectNavLink(event) {
            const navLinks = document.querySelectorAll('.navLink');
            navLinks.forEach(link => link.classList.remove('selected'));
            const selectedLink = event.target;
            selectedLink.classList.add('selected');
        }


        const defaultJson = {
            
        }
        function createCard(json) {

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>