<?php
// $conn = new PDO('mysql:host=localhost;dbname=u668533246_piratecoder13', 'u668533246_piratecoder13', 'cA8/V=2ch0ue');
// ^ HOST
// v LOCAL
$conn = new PDO('mysql:host=localhost;dbname=produtos_do_futuro', 'root', '');





$GLOBALS['conn'] = $conn;
function pdo()
{
    // return new PDO('mysql:host=localhost;dbname=u668533246_piratecoder13', 'u668533246_piratecoder13', 'cA8/V=2ch0ue');
    return $GLOBALS['conn'];
}


function isAlredySaved($email)
{
    $stmt = pdo()->prepare("SELECT * FROM `login` WHERE email_log=:pemail");
    $stmt->bindValue(":pemail", $email);
    $stmt->execute();
    if ($stmt->rowCount()) {
        return true;
    } else {
        return false;
    }
}
?>