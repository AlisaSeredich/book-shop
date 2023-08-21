<?php

?>
<?php

require 'components/header.php';
?>

<div class="py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Вход</h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 mb-5">

      <form method="POST" enctype="multipart/form-data" class="p-5 bg-white">

        <div class="row form-group">
          <div class="col-md-6">
            <label class="text-black">Email</label> 
            <input type="text" name="email" class="form-control" placeholder="example@mail.ru" value="<?=$input['email'] ?? ''?>">
            <span class="input_error"><?=$errors['email'] ?? ''?></span>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-6">
            <label class="text-black">Пароль</label> 
            <input type="password" name="password" class="form-control" placeholder="Минимум 6 символов" value="<?=$input['password'] ?? ''?>">
            <span class="input_error"><?=$errors['password'] ?? ''?></span>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" value="Войти" class="btn btn-primary py-2 px-4 text-white">
          </div>
        </div>
      </form>
    </div>  
  </div>
</div>



<?php
require 'components/footer.php';
?>