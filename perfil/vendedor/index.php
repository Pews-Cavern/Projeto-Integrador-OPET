<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../../assets/logo.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/default.css">
    <title>Produtos do Futuro</title>
</head>
<body>


    <aside>
        <img src="https://cdn.vectorstock.com/i/preview-1x/15/40/blank-profile-picture-image-holder-with-a-crown-vector-42411540.jpg"
            alt="profilePicture" id="profilePicture">
        <div class="infos">
            <p id="nome">João V. Trizotte</p>
            <p id="hastag">@TrizotteLima</p>

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
            <button class="follow-button">Anunciar</button>
        </nav>

        <div class="feed">

            <div class="cardsPubli">
                <div class="iconCard"></div>
            </div>

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Ver mais!</button>
            </div>

            <div class="cardsPubli">
                <div class="iconCard"></div>
            </div>

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Ver mais!</button>
            </div>

            <div class="cardsPubli">
                <div class="iconCard"></div>
            </div>

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Ver mais!</button>
            </div>

            <div class="cardsPubli">
                <div class="iconCard"></div>
            </div>

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Ver mais!</button>
            </div>

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