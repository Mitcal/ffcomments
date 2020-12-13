<?php
$pagetitle='Petrol in a Diesel BMW - Fuel Fixer Lrd';
$metadesc="Please only comment in this page if your comment is regarding BMW&#8217;s. I want this to be a very informative website page to help BMW owners. I would really like any comments from people who have put the wrong fuel in a BMW and the lasting effects. Any anecdotes on fuel drains done or any trouble anyone [&hellip;]";
$splashdesc="This is a page for all your comments, your questions, and your experiences with putting the wrong fuel in a BMW.";
$pagekw='Petrol in a Diesel BMW';
$main_h1="Petrol in a Diesel BMW";
$main_h2="Wrong Fuel in a BMW";
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
		<p>I am putting this page together to help BMW owners and to illustrate common problems while doing fuel drains on BMW’s. I will be adding more and more pictures, anecdotes, tips and anything else I can to help.</p>
		<p>Please leave comments if you are a BMW owner who has had a fuel drain or has had any experience with putting the wrong fuel in your BMW, your comments will help a lot of people who have been given false information or who are worried about the effects of wrong fuel.</p>
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