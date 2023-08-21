<?php
// контроллер страницы входа на сайт

require 'models/Users.php';
require 'core/SignIn.php';

//обработка формы входа
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  //если форма отправлена
  //проверяем данные
  list($errors, $input) = SignIn::validateForm();
  //если есть ошибки показываем форму
  if ($errors){
    require 'views/enter_view.php';
  }else{
  //если нет ошибок отправляем данные
    SignIn::processForm($input);
  }
} else {
  require 'views/enter_view.php';
}
