<?php
require 'components/header.php';
?>

<section class="bg-sand padding-large">
	<div class="container">
		<div class="row">
      <div class="col-md-6">
				<a href="<?=$book['image']?>" class="product-image"><img src="<?=$book['image']?>" alt="<?=$book['title']?>"></a>
			</div>

			<div class="col-md-6 pl-5">
				<div class="product-detail">
					<h1><?=$book['title']?></h1>
          <p><?=$book['name']?></p>
					<p><?=$book['category_name']?></p>
					<p><?=$book['description']?></p>
          <div class="item-price"><?=$book['price']?>руб</div>

					<button type="submit" name="add-to-cart" value="<?=$book['book_id']?>" class="button">В корзину</button>
					
				</div>
			</div>

		</div>
	</div>
</section>

<?php
require 'components/footer.php';
?>