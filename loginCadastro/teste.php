<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location: login.php");
}
include "config.php";
$consulta=$conn->prepare('SELECT * FROM login WHERE id_log=:id');
$consulta->bindValue(":id", $_SESSION['login']);
$consulta->execute();
$row=$consulta->fetch();
?>
<h1>Nome de login teste -> <?php echo $row['nome_log']; ?></h1>
<a href="logout.php">Logout</a>