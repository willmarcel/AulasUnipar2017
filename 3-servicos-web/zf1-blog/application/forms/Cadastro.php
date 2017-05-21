<?php

class Application_Form_Cadastro
extends Zend_Form {
    
    public function init() {
        parent::init();
        
        // Email
        $email = new Zend_Form_Element_Text('email', array(
            'label' => 'E-mail',
            'required' => true
        ));
        $email->addValidator(new Zend_Validate_EmailAddress());
        $email->addFilter(new Zend_Filter_StringToLower());
        $this->addElement($email);
        
        // Senha numerica
        $senha = new Zend_Form_Element_Password('senha', array(
            'label' => 'Senha'
        ));
        $this->addElement($senha);
        
        // Botao
        $botao = new Zend_Form_Element_Submit('botao', array(
            'label' => 'Salvar'
        ));
        $this->addElement($botao);
    }
    
}

