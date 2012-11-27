<?php

include_once('C:\wamp\www\NovoBlog\sql.php');

abstract class Post {

    private $_codigo;
    private $_titulo;
    private $_texto;
    private $_data;

    // Código
    public function setCodigo($codigo) {

        $this->_codigo = $codigo;
    }

    public function getCodigo() {

        return $this->_codigo;
    }

    // Titulo
    public function getTitulo() {

        return $this->_titulo;
    }

    public function setTitulo($titulo) {

        $this->_titulo = $titulo;
    }

    // Texto
    public function getTexto() {

        return $this->_texto;
    }

    public function setTexto($texto) {

        $this->_texto = $texto;
    }

    // Data
    public function getData() {

        return $this->_data;
    }

    public function setData($data) {

        $this->_data = $data;
    }

}

////Interface////
interface interfacePost {

    public function getPostCodigo($codigo);

    public function getPost(Post $objPost);

    public function insertPost(Post $objPost);

    public function editPost(Post $objPost);

    public function delPost($codigo);
}

////Modelo////
class MPost implements interfacePost {

    public function getPostCodigo($codigo) {
        $result = mysql_query("SELECT * FROM posts WHERE codigo=" . $codigo);
        return $result;
    }

    public function getPost(Post $objPost) {
        $result = mysql_query("SELECT * FROM posts");
        return $result;
    }

    public function insertPost(Post $objPost) {
        $sql = "INSERT INTO posts (titulo, texto, data) VALUES ('" . $objPost->getTitulo() . "','" . $objPost->getTexto() . "','" . $objPost->getData() . "')";
        $result = mysql_query($sql);
        if (!$result) {
            die('Erro na inclusão<br>' . mysql_error());
        } else {
            print "Registro inserido com sucesso!";
        }
    }

    public function editPost(Post $objPost) {
        $sql = "UPDATE posts SET titulo = '" . $objPost->getTitulo() ."', texto= '" . $objPost->getTexto() . "' WHERE
        codigo=" . $objPost->getCodigo();
        $result = mysql_query($sql);
        if (!$result) {
            die('Erro na atualização<br>' . mysql_error());
        } else {
            print "Registro atualizado com sucesso!";
        }
    }

    public function delPost($codigo) {
        $sql = "DELETE FROM posts WHERE codigo = " . $codigo . ";";
        $result = mysql_query($sql);
        if (!$result) {
            die('Erro na exclusão<br>' . mysql_error());
        } else {
            print "Registro excluído com sucesso!";
        }
    }

}

?>