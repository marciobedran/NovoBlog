<!DOCTYPE html>
<html> 
    <head>
        <meta charset = "utf-8">
        <title>Novo Blog</title> 
    </head> 
    <body> 
        <?php
        include("C:\wamp\www\NovoBlog\Controller\controle.php");
        $objPost = new CPost();
        $resultado = $objPost->getPost();
        while ($row = mysql_fetch_row($resultado)) {
            echo "<p align='center'>" . $row[1] . "</p>";
            echo "<p align='center'>" . $row[2] . "</p>";
            echo "<p align='center'>" . $row[3] . "</p>";
            echo "<p align='right'><a href='/NovoBlog/View/viewEditarPost.php?cod=$row[0]'>Editar</a>
            <a href='/NovoBlog/Controller/controleExcluirPost.php?cod=$row[0]'>Excluir</a><p><br>";
        }
        ?>
    </body> 
</html>