<?php

class ValidadorController
extends Zend_Controller_Action {

  public function indexAction() {

  }

  public function emailAction() {
    $val = new Zend_Validate_EmailAddress();
    $valor = 'chiquitto@unipar.br';

    if ($val->isValid($valor)) {
      echo "OK";
    } else {
      $erros = $val->getMessages();
      print_r($erros);
    }

    exit;
  }

  public function tamanhostringAction() {
    $val = new Zend_Validate_StringLength(array(
      'min' => 11,
      'max' => 11
    ));
    $valor = '12345678901';

    if ($val->isValid($valor)) {
      echo "OK $valor";
    } else {
      $erros = $val->getMessages();
      print_r($erros);
    }

    exit;
  }

  public function cpfAction() {
    $numeroValidador = new Zend_Validate_Digits();
    $tamanhoValidador = new Zend_Validate_StringLength(array(
      'min' => 11,
      'max' => 11
    ));

    $valor = '12345678901';

    $val = new Zend_Validate();
    $val->addValidator($numeroValidador);
    $val->addValidator($tamanhoValidador);

    if ($val->isValid($valor)) {
      echo "OK $valor";
    } else {
      $erros = $val->getMessages();
      print_r($erros);
    }
    exit;
  }

}






//
