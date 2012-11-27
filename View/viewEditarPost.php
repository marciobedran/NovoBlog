<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Editar Post</title>
    </head>
    <body>
        <?php
        include("C:\wamp\www\NovoBlog\Controller\controle.php");
        $codi = $_GET["cod"];
        $objCPost = new CPost();
        $resultado = mysql_fetch_array($objCPost->getPostCodigo($codi));
        $titulo = $resultado[1];
        $texto = $resultado[2];
        $data = $resultado[3];
        ?>
        <form name="edit" align="center" action="" method="post">
            Titulo do Post:<br>
            <textarea name="titulo" cols=50><?php echo $titulo ?></textarea>
            <br>
            Texto do Post:<br>
            <textarea name="texto" rows=10 cols=100><?php echo $texto ?></textarea><br>
            <input type="hidden" name="codigo" value=<?php echo $codi ?>>
            <input type="submit" name="editar" value="Editar">
            <?php
            $objCPost = new CPost();
            if (isset($_POST['editar'])) {
                $titulo = $_POST['titulo'];
                $texto = $_POST['texto'];
                $objCPost->setCodigo($codi);
                $objCPost->setTitulo($titulo);
                $objCPost->setTexto($texto);
                $objCPost->setData($data);
                $resultado = $objCPost->editPost($objCPost);
            }
            ?>
            </body>
            </html>