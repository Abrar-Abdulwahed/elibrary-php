<?php
namespace elibrary\app\models;

class Validator {
    public $value;
    public $field;
    public $errors=[];

    public $patterns = array(
        'email' => '[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+[.]+[a-z-A-Z]'
    );
    
    public function setFieldName($field){ 
        $this->purify();  
        $this->field = $field;
        echo '$this->field'.$this->field;
        return $this;
    }

    public function setVal($value){ 
        $this->purify();  
        $this->value = $value;
        echo '$this->value'.$this->value;
        return $this;
    }

    public function required(){    
        if(($this->value == '' || $this->value == null)){
            $this->errors[$this->field] = $this->field.' is required.';
        }           
        return $this;
    }
    
    
    public function minLength($length){
        if(!isset($this->errors[$this->field]) && strlen($this->value) < $length){
            $this->errors['minLength'] = $this->field.' must be at least '.$length.' length';
        }
        return $this;  
    }
    
    public function maxLength($length){
        if(!isset($this->errors[$this->field]) && strlen($this->value) > $length){
            $this->errors[] = $this->field.' must be at most '.$length.' length';
        }
        return $this;
    }

    public function is_email(){
        if(!isset($this->errors[$this->field]) && !filter_var($this->value, FILTER_VALIDATE_EMAIL))
            $this->errors['invalid_email'] = ''.$this->value.' is invalid email-format';
        return $this;
    }
    
    public function isSuccess(){
        if(empty($this->errors)) return true;
    }
    
    
    public function getErrors(){
        return $this->errors;
    }
    
    public function displayErrors(){
        
        $html = '<ul>';
            foreach($this->getErrors() as $error){
                $html .= '<li>'.$error.'</li>';
            }
        $html .= '</ul>';
        
        return $html;
        
    }

    public function purify(){
        $this->value = trim($this->value);
        $this->value = stripslashes($this->value);
        $this->value = htmlspecialchars($this->value, ENT_QUOTES, 'UTF-8');
    }
    
}