<?php

include("C:\wamp\www\NovoBlog\Controller\controle.php");
$codigo = $_GET["cod"];
$objCPost = new CPost;
$objCPost->delPost($codigo);

?>