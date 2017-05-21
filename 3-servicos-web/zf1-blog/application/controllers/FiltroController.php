<?php

class FiltroController
extends Zend_Controller_Action {

  public function indexAction() {

  }

  public function alnumAction() {

    $filtro = new Zend_Filter_Alnum();
    $valor = '@unip@r#?';

    echo $filtro->filter($valor);

    exit;

  }

  public function htmlAction() {
    $filtro = new Zend_Filter_HtmlEntities();

    //$valor = '<img src="https://pbs.twimg.com/profile_images/1196566139/CRV_-_Urso_comptd.jpg">';
    $valor = '<script>window.location="http://google.com";</script>';

    echo $filtro->filter($valor);

    exit;
  }

  public function striptagsAction() {

    $filtro = new Zend_Filter_StripTags();
    $valor = '<script>window.location="http://google.com";</script>';

    echo $filtro->filter($valor);

    exit;

  }

  public function nullAction() {

    $filtro = new Zend_Filter_Null(array(
      Zend_Filter_Null::INTEGER
    ));

    $valor = '0';

    var_dump($filtro->filter($valor));

    exit;

  }

  public function chainAction() {

    $filtro = new Zend_Filter();

    $filtro->addFilter(new Zend_Filter_Alpha());
    $filtro->addFilter(new Zend_Filter_StringToUpper());

    $valor = 'chiquitto@prof.unipar.br';

    echo $filtro->filter($valor);

    exit;

  }

  public function compressAction() {

    $valor = 'All options can be set at instantiation or by using a related method. For example, the related methods for Blocksize are getBlocksize() and setBlocksize(). You can also use the setOptions() method which accepts all options as array.';

    $filtro = new Zend_Filter_Compress('Bz2');

    $valorFiltrado = $filtro->filter($valor);

    echo strlen($valorFiltrado);

    exit;

  }

  public function compressfileAction() {

    $valor = 'D:\\Documentos\\Downloads\\algaworks-ebook-jpa-e-hibernate-1a-edicao-20150731.pdf';

    $filtro = new Zend_Filter_Compress(array(
      'adapter' => 'Zip',
      'options' => array(
        'archive' => 'D:\\chiquitto.zip'
      )
    ));

    $valorFiltrado = $filtro->filter($valor);

    var_dump($valorFiltrado);

    exit;

  }

  public function decompressfileAction() {

    $valor = 'D:\\chiquitto.zip';

    $filtro = new Zend_Filter_Decompress(array(
      'adapter' => 'Zip',
      'options' => array(
        'target' => 'D:\\'
      )
    ));

    $valorFiltrado = $filtro->filter($valor);

    var_dump($valorFiltrado);

    exit;

  }

}







//
