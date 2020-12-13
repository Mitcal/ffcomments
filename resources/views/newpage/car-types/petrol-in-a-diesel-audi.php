<?php
$pagetitle='Petrol in a Diesel Audi - Fuel Fixer Lrd';
$metadesc="Please only comment in this page if your comment is regarding Audi&#8217;s. I want this to be a very informative website page to help Audi owners. I would really like any comments from people who have put the wrong fuel in an Audi and the lasting effects. Any anecdotes on fuel drains done or any trouble anyone [&hellip;]";
$splashdesc="This is a page for all your comments, your questions or your experiences with putting the wrong fuel in an Audi.";
$pagekw='Petrol in a Diesel Audi';
$main_h1="Petrol in a Diesel Audi";
$main_h2="Wrong Fuel in an Audi";
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
		<p>Please only comment in this page if your comment is regarding Audi’s. I want this to be a very informative website page to help Audi owners. I would really like any comments from people who have put the wrong fuel in an Audi and the lasting effects. Any anecdotes on fuel drains done or any trouble anyone has had with any Audi model when it comes to the wrong fuel.</p>
		<p>I will be adding a lot of pictures and video clips to this page to help any Audi owners so watch this space.</p>
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