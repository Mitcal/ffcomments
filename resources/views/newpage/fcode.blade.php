	<script type=application/ld+json>
	{
	"@context":"https://schema.org",
	"@graph":[
	{
		"@type" : ["localbusiness", "AutomotiveBusiness"],
		"@id":"https://www.fuelfixer.co.uk/#organization",
		"name" : "Fuel Fixer Ltd",
		"url" : "https://www.fuelfixer.co.uk/",
		"telephone" : "+448000159564",
		"logo" : "https://fuelfixer.co.uk/images/site-logo.png",
		"image" : "https://www.fuelfixer.co.uk/wp-content/uploads/2017/03/1.png",
		"priceRange" : "££",
		"sameAs" : [ 	"https://www.facebook.com/Fuelfixer/",
					   "https://twitter.com/FuelFixerUK",
					   "https://plus.google.com/+FuelfixerUkLimited"
					],
		"contactPoint" : [
		{ 	 "@type" : "ContactPoint",
			 "telephone" : "+448000159564",
			 "contactType" : "sales",
			 "areaServed" : "GB"
		}],
		"address": [
		{   "@type": "PostalAddress",
		   "addressLocality": "Linx House, 147-149 London Road, East Grinstead, RH19 1ET, United Kingdom"
		} ],
		"aggregateRating": {
		"@type": "AggregateRating",
		"ratingValue": "4.95",
		"reviewCount": "364"
		}
	},
	{
		"@type":"WebSite",
		"@id":"https://www.fuelfixer.co.uk/#website",
		"url":"https://www.fuelfixer.co.uk/",
		"name":"Fuel Fixer Ltd",
		"description":"Wrong Fuel in your car? ⭐ Guaranteed ⭐ We Will Get You Back In The Road! ✅ Call Fuel Fixer NOW! Immediate 24/7 10% Off.",
		"publisher":{
			"@type" : "Organization",
            "@id":"https://www.fuelfixer.co.uk/#publisher",
            "url" : "https://www.fuelfixer.co.uk/",
            "logo": {
              "@type": "ImageObject",
              "url": "https://fuelfixer.co.uk/images/site-logo.png"
            },
            "name" : "Fuel Fixer Ltd"
		},
		"inLanguage":"en-GB"
	},
	{
		"@type":"WebPage",
		"@id":"https://www.fuelfixer.co.uk/<?php echo $uri; ?>/#webpage",
		"url":"https://www.fuelfixer.co.uk/<?php echo $uri; ?>/",
		"name":"<?php echo $pagetitle; ?> - Fuel Fixer Ltd",
		"isPartOf":{
			"@id":"https://www.fuelfixer.co.uk/#website"
		},
		"datePublished":"<?php echo $datepublished; ?>",
		"dateModified":"<?php echo $datemidified; ?>",
		"inLanguage":"en-GB",
		"potentialAction":[{
			"@type":"ReadAction",
			"target":[
				"https://www.fuelfixer.co.uk/<?php echo $uri; ?>/"
	]}]},
	{
		"@type":"Article",
		"@id":"https://www.fuelfixer.co.uk/<?php echo $uri; ?>/#article",
		"about":"<?php echo $pagekw; ?>",
		"abstract":"<?php echo $splashdesc; ?>",
		"inLanguage":"en-GB",
		"isPartOf":{
			"@id":"https://www.fuelfixer.co.uk/<?php echo $uri; ?>/#webpage"
		},
		"author":{
			"@id":"https://www.fuelfixer.co.uk/#/schema/person/f877b488982af0d1686a81c20b7037eb"
		},
		"headline":"<?php echo $main_h1; ?>",
		"datePublished":"<?php echo $datepublished; ?>",
		"dateModified":"<?php echo $datemidified; ?>",
		"image":"{{ $featuredimage }}",
		"mainEntityOfPage":{
			"@id":"https://www.fuelfixer.co.uk/<?php echo $uri; ?>/#webpage"
		},
		"commentCount":0,
		"publisher":{
			"@id":"https://www.fuelfixer.co.uk/#publisher"
		},
		"potentialAction":[{
			"@type":"CommentAction",
			"name":"Comment",
			"target":[
				"https://www.fuelfixer.co.uk/<?php echo $uri; ?>/#respond"
	]}]},
	{
		"@type":"Person",
		"@id":"https://www.fuelfixer.co.uk/#/schema/person/f877b488982af0d1686a81c20b7037eb",
		"name":"TheFuelMan",
		"description":"The Fuel Man has been in the Wrong Fuel industry for over a decade. He is an avid auto enthusiast and owner of the UK's largest independent Wrong Fuel Drain company. He is an expert in the subject of Petrol in a Diesel Car and has been helping motorists with misfuelling problems by providing advice, guidance, and roadside call-outs and repairs."
	}]}
	</script>
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>