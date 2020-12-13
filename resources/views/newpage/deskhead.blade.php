	<header class="ff-header" id="site-header">
		<div class="ff-header__inner">
			<div class="ff-header__container">
				<div class="ff-header__left">
					<a href="#" class="ff-header__logo"><img src="{{ asset('images/fuel-fixer.png') }}" alt=""></a>
				</div>
				<div class="ff-header__right">
					<div class="ff-header__open-now"><a href="#">OPEN NOW</a></div>
					<div class="ff-header__review"><a href="https://www.reviews.co.uk/company-reviews/store/fuelfixer-co-uk" target="_blank"><img src="{{ asset('images/review-widget-white.png') }}" alt=""></a></div>
					<div class="cs-button hidden-sm hidden-xs">
					<a href="tel:<?php echo $tel; ?>" onclick="gtag('event', 'Click', {'event_category': 'Call','event_label': ''});">
						<div class="cs-button-pic"><img src="{{ asset('images/cs.jpg') }}" alt="Call"></div>
						<div class="cs-button-num"><?php echo $tel1; ?></div>
						<div class="cs-button-text">OPEN NOW</div>
					</a>
					</div>
					<ul class="ff-header__nav">
						<li class="is-active"><a href="#">Home</a></li>
						<li><a href="#FAQs">Wrong Fuel FAQs</a></li>
						<li><a href="#commercial">Commercial</a></li>
						<li>
							<a href="#advice">Fuel Advice</a>
						</li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div><!-- .ff-header__container --> 
		</div><!-- .ff-header__inner --> 
	</header><!-- .ff-header --> 
	<section class="ff-hero" style="">
		<div class="container">
		<div class="ff-hero__box-1">
			<a href="tel:<?php echo $tel; ?>">
				<h4>Call Free</h4>
				<span><?php echo $tel1; ?></span>
			</a>
		</div><!-- .ff-hero__box-1 --> 
		<div class="ff-hero__box-2">
			<h2><?php echo $main_h1; ?></h2>
			<h3><?php echo $main_h2; ?></h3>
			<div><?php echo $splashdesc; ?></div>
		</div><!-- .ff-hero__box-2 --> 
		</div><!-- .container --> 
	</section><!-- .ff-hero --> 