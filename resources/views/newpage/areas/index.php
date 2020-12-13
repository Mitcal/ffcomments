<?php
$pagetitle='Areas We Cover - Fuel Fixer Lrd';
$metadesc="Wrong Fuel Service - Fuel Fixer. AREAS WE COVER and SERVICE all day - everyday";
$splashdesc="For immediate freindly help with misfuel contact us now.";
$pagekw='areas we cover';
$main_h1="Areas We Cover";
$main_h2="Mobile Units On Call across the UK Now";
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
		<h3>GIVE US A CALL</h3>
		<p>Our call centre staff are available 24 hours a day and are on hand to answer your questions. They are fully trained and able to help you with any misfuel situation, either by providing relevant and qualified advice, or by getting a fuel technician out to assess and fix your vehicle.</p>
		<p>We cover all these areas in the UK:</p>
		<div class="table-responsive">
		<table class="table table-striped">
			<tr><td style="width:33%;"><a href="bedfordshire/">Bedfordshire</a></td><td style="width:33%;"><a href="berkshire/">Berkshire</a></td><td style="width:33%;"><a href="bristol/">Bristol</a></td></tr>
			<tr><td><a href="buckinghamshire/">Buckinghamshire</a></td><td><a href="cambridgeshire/">Cambridgeshire</a></td><td><a href="cheshire/">Cheshire</a></td></tr>
			<tr><td><a href="cornwall/">Cornwall</a></td><td><a href="cumbria/">Cumbria</a></td><td><a href="derbyshire/">Derbyshire</a></td></tr>
			<tr><td><a href="devon/">Devon</a></td><td><a href="dorset/">Dorset</a></td><td><a href="durham/">Durham</a></td></tr>
			<tr><td><a href="east-riding-of-yorkshire/">East Riding Of Yorkshire</a></td><td><a href="east-sussex/">East Sussex</a></td><td><a href="essex/">Essex</a></td></tr>
			<tr><td><a href="gloucestershire/">Gloucestershire</a></td><td><a href="greater-london/">Greater London</a></td><td><a href="greater-manchester/">Greater Manchester</a></td></tr>
			<tr><td><a href="hampshire/">Hampshire</a></td><td><a href="herefordshire/">Herefordshire</a></td><td><a href="hertfordshire/">Hertfordshire</a></td></tr>
			<tr><td><a href="kent/">Kent</a></td><td><a href="lancashire/">Lancashire</a></td><td><a href="leicestershire/">Leicestershire</a></td></tr>
			<tr><td><a href="lincolnshire/">Lincolnshire</a></td><td><a href="london/">London</a></td><td><a href="merseyside/">Merseyside</a></td></tr>
			<tr><td><a href="norfolk/">Norfolk</a></td><td><a href="north-yorkshire/">North Yorkshire</a></td><td><a href="northamptonshire/">Northamptonshire</a></td></tr>
			<tr><td><a href="northumberland/">Northumberland</a></td><td><a href="nottinghamshire/">Nottinghamshire</a></td><td><a href="oxfordshire/">Oxfordshire</a></td></tr>
			<tr><td><a href="rutland/">Rutland</a></td><td><a href="shropshire/">Shropshire</a></td><td><a href="somerset/">Somerset</a></td></tr>
			<tr><td><a href="south-yorkshire/">South Yorkshire</a></td><td><a href="staffordshire/">Staffordshire</a></td><td><a href="suffolk/">Suffolk</a></td></tr>
			<tr><td><a href="surrey/">Surrey</a></td><td><a href="tyne-and-wear/">Tyne And Wear</a></td><td><a href="warwickshire/">Warwickshire</a></td></tr>
			<tr><td><a href="west-midlands/">West Midlands</a></td><td><a href="west-sussex/">West Sussex</a></td><td><a href="west-yorkshire/">West Yorkshire</a></td></tr>
			<tr><td><a href="worcestershire/">Worcestershire</a></td><td><a href="https://scotland.fuelfixer.co.uk/">Scotland</a></td><td><a href="#/">Ireland</a></td></tr>

		</table>
		</div>
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