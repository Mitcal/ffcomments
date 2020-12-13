<?php
$pagetitle='Wrong Fuel Rutland - Fuel Fixer Lrd';
$metadesc="Wrong Fuel Rutland: If you have put wrong fuel in your car call for immediate assistance. We can get you can safely get back on your journey.";
$splashdesc="Wrong Fuel Rutland: If you've put wrong fuel in your car in Rutland, call for immediate assistance - don't try to drive on. Your car will be fixed at the roadside, so you can safely get back on your journey.";
$pagekw='wrong fuel Rutland, wrong fuel in car Rutland';
$main_h1="Rutland";
$main_h2="Mobile Units On Call across Rutland Now";
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
			<p>We have fuel drain technicians based throughout Rutland. Our average arrival time is 46 minutes. Fuel removal and re-setting usually takes another half hour. Get yourself and any passengers to a safe place while you wait, and let us know your location. Read on for more information about the effects of wrong fuel, and for our FAQ.</p>			
		</div><!-- .container --> 
		<div class="row">
			<div class="col-md-6">
				<div class="container">
					<img src="{{ asset('uploads/wrong_fuel.jpg') }}" alt="Wrong Fuel Rutland" width="100%">
					<h3>Wrong Fuel Rutland</h3>
					<p>If you have put the wrong fuel into your vehicle, Fuel Fixer are able to provide you with a 24 hour a day, 7 days-a-week mobile fuel drain service, with the ability to offer our assistance to the entirety of Rutland. We will come out to your car, drain the contaminated fuel from your tank, flush the entire system and get you up on the road in no time.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container">
				<img src="{{ asset('uploads/Petrol-in-a-diesel-car.jpg') }}" alt="Rutland Petrol in a Diesel Car" width="100%">
				<h3>Rutland Petrol in a Diesel Car</h3>
				<p>Have you put Petrol into your Diesel car? Do not worry! No matter if you are at the side of the road, at a petrol station or at home, Fuel Fixer are able to come and perform a fuel drain which will take on average 30 minutes from our arrival. We are able to get 99.9% of vehicles back up on the road with no issues... in fact some say it runs better than before!</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container">
					<img src="{{ asset('uploads/essencecarburants.jpg') }}" alt="Water Contamination" width="100%">
					<h3>Water Contamination</h3>
					<p>Having water in the fuel tank is likely to lead to idling difficulties, uneven running, abnormal smoke and, if it's not remedied correctly, in some cases broken injectors. This process is likely to take longer than a regular misfuel however we have attended thousands of these jobs every year and our engineers have been trained to handle even the hardest of fuel drains.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container">
				<img src="{{ asset('uploads/Adblue-in-a-diesel-tank.jpg') }}" alt="AdBlue in a Diesel Car" width="100%">
				<h3>AdBlue in a Diesel Car</h3>
				<p>Fuel Fixer are proud to be one of the only fuel draining companies in Rutland who are able to offer the service of removing AdBlue from your car. AdBlue is a far more complex job requiring a high level of expertise. Due to the experience required, many companies do not offer this service however all of Fuel Fixer’s technicians are fully trained to handle AdBlue contaminations.</p>
				</div>
			</div>
		</div>
		<div class="container">
		<h3>GIVE US A CALL</h3>
		<p>Our call centre staff are available 24 hours a day and are on hand to answer your questions. They are fully trained and able to help you with any misfuel situation, either by providing relevant and qualified advice, or by getting a fuel technician out to assess and fix your vehicle.</p>
		<p>We cover all these areas in Rutland:</p>
		<table class="table table-sm">
			<tr><td>Oakham</td><td>Whissendine</td><td>Greetham</td></tr>
			<tr><td>Uppingham</td><td>Cottesmore</td><td>Exton</td></tr>
			<tr><td>Ketton</td><td>Empingham</td><td>Great Casterton</td></tr>
			<tr><td>Ryhall</td><td>Edith Weston</td><td>Market Overton</td></tr>
			<tr><td>Langam</td><td>North Luffenham</td><td></td></tr>
		</table>
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