<?php

class FormularioController
extends Zend_Controller_Action {
    
    public function indexAction() {
        $form = new Application_Form_Cadastro();
        
        if ($this->getRequest()->isPost()) {
            $data = $this->getAllParams();
            
            if ($form->isValid($data)) {
                $dadosValidos = $form->getValues();
                
                print_r($dadosValidos);
                exit;
            }
        }
        
        $this->view->formCadastro = $form;
    }
    
}