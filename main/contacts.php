<?php 
include("header.php");



?>
	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Contacts</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.html">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Contacts</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- contacts -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-8">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title">Contact Form</h2>
						</div>
						<!-- end section title -->

						<div class="col-12">
							<form action="#" class="sign__form sign__form--full">
								<div class="row">
									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="firstname">Name</label>
											<input id="firstname" type="text" name="firstname" class="sign__input" placeholder="John">
										</div>
									</div>

									<div class="col-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="sign__input" placeholder="email@email.com">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="subject">Subject</label>
											<input id="subject" type="text" name="subject" class="sign__input" placeholder="Partnership">
										</div>
									</div>

									<div class="col-12">
										<div class="sign__group">
											<label class="sign__label" for="message">Message</label>
											<textarea id="message" name="message" class="sign__textarea" placeholder="Type your message..."></textarea>
										</div>
									</div>

									<div class="col-12">
										<button type="button" class="sign__btn sign__btn--small">Send</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-12 col-md-6 col-xl-4">
					<div class="row">
						<!-- contacts -->
						<div class="col-12">
							<h2 class="section__title section__title--mt">Get In Touch</h2>

							<p class="section__text">We are always happy to help and provide more information about our services. You can contact us through email, phone, or by filling out the form on our website. Thank you for considering us!</p>

							<ul class="contacts__list">
								<li><a href="tel:+18002345678">+1 800 234 56 78</a></li>
								<li><a href="mailto:support@hotflix.com">support@FILMIX.COM</a></li>
							</ul>

							<div class="contacts__social">
								<a href="#"><i class="ti ti-brand-facebook"></i></a>
								<a href="#"><i class="ti ti-brand-x"></i></a>
								<a href="https://www.instagram.com/volkov_des1gn/" target="_blank"><i class="ti ti-brand-instagram"></i></a>
								<a href="#"><i class="ti ti-brand-discord"></i></a>
								<a href="#"><i class="ti ti-brand-telegram"></i></a>
								<a href="#"><i class="ti ti-brand-tiktok"></i></a>
							</div>
						</div>
						<!-- end contacts -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end contacts -->

	<?php
	 include("footer.php");
	
	?>