<?php

class UniparController
extends Zend_Controller_Action {

  public function indexAction() {

    //$params = $this->getAllParams();
    //print_r($params);

    $id = $this->getParam('id',0);
    $nome = $this->getParam('nome');

    $this->view->id = $id;
    $this->view->nome = $nome;

  }

}
