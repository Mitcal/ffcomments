<?php
$pagetitle='DIY fuel drain - Fuel Fixer Lrd';
$metadesc="Sometimes fuel cannot be removed from a filler neck, petrol cars in particular have permanently sealed fuel lines with no easy access points, there are a number of ways to skin a wrong fuel cat, here&#8217;s one of them This is a back seat of a C1, I accessed the tank from underneath the seat, [&hellip;]";
$splashdesc="Sometimes fuel cannot be removed from a filler neck, petrol cars in particular have permanently sealed fuel lines with no easy access points, there are a number of ways to skin a wrong fuel cat.";
$pagekw='DIY fuel drain';
$main_h1="DIY Fuel Drain";
$main_h2="Disclaimer: Fuel Drains should onlu be carried out by a professional. Do not try this at home!";
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
		<h3>DIY Fuel Drain</h3>
		<p>Sometimes fuel cannot be removed from a filler neck, petrol cars in particular have permanently sealed fuel lines with no easy access points, there are a number of ways to skin a wrong fuel cat, here’s one of them</p>
		<img src="{{ asset('uploads/IMG_0611-1024x768.jpg') }}" alt="" width="100%" style="padding:10px 0px;" />
		<p>This is a back seat of a C1, I accessed the tank from underneath the seat, the seat lifts up with a hard tug, most bench seats are held on by 2 clips, these clips are just push clips so a tug is all you can do, dont be scared of breaking them – they are designed to give, when youre done just push them back into place, make sure to pull the seat belts through the bench seat when you put it back together or you will und up with the female clips hidden under the seat!</p>
		<img src="{{ asset('uploads/IMG_06081-1024x768.jpg') }}" alt="" width="100%" style="padding:10px 0px;" />
		<p>Above This is the cover for the tank, it is attached with a sticky type glue that reseals after it has been removed, prise it off with a large screw driver, being carefull not to kink the thin metal,</p>
		<img src="{{ asset('uploads/IMG_0606-e1294008951157-1024x768.jpg') }}" alt="  " width="100%" style="padding:10px 0px;" />
		<p>The cover is off and I have unclipped the feed line (top line)</p>
		<img src="{{ asset('uploads/IMG_0604-e1294009070786-1024x768.jpg') }}" alt="" width="100%" style="padding:10px 0px;" />
		<p>I have now connected my scavenger hose directly into the feed line and have drained the tank, in this case all that was needed was a tank drain becuase the car had not been driven.</p>
		<p>Note the big blue ring, this is a screw cap that holds the sender unit into the tank, if you unscrew this ring (very carefully) you can lift the sender unit out and you will be looking into the fuel tank, you can then syphon directly from the tank this is the most DIY freindly method if you do not have a pump. you cannot syphon off the hose directly becuase you need too much suction to pull through the fuel pump which is housed in the tank</p>
		<p>Be carefull if you plan to do your own fuel drain after a mis-fuel, I know many people attempt it at first before calling us and I am happy to talk anyone through a fuel drain if they need expert help, I don’t mind giving out free advice and welcome your calls and comments</p>
		<p>But please be careful, petrol is very flammable, it would be wise to read up on the safe handling of petrol before doing a fuel drain, just because fuel is contaminated doesn’t make it any less volatile</p>
		<p>Good luck!</p>
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