<?php
$pagetitle='Feedback  - Fuel Fixer Lrd';
$metadesc="Striving to continue to be the UK&#039;s best independent fuel drain company through its unrivaled service and quality, Fuel Fixer welcomes your feedback.";
$splashdesc="Striving to continue to be the UK&#039;s best independent fuel drain company through its unrivaled service and quality, Fuel Fixer welcomes your feedback.";
$pagekw='Feedback, Reviews';
$main_h1="Feedback and Reviews";
$main_h2="Let us know how we did.";
$featuredimage="{{ asset('uploads/hero.jpg') }}";
$datepublished="2020-11-20T00:18:52+00:00";
$datemidified=date("Y-m-d");
$uri = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$tel="0333 366 1081";
$tel1="0333 366 1081";
?>
@include('newpage/header')
@include('newpage/hcode')
@include('newpage/deskhead')
@include('newpage/mobhead')
<div class="spacer" id="advice"></div>
<div class="container">
<div class="row">
	<div class="col-md-8">
	<section class="ff-content-section">
		<div class="container">
		<p>I’d love to hear from you, especially if you have had a fuel drain done by us –  please feel free to leave a comment with your experience. I would especially like to hear from people who have had a fuel drain in the past and the “long term view”.</p>
		<img  src="{{ asset('uploads/step-4.jpg') }}" width="100%"/>
		</div>
	</section>
	<hr>
	</div>
	<div class="col-md-4">
@include('newpage/sidebar')
	</div>
	</div>
	</div>


<div class="spacer" id="contact"></div>
	<section class="notes-section">
		<div class="container text-center">
		<h2>Contact Us</h2>
		<p><strong>Contact us by Email <a href="mailto:enquiries@fuelfixeruk.co.uk">HERE</a>, or by calling <?php echo $tel1; ?></strong></p>
		<br>
		<a id="NewFooterCall" href="tel:<?php echo $tel; ?>" class="btn btn-lg btn-block btn-orange">
				<h4>Call Free</h4>
				<span><?php echo $tel1; ?></span>
		</a>
	</div><!-- .container --> 
	</section>
	<div class="spacer"></div>
@include('newpage/footer')
@include('newpage/fcode')