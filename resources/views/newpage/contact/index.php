<?php
$pagetitle='Contact - Fuel Fixer Lrd';
$metadesc="Fuel Fixer Ltd Company Details: Coverage Areas: Nationwide! Head Office: Fuel Fixer Ltd Linx House 147-149 London Road East Grinstead West Sussex RH19 1ET Email: enquiries@fuelfixeruk.co.uk Hotline: 0333 366 1081 Call now for immediate service.";
$splashdesc="If you need a fuel drain then give us a call. If you have a different enquiry then it would be better to send us an email and we'll get right back to you.";
$pagekw='contact us';
$main_h1="Contact";
$main_h2="Call us for immediate call out";
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
			<h3>Fuel Fixer Ltd Company Details:</h3>
			<p class="bold">Coverage Areas:</p>
			<p>Nationwide!</p>
			<p class="bold">Head Office</p>
			<p><address>Fuel Fixer Ltd <br>Linx House <br>147-149 London Road <br>East Grinstead <br>West Sussex <br>RH19 1ET</address></p>
			<p>Email: <a class="linkstyle" href="mailto:enquiries@fuelfixeruk.co.uk">enquiries@fuelfixeruk.co.uk</a></p>
<p class="bold">Hotline: <a href="tel:<?php echo $tel; ?>" class="linkstyle"><?php echo $tel; ?></a></p>
<p class="bold">Call <a href="tel:<?php echo $tel; ?>" class="linkstyle"><?php echo $tel; ?></a> now for immediate service.</p>
<p>Accounts: 01342 522079</p>
<p>Available nationwide 24 hours a day, 7 days a week</p>
<p>We can be with you usually within the hour – for more details please check our common questions about wrong fuel.</p>
<p>V.A.T. Reg: 118 5930 06</p>
<p>Company Reg: 8520551</p>


		</div><!-- .container --> 


	
	
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