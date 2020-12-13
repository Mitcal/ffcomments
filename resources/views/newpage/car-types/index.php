<?php
$pagetitle='Car Types - Fuel Fixer Lrd';
$metadesc="I will be updating sub pages of this topic for more specific help and instructions on different car types. Your comments on different car types are very helpful to other unfortunate drivers, please keep them coming!!!! Audi; Audi&#8217;s have a fair share of misfuelings, they have some fantastic diesel engines and are becoming very popular, [&hellip;]";
$splashdesc="I will be updating sub pages of this topic for more specific help and instructions on different car types. Your comments on different car types are very helpful to other unfortunate drivers, please keep them coming!";
$pagekw='Car Types';
$main_h1="Car Types";
$main_h2="Misfuelling Different Car Types";
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
		<h3>Audi</h3>
		<p>Audi’s have a fair share of misfuelings, they have some fantastic diesel engines and are becoming very popular, here’s a short piece on how to fix the a misfuelled AUDI.</p>
		<p>A3, has the same under bench tank system as a golf, so if you have misfueled an audi, and not driven it, simply yank up the back seat bench – which unclips, and unscrew the tank cover, you can then directly access the tank and drain the fuel from the audi – without having to go to an audi main dealer for <a href="/">wrong fuel</a> removal</p>
		<p class="bold">For much more new information please go to the new Audi sub section <a href="https://www.fuelfixer.co.uk/car-types/petrol-in-a-diesel-audi/">here</a></p>
		</div>
	
	
	</section>
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