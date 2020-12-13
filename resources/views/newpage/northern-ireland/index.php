<?php
$pagetitle='Northern Ireland - Fuel Fixer Lrd';
$metadesc="Fuel Fixer Ltd is proud to announce that we have extended our Wrong Fuel Drain Service coverage to Northern Ireland. This means that we are now able to help customers who have the wrong fuel in their cars in Belfast, Derry, Lisburn, Newry and Armagh – and everywhere in-between. So, if you are stuck anywhere [&hellip;]";
$splashdesc="Fuel Fixer Ltd is proud to announce that we have extended our Wrong Fuel Drain Service coverage to Northern Ireland. This means that we are now able to help customers who have the wrong fuel in their cars in Belfast, Derry, Lisburn, Newry and Armagh – and everywhere in-between.";
$pagekw='wrong fuel northern ireland';
$main_h1="Northern Ireland";
$main_h2="Wrong Fuel Northern Ireland";
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
		<h3>Northern Ireland</h3>
		<p>So, if you are stuck anywhere in Northern Ireland, suffering from the effects of a Misfuel – then give us a call. We are here to help.</p>
		<p class="bold">Free from Landlines: <?php echo $tel1; ?></p>
		<img src="{{ asset('uploads/Wrong-Fuel-Belfast.jpg') }}" alt="Wrong Fuel Belfast" width="100%" style="padding:10px 0px;" />
		<p class="bold">Fuel Drain Belfast – Wrong Fuel Removal Belfast</p>
		<p>Put the wrong fuel in your car in Belfast? Petrol in diesel car in Belfast? Don’t worry at all. Fuel Fixer Northern Ireland is able to have a technician out to you in no time to perform a fuel drain and remove the wrong fuel from your car.</p>
		<p class="bold">Fuel Drain Derry – Wrong Fuel Removal Derry</p>
		<p>If you’ve put the wrong fuel in your car in Derry we’re able to help. We have two fuel drain vans covering Derry ready to drain your fuel tank and get you going again. Petrol in diesel? No problem. Fuel Fixer is on the case.</p>
		<p class="bold">Fuel Drain Lisburn – Wrong Fuel Removal Lisburn</p>
		<p>Fuel Fixer is one of the only fuel drain companies that regularly service the Lisburn area. Our fuel drainers can come out to you, wherever you are and whenever you want, to remove the wrong fuel from your car and get you going again – no mess and no fuss.</p>
		<p class="bold">Fuel Drain Newry – Wrong Fuel Removal Newry</p>
		<p>Stuck in Newry with the wrong fuel in your car? Call Fuel Fixer to sort the problem out. We can come out to remove the wrong fuel, drain the tank and flush the lines, and get the car going again. We are contracted by some of the biggest breakdown and insurance providers so you know you can trust us to get the job done properly.</p>
		<p class="bold">Fuel Drain Armagh – Wrong Fuel Removal Armagh</p>
		<p>“Help! I put the wrong fuel in my car in Armagh!” is something we hear quite a lot. Fear not! Give Fuel Fixer a call and we’ll have a fuel drainer out to you in a flash to remove the wrong fuel and get your vehicle running again. Our services are fast, professional and cost-effective.</p>
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