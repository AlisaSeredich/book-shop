<?php

require 'models/Users.php';
require 'core/SignUp.php';

//обработка формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  // DBConnect::d($_POST);
  //если форма отправлена
  //проверяем данные
  list($errors, $input) = SignUp::validateForm();
  //если есть ошибки показываем форму
  if ($errors){
    require 'views/registration_view.php';
  }else{
  //если нет ошибок отправляем данные
    SignUp::processForm($input);
  }
} else {
  require 'views/registration_view.php';
}



