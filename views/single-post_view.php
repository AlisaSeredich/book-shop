<?php
  require 'components/header.php';
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
				<h2 class="page-title"><?=$post['title']?></h2>
				<div class="breadcrumbs">
					<span class="item"><a href="index.html">На главную /</a></span>
					<span class="item"><a href="posts.php">Статьи</a></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="padding-large">
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<div class="post-content">
					<p><?=$post['body']?></p>
					
				</div><!--post-content-->

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				
				<section class="comments-wrap mb-4">
					<h3>Комментарии</h3>
					<div class="comment-list mt-4">
            <?php foreach($comments as $comment):?>
						<article class="flex-container d-flex mb-3">
							<img src="<?=$comment['avatar']?>" alt="<?=$comment['full_name']?>" class="commentorImg">
							<div class="author-post">
								<div class="comment-meta d-flex">
									<h4><?=$comment['full_name']?></h4>
								</div><!--meta-tags-->
								<p><?=$comment['text']?></p>
							</div>
						</article><!--flex-container-->
						<?php endforeach;?>
					</div><!--comment-list-->

				</section>
        <?php if(isset($_SESSION['valid_user'])):?>
				<section class="comment-respond  mb-5">			
					<h3>Оставьте комментарий</h3>
					<form method="POST" class="form-group mt-3">
						
						<div class="row">
							<div class="col-md-8">
								<textarea class="u-full-width" id="comment" class="form-control mb-4" name="comment" placeholder="Оставьте комментарий" rows="150"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
                <input type="hidden" name="post_id" value="<?=$id?>">
								<input class="btn btn-rounded btn-large btn-full" type="submit" value="Отправить">
							</div>
						</div>

					</form>
				</section>
        <?php endif;?>
			</div>
		</div>

	</div>
</section>

<?php
  require 'components/footer.php';
?>