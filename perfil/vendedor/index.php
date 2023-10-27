<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../../assets/logo.png">
    <link rel="stylesheet" href="styles.css">
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
            <a href="#" class="navLink selected" onclick="selectNavLink(event)">Publicações</a>
            <a href="#" class="navLink" onclick="selectNavLink(event)">Anúncios</a>
            <a href="#" class="navLink" onclick="selectNavLink(event)">Compras</a>
            <button class="follow-button">Anunciar</button>
        </nav>

        <div class="feed">

            <div class="cardsPubli">
                <img class="iconCard" src="../../assets/tartaruga.jpg" alt="">

                <div class="infoCard">
                    <h3 class="title">Titulo do trabalho</h3>
                    <p>Informação do trabalho concluido</p>
                    <ul class="avaliacao">
                        <li class="star-icon ativo" data-avaliacao="1"></li>
                        <li class="star-icon" data-avaliacao="2"></li>
                        <li class="star-icon" data-avaliacao="3"></li>
                        <li class="star-icon" data-avaliacao="4"></li>
                        <li class="star-icon" data-avaliacao="5"></li>
                    </ul>
                </div>

            </div>

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Editar</button>
            </div>

           <div class="cardsPubli">
                <img class="iconCard" src="../../assets/tartaruga.jpg" alt="">

                <div class="infoCard">
                    <h3 class="title">Titulo do trabalho</h3>
                    <p>Informação do trabalho concluido</p>
                    <ul class="avaliacao">
                        <li class="star-icon ativo" data-avaliacao="1"></li>
                        <li class="star-icon" data-avaliacao="2"></li>
                        <li class="star-icon" data-avaliacao="3"></li>
                        <li class="star-icon" data-avaliacao="4"></li>
                        <li class="star-icon" data-avaliacao="5"></li>
                    </ul>
                </div>

            </div>

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Editar</button>
            </div>

           <div class="cardsPubli">
                <img class="iconCard" src="../../assets/tartaruga.jpg" alt="">

                <div class="infoCard">
                    <h3 class="title">Titulo do trabalho</h3>
                    <p>Informação do trabalho concluido</p>
                    <ul class="avaliacao">
                        <li class="star-icon ativo" data-avaliacao="1"></li>
                        <li class="star-icon" data-avaliacao="2"></li>
                        <li class="star-icon" data-avaliacao="3"></li>
                        <li class="star-icon" data-avaliacao="4"></li>
                        <li class="star-icon" data-avaliacao="5"></li>
                    </ul>
                </div>

            </div>

        

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Editar</button>
            </div>

            <div class="cardsPubli">
                <img class="iconCard" src="../../assets/tartaruga.jpg" alt="">

                <div class="infoCard">
                    <h3 class="title">Titulo do trabalho</h3>
                    <p>Informação do trabalho concluido</p>
                    <ul class="avaliacao">
                        <li class="star-icon ativo" data-avaliacao="1"></li>
                        <li class="star-icon ativo" data-avaliacao="2"></li>
                        <li class="star-icon ativo" data-avaliacao="3"></li>
                        <li class="star-icon ativo" data-avaliacao="4"></li>
                        <li class="star-icon ativo" data-avaliacao="5"></li>
                    </ul>
                </div>

            </div>

            <div class="buttonsCard">
                <button class="buttonLike" >Curtir</button>
                
                <button class="buttonLook" >Editar</button>
            </div>

        </div>
    </main>


    <script>

                var stars = document.querySelectorAll('.star-icon');
                  
                  document.addEventListener('click', function(e){
                    var classStar = e.target.classList;
                    if(!classStar.contains('ativo')){
                      stars.forEach(function(star){
                        star.classList.remove('ativo');
                      });
                      classStar.add('ativo');
                      console.log(e.target.getAttribute('data-avaliacao'));
                    }
                  });

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