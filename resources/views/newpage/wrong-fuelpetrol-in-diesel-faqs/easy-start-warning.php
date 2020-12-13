<?php
$pagetitle='Easy Start - Warning - Fuel Fixer Lrd';
$metadesc="Easystart is a spray that starts cars as the name suggests, often brake fluid cleaner is used in its place. It&#8217;s a handy thing to have, and if your the type that keeps a set of jump leads and some spanners in your car, the chances are you will already be familier with it. Cars [&hellip;]";
$splashdesc="Easystart is a spray that starts cars as the name suggests, often brake fluid cleaner is used in its place.";
$pagekw='Easy Start – Warning';
$main_h1="Easy Start – Warning";
$main_h2="Only Use it as Intended";
$featuredimage="{{ asset('uploads/easystart.jpg') }}";
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
		<h3>Easy Start – Warning</h3>
		<p>Easystart is a spray that starts cars as the name suggests, often brake fluid cleaner is used in its place.</p>
		<p>It’s a handy thing to have, and if your the type that keeps a set of jump leads and some spanners in your car, the chances are you will already be familier with it.</p>
		<p>Cars ALWAYS start with easy start, and unless there is a fuel supply problem, or no spark, they will continue to run.</p>
		<p>As with all aerosols it has a   boring safety warning on the back, personally I normally read these warnings after a child in my care has ingested large amounts of whatever it is, – but on this occasion I would urge you to break with convention and read the tin before you use it, it works a treat, and does what its supposed to  (but then so does TNT.)</p>
		<p>I have seen a VW golfs airbox blown to bits when easystart was misused, (too much),  if you do use it it is perfectly safe,  as long as you follow the instructions to the letter, a 1 second spray, really is a one second spray, no your car is not special and no, it does not need a double dose.</p>
		<p>Easystart is sprayed into the airbox (as close to the engine as you can get)  and thus inhaled into the engine directly, if you use to much it flashes back and ignites the fume in the airbox and produces a sound that can only be described as “gunshot” followed by flying pieces of plastic airbox, I have seen it twice and heard of it happening to others</p>
		<p>Be careful with easy start, read and follow the instructions first, it can go wrong quickly in the hands of the intellectually challenged.</p>
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