<?php
session_start();
session_destroy();
header("location: ../loginCadastro/login/index.php");
?>