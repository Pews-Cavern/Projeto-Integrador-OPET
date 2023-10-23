<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="../assets/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/default.css">
    <title>Produtos do Futuro</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px
    }

    div.chat {
        background-color: white;
        height: fit-content;
        width: fit-content;
        margin: auto;
        padding: 150px;
        top: 50%;
    }

    div.chat * {
        color: black
    }



div.message {
    display: flex;
    justify-content: space-around;
    border-color: black;
    border-radius: 1px;
    border-style: solid;
    text-align: center;
}
</style>


<body onload="loadPage()">

    <div class="chat">

        <div id="messages">

        </div>
        <form action="./index.php" method="post">

            <input type="text" name="content" required>
            <input type="text" name="author" required>
            <input class="btn btn-primary " type="submit" value="Enviar" name="gravar" id="button" required>

        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>


<?php
include "../util/config.php";
$stmt = $conn->prepare('SELECT * FROM `chat`');
$stmt->execute();
$data = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

if (isset($_POST['content']) && isset($_POST['author'])) {
    $content = $_POST['content'];
    $nome = $_POST['author'];
    $grava = $conn->prepare('INSERT INTO `chat` (`id_message`, `content`, `author`) VALUES (NULL, :pcontent, :pauthor)');
    $grava->bindValue(':pcontent', $content);
    $grava->bindValue(':pauthor', $nome);
    $grava->execute();
}
?>
<script>
    const arrs = <?php echo json_encode($data) ?>;

    function loadPage() {
        console.log(arrs);

        for(var i of arrs) {
            console.log(i["id_message"])
            let element = document.createElement('div');
            element.innerHTML = '<div class="message"><p>'+i["id_message"]+'</p><p>'+i["author"]+'</p><p>'+i["content"]+'</p></div>';
            document.getElementById("messages").appendChild(element);
        }
    }
</script>

</html>