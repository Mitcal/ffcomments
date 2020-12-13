<?php
$pagetitle='Put Petrol in a Diesel Car by Mistake? Call Fuel Fixer Now - Fuel Fixer Lrd';
$metadesc="If you’ve just put petrol in a diesel car by mistake and drove it call Fuel Fixer NOW! Immediate 24/7 Call-Out. We&#039;ll get you back on the road.";
$splashdesc="If you’ve just put petrol in a diesel car by mistake and drove it call Fuel Fixer NOW! Immediate 24/7 Call-Out. We&#039;ll get you back on the road.";
$pagekw='put petrol in a diesel car';
$main_h1="Have you put Petrol in a Diesel Car by mistake?";
$main_h2="Petrol in a Diesel Car? We can help!";
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
		<h3>Petrol in Diesel by Mistake</h3>
		<p>If you’ve just put petrol in a diesel car by mistake and drove it I’m sure that first thing you want is sound advice on what to do next. There are a lot of opinions out there on how you should treat your vehicle after a misfueling, and to be honest, most of it is worthless. My knowledge on the subject is a result of extensive experience dealing with misfueled vehicles. I have spoken with many tens of thousands of motorists who have put petrol into their diesel vehicles, and a few thousand who have put diesel into petrol. Additionally, as a company we have completed fuel drains on many, many thousands of misfueled vehicles. This is our business and is pretty much the only thing we do – therefore we are professional specialists on the subject. With all that in mind, I’m going to give you some advice on what to do and what the common untruths are.</p>
		<p class="bold">I’ve filled up my car with petrol instead of diesel and drove it until it conked out. Have I ruined it?</p>
		<p>It is very unlikely that you have ruined your car by misfueling and driving it. That said it’s not unheard of for a pump to fail, or an injector to get clogged. But, statistically speaking, of the more than 13,000 fuel drains we have done so far this year on run misfueled vehicles, less than 30 had sustained damaged necessitating a visit to a garage for repair (less than 0.25%). In the cases of damage the vehicles had generally been run continuously, long after the misfuel was known about, and the customers had tried to just “get away with it”.</p>
		<p class="bold">I put petrol in a diesel car and the dealership has told me I need to replace almost the entire fuel system. Is this true?</p>
		<p>No. Well, if it’s not true why do people say it? The answer to that is very simple – money. If you put petrol into your diesel Mercedes, for example, and take it in to the dealership you would likely be faced with a bill to the tune of thousands of pounds. Mercedes will say that because there is a possibility that some parts have become damaged (regardless of how remote that possibility is) they are no longer able to guarantee those parts. Therefore, in order for them to be able to maintain your warranty and continue to guarantee your engine parts they will need to replace them. Not only does this protect them from an unsatisfied customer suing when their engine fails it also makes them a tidy little sum of money.</p>
		<p>A few months ago we did a fuel drain on a brand new Mercedes C Class. The customer had put unleaded petrol into it and then moved it from the pump to a parking bay at the petrol station. It was then recovered to the dealership and he was given a bill for £750 to drain the fuel out and £9,000 to replace the “damaged” engine parts. We attended the vehicle, drained it and cleaned it out for the customer for a tiny fraction of that amount. I spoke with the customer recently and he has had absolutely no problems with the vehicle at all. So, did he really need to have everything replaced? I leave that for you to decide.</p>
		<p class="bold">I’ve only put a little petrol in a diesel car by mistake, less than 10% of the fuel tank’s capacity. Can I just top it up with the correct fuel?</p>
		<p>You hear a lot of this going around. And you also hear a lot of conflicting stories and opinions on its validity. There are probably as many correct answers to this as there are cars in the world. I’ve heard of people having a 10% contamination problem and filling the vehicle up and never experiencing a problem at all. I’ve also been called out to help stranded motorists who put less than 5% petrol in their diesel and the vehicle conked out. I think I can best explain it with an analogy: Liken misfueling to putting drugs into the body. Pretty much everyone reacts differently to drugs. Some can have a little with no serious adverse effects. Some can’t handle even the smallest amounts. Anyone will die if you give them too much.</p>
		<p>So, when deciding whether to “fill it up and give it a go”, just realise that it’s a gamble. How lucky do you feel?</p>
		<p>If you are still unsure of what to do after putting petrol into your diesel vehicle, give us a call. We’d be glad to help.</p>
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