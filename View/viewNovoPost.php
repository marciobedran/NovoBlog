<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Novo Post</title>
    </head>
    <body>
        <?php
        include("C:\wamp\www\NovoBlog\Controller\controle.php");
        ?>
        <h1 align="center">Novo Post</h1>
        <form name="blog" align="center" action="" method="post">
            Titulo do Post:<br>
            <textarea name="titulo" cols=50></textarea>
            <br>
            Digite o texto do Post aqui:<br>
            <textarea name="texto" rows=10 cols=100></textarea><br>
            <input type="submit" name="enviar" value="Enviar"><br>
            <?php
            $objCPost = new CPost();
            if (isset($_POST['enviar'])) {
                $titulo = $_POST['titulo'];
                $texto = $_POST['texto'];
                $data = date("Y-m-d H:i:s");
                $objCPost->setTitulo($titulo);
                $objCPost->setTexto($texto);
                $objCPost->setData($data);
                $resultado = $objCPost->insertPost($objCPost);
            }
            ?>
    </body>
</html>