<?php

class SignUp
{
  private static function validateFullName($fullName){
    $regExp = "/^[а-яё]{2,}$/ui";

    if (strlen($fullName)===0) {
      return 'Введите имя';
    } else if(!preg_match($regExp, $fullName)){
      return 'Только русские буквы';
    }
  }

  public static function validateEmail($email){
    $regExp = "/^.+@.+\..+$/ui";

    if(empty($email)){
      return 'Введите e-mail';
    } elseif (!preg_match($regExp, $email)){
      return 'e-mail введен не верно';
    }

    //проверка на уникальность в бд
    $rowCount = Users::checkEmailUnique($email);
    if($rowCount){
      return 'Пользователь с таким e-mail уже существует';
    }
  }

  public static function validatePassword($password){
    $regExp = "/^.{6,}$/";

    if(empty($password)){
      return 'Введите пароль';
    }elseif(!preg_match($regExp, $password)){
      return 'Пароль должен быть не менее 6 символов';
    }
  }

  public static function validateAvatar($avatar){
    $allowedSize = 2097152;
    $allowedExtension = ['image/png', 'image/jpeg'];

    if($avatar['size']===0){
      return 'Выберите аватар';
    } elseif($avatar['size']>$allowedSize){
      return 'Размер фото не более 2 мегабайт';
    } elseif(!in_array($avatar['type'], $allowedExtension)){
      return 'Фото формата png, jpeg';
    }
  }

  public static function validateForm(){
    $errors = [];
    $input = [];

    //экранируем данные и обрезаем
    $input['full_name'] = htmlspecialchars(trim($_POST['full_name']));
    $input['email'] = htmlspecialchars(trim($_POST['email']));
    $input['password'] = htmlspecialchars(trim($_POST['password']));
    $input['avatar'] = $_FILES['avatar'];

    $fullNameError = self::validateFullName($input['full_name']);
    if($fullNameError){
      $errors['full_name'] = $fullNameError;
    }

    $emailError = self::validateEmail($input['email']);
    if($emailError){
      $errors['email'] = $emailError;
    }

    $passwordError = self::validatePassword($input['password']);
    if($passwordError){
      $errors['password'] = $passwordError;
    }

    $avatarError = self::validateAvatar($input['avatar']);
    if($avatarError){
      $errors['avatar'] = $avatarError;
    }


    return [$errors, $input];
  }

  //метод для сохранения аватарки при успешной провепке
  private static function saveAvatar($avatar){
    $avatarPath = 'images/users/'.time().'_'.$avatar['name'];

    move_uploaded_file($avatar['tmp_name'], $avatarPath);

    return $avatarPath;
  }

  public static function processForm($input){
    //шифрование пароля
    $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);

    $input['avatar'] = self::saveAvatar($input['avatar']);

    $input['user_id'] = Users::addNewUser($input);

    session_start();
    $_SESSION['user_id'] = $input['user_id'];
    $_SESSION['valid_user'] = $input['email'];
    $_SESSION['full_name'] = $input['full_name'];

    header('Location: /');
    die();

  }

}