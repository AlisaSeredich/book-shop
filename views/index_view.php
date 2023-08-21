<?php
  require 'components/header.php';
?>

<section id="popular-books" class="bookshelf">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header align-center">
          <h2 class="section-title">Книги</h2>
        </div>

        <ul class="tabs">
          <li data-tab-target="#all-genre" class="active tab"><a href="#">Все</a></li>
          <li data-tab-target="#business" class="tab"><a href="books_category.php?category_id=1">Фантастика</a></li>
          <li data-tab-target="#technology" class="tab"><a href="books_category.php?category_id=2">Драма</a></li>
          <li data-tab-target="#romantic" class="tab"><a href="books_category.php?category_id=3">Реализм</a></li>
          <li data-tab-target="#adventure" class="tab"><a href="books_category.php?category_id=4">Сатира</a></li>
          <li data-tab-target="#fictional" class="tab"><a href="books_category.php?category_id=5">Историческая проза</a></li>
        </ul>

        <div class="tab-content">
          <div id="all-genre" data-tab-content class="active">
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
        </div>
      </div>
      <!--inner-tabs-->
    </div>
  </div>
</section>

<section id="quotation" class="align-center">
  <div class="inner-content">
    <h2 class="section-title divider">Цитата дня</h2>
    <blockquote data-aos="fade-up">
      <q
        >Знание только тогда знание, когда оно приобретено уси­лиями своей мысли, а не памятью.</q
      >
      <div class="author-name">Л.Н.Толстой</div>
    </blockquote>
  </div>
</section>

<section id="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="row">
          <div class="col-md-6">
            <div class="title-element">
              <h3 class="section-title divider">Подпишитесь на наши новости</h3>
            </div>
          </div>
          <div class="col-md-6">
            <div class="subscribe-content" data-aos="fade-up">
              <p>
                Наши письма приходят раз в неделю с актуальными акциями, новинками нашего магазина и свежеми статьями.
              </p>
              <form id="form" method ="">
                <input
                  type="text"
                  name="email"
                  placeholder="example@mail.ru"
                />
                <button class="btn-subscribe">
                  <span>Подписаться</span>
                  <i class="icon icon-send"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="latest-blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header align-center">
          <h2 class="section-title">Статьи</h2>
        </div>

        <div class="row">
          <?php foreach ($posts as $post):?>
            <div class="col-md-4">
              <article class="column" data-aos="fade-up">
                <figure>
                  <a href="<?=$post['image']?>" class="image-hvr-effect">
                    <img
                      src="<?=$post['image']?>"
                      alt="<?=$post['title']?>"
                      class="post-image"
                    />
                  </a>
                </figure>
                <div class="post-item">
                  <div class="meta-date"><?=$post['add_date']?></div>
                  <h3>
                    <a href="single-post.php?post_id=<?=$post['post_id']?>"><?=$post['title']?></a>
                  </h3>
                </div>
              </article>
            </div>
          <?php endforeach;?>
        </div>

        <div class="row">
          <div class="btn-wrap align-center">
            <a
              href="posts.php"
              class="btn btn-outline-accent btn-accent-arrow"
              tabindex="0"
              >Ещё<i class="icon icon-ns-arrow-right"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  require 'components/footer.php';
?>
