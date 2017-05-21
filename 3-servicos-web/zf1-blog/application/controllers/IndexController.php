<?php

class IndexController extends Blog_Controller_Action {

    public function indexAction() {
        $posts = array(
            [
                'idpost'  => '1',
                'categoria' => 'Brasil',
                'titulo' => 'Nossos ídolos joelma e wesley se uniram e formaram o megazord JOESLEY'
            ],
            [
                'idpost'  => '2',
                'categoria' => 'Brasil',
                'titulo' => 'Silvio Santos: "depois de Huck, vou me candidatar"'
            ]
        );
        $this->view->posts = $posts;
    }

    public function categoriasAction() {
        
    }

    public function postAction() {
        
    }

}
