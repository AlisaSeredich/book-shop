<?php
require 'components/header.php';
?>

<section class="bookshelf">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header align-center">
          <h2 class="section-title"><?=$title ?? 'Книги'?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach($books as $book):?>
        <div class="col-md-3">
          <a href="single-book.php?id=<?=$book['book_id']?>">
            <figure class="product-style">
              <img
                src="<?=$book['image']?>"
                alt="<?=$book['title']?>"
                class="product-item"
              />
              <figcaption>
                <h3><?=$book['title']?></h3>
                <p><?=$book['name']?></p>
                <div class="item-price"><?=$book['price']?>руб</div>
              </figcaption>
              <button
                type="button"
                class="add-to-cart"
                data-product-tile="add-to-cart"
              >
                В корзину
              </button>
            </figure>
          </a>
        </div>
      <?php endforeach;?>
    </div>
  </div>
</section>




<?php
require 'components/footer.php';
?>