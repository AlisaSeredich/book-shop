<?php
  require 'components/header.php';
?>

<section class="hero-section jarallax">
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
				<h1 class="page-title">Статьи</h1>
				<div class="breadcrumbs">
					<span class="item"><a href="index.html">На главную/</a></span>
					<span class="item">Статьи</span>
				</div>
			</div>
		</div>
	</div>

</section>

<section id="latest-blog" class="scrollspy-section padding-large">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				
				<!-- post grid -->
				<div class="post-grid">
					<div class="row">
						<?php foreach($posts as $post):?>
              <div class="col-md-4">
                <article class="post-item">
                  <figure>
                    <a href="<?=$post['image']?>" class="image-hvr-effect">
                      <img src="<?=$post['image']?>" alt="<?=$post['title']?>" class="post-image">			
                    </a>
                  </figure>

                  <div class="post-content">	
                    <div class="meta-date"><?=$post['add_date']?></div>			
                      <h3 class="post-title"><a href="single-post.php?post_id=<?=$post['post_id']?>"><?=$post['title']?></a></h3>
                      <p><?=mb_substr($post['body'], 0, 150)?>...</p>
                  </div>
                </article>
              </div>
            <?php endforeach;?>
          </div>
				</div>
				<!-- / post grid -->

			</div>
		</div>
	</div>
</section>


<?php
  require 'components/footer.php';
  ?>