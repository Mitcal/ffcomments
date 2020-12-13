<?php
$pagetitle='Franchise - Fuel Fixer Lrd';
$metadesc="Unfortunately we do not offer franchises as we believe that we can better offer high quality services to our customers by having each of our Fuel Drain Technicians answer directly to their managers, and not as individual micro-businesses. I have had alot of people asking about setting up in the fuel draining business and there [&hellip;]";
$splashdesc="Unfortunately we do not offer franchises as we believe that we can better offer high quality services to our customers by having each of our Fuel Drain Technicians answer directly to their managers, and not as individual micro-businesses.";
$pagekw='fuel drain franchise';
$main_h1="Franchise";
$main_h2="Wrong Fuel Drain Business Franchises";
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
		<h3>Franchise</h3>
		<p>I have had alot of people asking about setting up in the fuel draining business and there are now 4 companies that I know of that are selling franchises, 1 of them is even trying to sell franchises in Australia.</p>
		<p>Firstly whats involved?</p>
		<ul>
			<li>A drivers license, some common sense and about 30k should do the trick.</li>
			<li>You will have to have a good understanding of things mechanical, knowledge of fluid dynamics, understand car electrics and the fundamentals of electronics, have a good understanding of how to deal with petrol, diesel and the dangers of the job.</li>
			<li>You need to also have somewhere to store your fuel, a way of disposing it, and a van correctly kitted out.</li>
		</ul>
		<p>It is not a career decision to be made lightly and there are a few franchise buyers that I have spoken to for whom it did not turn out as expected or promised.</p>
		<p>Others can’t handle the hours, or pressure.</p>
		<p>The AA, RAC, and now about 60 independent operators are now doing fuel drains in the UK as well as about 100 informal operators.</p>
		<p>If you are thinking of buying a franchise here is whats on offer, and a little of what I know.</p>
		<ul>
			<li>Doctor Fuel</li>
			<li>Fuel Doctor</li>
			<li>Forecourt Assist</li>
			<li>FuelFix</li>
			<li>and a couple of others who only take franchisees by invitation.</li>
		</ul>
		<p>I am happy to share my thoughts with anyone who is looking to get into this business, please leave me a comment (please state if you would not like your comments to be added to this page) I will be happy to answer your questions.</p>
		<p>Take care.</p>
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