<?php

class SignIn
{
  //проверка email
  private static function validateEmail($email){

    if(empty($email)){
      return 'Введите email';
    }
    
    
    $rowCount = Users::checkEmailUnique($email);
    if($rowCount===0){
      return 'Указанный email не зарегистрирован';
    }
  }

  //проверка пароля
  private static function validatePassword($password, $email){

    if(empty($password)){
      return 'Введите пароль';
    }

    //получаем текущий пароль по бд
    $passwordDB = Users::getPasswordByEmail($email);

    if(!password_verify($password, $passwordDB)){
      return 'Пароль неверный';
    }

  }


  //проверка данных для входа
  public static function validateForm(){
    $errors = [];
    $input = [];

    $input['email'] = htmlspecialchars(trim($_POST['email']));
    $input['password'] = htmlspecialchars(trim($_POST['password']));

    $emailError = self::validateEmail($input['email']);    
    if($emailError){
      $errors['email'] = $emailError;
    }else{

      $passwordError = self::validatePassword($input['password'], $input['email']);
      if($passwordError){
        $errors['password'] = $passwordError;
      }
    }

    

    return [$errors, $input];
  }

  public static function processForm($input){

    $userInfo = Users::getUserInfoSession($input['email']);

    session_start();
    $_SESSION['valid_user'] = $input['email'];
    $_SESSION['user_id'] = $userInfo['id'];
    $_SESSION['full_name'] = $userInfo['full_name'];

    header('Location:/');
    die();
  }
}