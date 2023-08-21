<?php
require 'components/header.php';
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title">Контакты</h1>
				<div class="breadcrumbs">
					<span class="item"><a href="index.html">На главную /</a></span>
					<span class="item">Контакты</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact-information padding-large mt-3">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-0 mb-3">
				
				<h2>Связаться с нами</h2>

				<div class="contact-detail d-flex flex-wrap mt-4">
					<div class="detail mr-6 mb-4">
						<p>Всегда рады помочь Вам.</p>
						<ul class="list-unstyled list-icon">
							<li><i class="icon icon-phone"></i>+1650-243-0000</li>
							<li><i class="icon icon-envelope-o"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
							<li><i class="icon icon-location2"></i>North Melbourne VIC 3051, Australia</li>
						</ul>
					</div><!--detail-->
					
				</div><!--detail-->

			</div><!--contact-detail-->
<!--col-md-6-->

			<div class="col-md-6 p-0">
				
				<div class="contact-information">
					<h2>Отправить сообщение</h2>
					<form name="contactform" action="contact.php" method="POST" class="contact-form d-flex flex-wrap mt-4">
						<div class="row">
		          <div class="col-md-6">
								<input type="text" minlength="2" name="name" placeholder="Имя" class="u-full-width" required>
							</div>
							<div class="col-md-6">
								<input type="email" name="email" placeholder="E-mail" class="u-full-width" required>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">

								<textarea class="u-full-width" name="message" placeholder="Ваше сообщение" style="height: 150px;" required></textarea>

								
								<button type="submit" name="submit" class="btn btn-full btn-rounded">Отправить</button>
							</div>
						</div>
					</form>

				</div><!--contact-information-->

			</div><!--col-md-6-->

		</div>
	</div>
</section>

<section class="google-map">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</section>





<?php
require 'components/footer.php';
?>