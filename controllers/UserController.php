<?php

include_once ROOT.'/models/User.php';

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = 'Имя короткое';
            }
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильній Емайл';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = "Пароль короткий";
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = "Такой Емайл существует";
            }
            
            if ($errors == false){
                $result = User::register($name, $email, $password);
            }
            
        }
        
        require_once(ROOT.'/views/user/register.php');
        
        return true;
    }
    
    public function actionLogin()
    {
        $email = '';
        $password = '';
        
        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильній Емайл';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = "Пароль короткий";
            }
            
            //Проверка ползователя на существование
            $userId = User::checkUserData($email, $password);
            
            if(userId == false) {
                $errors[] = 'Неправильніе данніе для входа';
            } else {
                User::auth($userId);
                
                header("Location: /cabinet/");
            }
        }
        
        require_once (ROOT . '/views/user/login.php');
        
        return true;
    }
}