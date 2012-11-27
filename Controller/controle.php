<?php

include_once('C:\wamp\www\NovoBlog\Model\post.php');

class CPost extends Post {

    public function getPostCodigo($codigo) {

        $objetoPost = new MPost();
        return $objetoPost->getPostCodigo($codigo);
    }

    public function getPost(Post $objPost) {

        $objetoPost = new MPost();
        return $objetoPost->getPost($objPost);
    }

    public function insertPost(Post $objPost) {

        $objetoPost = new MPost();
        return $objetoPost->insertPost($objPost);
    }

    public function editPost(Post $objPost) {

        $objetoPost = new MPost();
        return $objetoPost->editPost($objPost);
    }

    public function delPost($codigo) {

        $objetoPost = new MPost();
        return $objetoPost->delPost($codigo);
    }

}

?>
