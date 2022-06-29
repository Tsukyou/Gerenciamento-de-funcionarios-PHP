<?php
    require_once("config/process.php");
    require_once("config/url.php");
    require_once("config/conn.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!--BootStrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.css" integrity="sha512-F5fn88UDJWd0T1GwpnIpbuFuSxCgXNnJhIihkiWeqYUyLt3oPUaYzL774VjL7eGj8ktZCZQS//txAxgokiz1Lw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <title>Gerenciamento de funcionários</title>
</head>
<body>
  <header>
            <a id="logo" href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>img/teamwork-svgrepo-com.svg" alt="Logo teamwork do site">
            </a>
        <nav>
            <ul id="redirect-list">
                <li><a href="<?= $BASE_URL ?>index.php">Home</a></li>
                <li><a href="<?= $BASE_URL ?>addCollaborator.php">Adicionar colaborador</a></li>
            </ul>
        </nav>
  </header>
 
 
