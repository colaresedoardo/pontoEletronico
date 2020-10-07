<?php
loadModel('User');
class Login extends Model{
    public function validate(){
        $errors=[];

        if(!$this->email){
            $errors['email']='Email é obrigatório';
        
        }
        if(!$this->password){
            $errors['password']='senha obrigatória';
        }
        if(count($errors) > 0){
            throw new ValidationException($errors);
        }
    }



    public function checkLogin(){
        $this->validate();
        $user= User::getOne(['email'=> $this->email]);
        if($user){
            if($user->end_date){
                throw new AppException('Usuario está desligado');
            }
            // compara a senha digitada pelo usuário e vinda do bd
            if(password_verify($this->password,$user->password)){
                return $user;
            }
        }

        throw new AppException('Usuario/Senha inválidos');
    }
}
