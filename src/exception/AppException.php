<?php

class AppException extends Exception{
   public function __construct($msg,$code=0, $previus=null){
       parent::__construct($msg,$code, $previus);
   }
}