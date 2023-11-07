<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../assets/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=League+Gothic&family=Nunito:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/default.css">
    <title>Produtos do Futuro</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px
    }

    div.imgFooter {
        background-image: url("../assets/aboutUsPlaceholder.png");
        display: flex;
        background-repeat: no-repeat;
        background-size: contain;
        width: 100%;
        height: 1000px;
        margin: 0px;
    }

    h2 {
        text-align: center;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        margin: 0px;
        color: #07A804;
    }

    p {
        text-align: center;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 22px;
        margin-top: 5px;
        color: white;
    }

    div.box {
        width: 80%;
        background-color: white;
        border-radius: 20px;
        box-shadow: 3px 3px 3px 0px rgba(0, 0, 0, 1);
        margin: 10px auto;
        padding: 10px;
        height: 220px;
    }

    div.box * {
        color: black;
        text-align: center;

    }


    div.center {
        margin: 10px auto;
    }

    div.infoGrid {
        display: flex;
        flex-direction: column;
    }

    p {
        font-family: 'Bebas Neue', sans-serif;
    }

    h3 {
        font-size: 35px;
        font-family: 'Bebas Neue', sans-serif;
    }

    /* footer */
    footer {
        background-color: black;
    }

    footer * {
        color: white;
    }

    div.bgFooter {
        padding: 2%;
        width: 100%;
        height: fit-content;
        background-color: black;
        color: white;
        text-align: center;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    div.infoFooter {
        color: white;
        font-family: 'Montserrat';
        font-style: normal;
        display: flex;
        flex-direction: column;

    }

    div.infoFooter a {
        color: white;
        text-decoration: none;
    }

    div.logoFooter {
        display: flex;
        flex-direction: column;
    }

    div.social {
        color: white;
        display: flex;
        justify-content: space-around;

    }

    div.direitos {
        color: white;
        height: fit-content;
        background-color: #222222;
        text-align: center;
        padding: 0px 0px 1px 0px;
    }

    /* footer */
</style>

<body>
    <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon" />
    <label for="menu-icon"></label>
    <nav class="nav">
        <ul class="pt-5">
            <li><a href="../index.php">Home</a></li>
            <li><a href="./index.php">Sobre nós</a></li>
            <li><a href="../loginCadastro/login/index.php">Login</a></li>
            <li><a href="../loginCadastro/index.php">Cadastro</a></li>
        </ul>
    </nav>

    <div class="imgFooter"> </div>
    <!-- <h2>Equipe Produtos do Futuro</h2>
    <p>Guiando Estudantes em Sua Jornada Profissional</p> -->



    <div class="infoGrid">

        <div class="box">
            <h3>Introdução</h3>
            <p>Somos o "Produtos do Futuro," uma plataforma inovadora nascida do projeto integrador da UniOpet em
                Tecnologia em Análise e Desenvolvimento de Sistemas. Inicialmente criada pelo Grupo Um, nossa equipe se
                inspirou na experiência prévia de nosso líder, que já havia desenvolvido um projeto semelhante. Ao longo
                de nossa jornada, passamos por mudanças significativas.</p>
        </div>

        <div class="box">
            <h3>Nossa Missão</h3>
            <p>Entendemos as necessidades e aspirações dos estudantes universitários. Todos desejam adquirir experiência
                em suas áreas de estudo e também ganhar um dinheiro extra. Ao mesmo tempo, aqueles que buscam serviços
                desejam não apenas preços acessíveis, mas também a oportunidade de apoiar o desenvolvimento de futuros
                profissionais.
            </p>
        </div>




    </div>
    <div class="infoGrid">

        <div class="box">
            <h3>Evolução do Grupo</h3>
            <p>Inicialmente composto por Paulo Eduardo, Bryan Alexandre, José Augusto, João Trizotte, João Scarante e
                Bruno Eufrasio, nossa equipe sofreu mudanças significativas. Bryan, Bruno e João Scarante não fazem mais
                parte do grupo. No entanto, mantendo nosso compromisso com a missão, Antony Wippichy e João Gualberto se
                juntaram ao projeto, trazendo novas perspectivas e habilidades valiosas.</p>
        </div>

        <div class="box">
            <h3>Nosso Compromisso</h3>
            <p>Estamos dedicados a criar um ambiente onde a juventude possa prosperar, onde a inovação e o talento
                se unam para construir um futuro brilhante. Nosso site é mais do que uma plataforma de freelancers;
                é um lugar onde sonhos se transformam em carreiras e onde cada passo é uma oportunidade de
                aprendizado e crescimento.
            </p>
        </div>


    </div>
    <div class="box center">
        <h3>Junte-se a Nós</h3>
        <p>Convidamos você a fazer parte desta jornada conosco, seja como um estudante em busca de oportunidades ou
            uma empresa em busca de jovens talentos. Juntos, podemos construir um futuro onde a paixão e o talento
            se encontram, criando oportunidades sem limites.
        </p>
    </div>


    <footer>
        <div class="bgFooter">
            <div class="logoFooter">
                <div>
                    <img src="./../assets/logoWhite.png" alt="Logo" width="60px" height="60px">
                </div>
                <p>Siga-nos</p>
                <div class="social">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                        viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(5.12,5.12)">
                                <path
                                    d="M16,3c-7.17,0 -13,5.83 -13,13v18c0,7.17 5.83,13 13,13h18c7.17,0 13,-5.83 13,-13v-18c0,-7.17 -5.83,-13 -13,-13zM37,11c1.1,0 2,0.9 2,2c0,1.1 -0.9,2 -2,2c-1.1,0 -2,-0.9 -2,-2c0,-1.1 0.9,-2 2,-2zM25,14c6.07,0 11,4.93 11,11c0,6.07 -4.93,11 -11,11c-6.07,0 -11,-4.93 -11,-11c0,-6.07 4.93,-11 11,-11zM25,16c-4.96,0 -9,4.04 -9,9c0,4.96 4.04,9 9,9c4.96,0 9,-4.04 9,-9c0,-4.96 -4.04,-9 -9,-9z">
                                </path>
                            </g>
                        </g>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                        viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(5.12,5.12)">
                                <path
                                    d="M25,3c-12.15,0 -22,9.85 -22,22c0,11.03 8.125,20.137 18.712,21.728v-15.897h-5.443v-5.783h5.443v-3.848c0,-6.371 3.104,-9.168 8.399,-9.168c2.536,0 3.877,0.188 4.512,0.274v5.048h-3.612c-2.248,0 -3.033,2.131 -3.033,4.533v3.161h6.588l-0.894,5.783h-5.694v15.944c10.738,-1.457 19.022,-10.638 19.022,-21.775c0,-12.15 -9.85,-22 -22,-22z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                        viewBox="0,0,256,256">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(5.12,5.12)">
                                <path
                                    d="M44.89844,14.5c-0.39844,-2.19922 -2.29687,-3.80078 -4.5,-4.30078c-3.29687,-0.69922 -9.39844,-1.19922 -16,-1.19922c-6.59766,0 -12.79687,0.5 -16.09766,1.19922c-2.19922,0.5 -4.10156,2 -4.5,4.30078c-0.40234,2.5 -0.80078,6 -0.80078,10.5c0,4.5 0.39844,8 0.89844,10.5c0.40234,2.19922 2.30078,3.80078 4.5,4.30078c3.5,0.69922 9.5,1.19922 16.10156,1.19922c6.60156,0 12.60156,-0.5 16.10156,-1.19922c2.19922,-0.5 4.09766,-2 4.5,-4.30078c0.39844,-2.5 0.89844,-6.10156 1,-10.5c-0.20312,-4.5 -0.70312,-8 -1.20312,-10.5zM19,32v-14l12.19922,7z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="infoFooter">
                <p>WEBSITE</p>
                <a href="../index.php">HOME</a>
                <a href="../loginCadastro/login/index.php">Login</a>
                <a href="../loginCadastro/index.php">Cadastro</a>
            </div>
            <div class="infoFooter">
                <p>INSTITUCIONAL</p>
                <a href="./">Quem somos</a>
                <a href="./">Equipe</a>
                <a href="./">Contato</a>
            </div>

        </div>
        <div class="direitos">
            <p>© 2023 Projetos do Futuro. Todos os direitos reservados.</p>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>