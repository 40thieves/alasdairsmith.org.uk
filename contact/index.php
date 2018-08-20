<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>Contact - Alasdair Smith | 40 Thieves</title>

	<meta name="description" content="Alasdair Smith is a web developer based in London">
	<meta name="author" content="Alasdair Smith">
	<meta name="theme-color" content="#ffffff" />

	<link rel="author" href="humans.txt">

	<link rel="apple-touch-icon" href="/apple-touch-icon.png" type="image/png">
	<link rel="shortcut icon" href="/icon.png" sizes="300x300" type="image/png">
	<link rel="icon" href="/favicon-96x96.png" sizes="96x96" type="image/png">
	<link rel="icon" href="/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/manifest.json">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Want a nicely formatted repo? -->
	<!-- Check the Github: https://github.com/40thieves/alasdairsmith.org.uk -->
	<!-- Or have some questions? alasdairsmith100 [at] gmail [dot] com -->
	<link rel="stylesheet" href="/assets/css/style.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<header id="banner" role="banner">
	<div class="color-bar" aria-hidden="true">
		<div id="color1"></div>
		<div id="color2"></div>
		<div id="color3"></div>
		<div id="color4"></div>
		<div id="color5"></div>
		<div id="color6"></div>
		<div id="color7"></div>
		<div id="color8"></div>
		<div id="color9"></div>
		<div id="color10"></div>
	</div>

	<h1 class="logo wrap wide">
		<a href="/">
			<span class="name">Alasdair <span class="thin caps">Smith</span></span>
			<span class="pipe" aria-hidden="true"></span>
			<span class="nick">40 <span class="thin caps">Thieves</span></span>
		</a>
	</h1>

	<div id="avatar" class="wrap avatar">
		<div class="avatar-wrapper">
			<img src="/assets/img/photo-600.jpg" alt="Alasdair Smith">
		</div>
	</div>
</header>

<main class="content wrap" role="main">
	<section class="contact">
		<h1>Contact details</h1>
		<div class="vcard">
			<p>
				<a class="fn url" rel="me" href="http://alasdairsmith.co.uk">
					<span class="given-name">Alasdair</span> 
					<span class="family-name">Smith</span>
				</a>
			</p>

			<p>
				<a class="email" href="mailto:alasdairsmith100@gmail.com">Email</a>
			</p>

			<p>
				<a class="url" rel="me" href="http://twitter.com/40_thieves">Twitter</a>
			</p>

			<p>
				<a class="url" rel="me" href="http://github.com/40thieves">Github</a>
			</p>

			<p>
				<a href="callto:alismith5" rel="me">Skype</a>
			</p>

			<span class="nickname">fortythieves</span>
			<a class="url contact-url" href="http://alasdairsmith.co.uk/contact">Contact URL</a>
			<img class="photo" src="/assets/img/photo-600.jpg">

			<p class="download">
				Download 
				<a href="http://h2vx.com/vcf/alasdairsmith.co.uk/contact" title="My vcard">a vcard</a>
			</p>
		</div>
	</section>
</main>

<footer role="contentinfo">
	<div class="wrap wide clearfix">
		<p><a href="/contact">Contact</a>
		<p>Content &copy; Alasdair Smith <?php echo (new DateTime)->format('Y'); ?>.</p>
		<p><a href="https://github.com/40thieves/alasdairsmith.org.uk">Code</a> released under an MIT license.
	</div>
</footer>

<script type="text/javascript" src="/assets/js/leet.js"></script>
<script>
	if ('serviceWorker' in navigator) {
		window.addEventListener('load', function() {
			navigator.serviceWorker.register('/sw.js')
		})
	}
</script>
</body>
</html>