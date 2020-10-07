<?php

class ValidationException extends AppException{

   private $errors=[];
   public function __construct($errors=[],$msg='Erros validaçao', $code=0, $previus=null){
       $msg="Erros de validação";
       parent::__construct($msg,$code, $previus);
       $this->errors= $errors;
   }

   public function getErrors(){
       return $this->errors;
   }

   public function get($att){
    return $this->errors[$att];
}
}