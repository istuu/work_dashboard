<!DOCTYPE html>
<html lang="en-us" class="no-js">

    <head>
        <meta charset="utf-8">
        <title>My Dashboard</title>
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Danang Nugroho">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- ============== Resource style ============== -->
		<link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">

		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="{{ asset('assets') }}/js/modernizr.js"></script>
    </head>

	<body>

		<div class="loading-part">
			<div class="loader-home">Loading...</div>
		</div>

		<div id="wrapper">

			<div class="lines-overlay"></div>

			<div id="main">

				<!-- Canvas displaying the constellation effect -->
				<canvas id="background"></canvas>

				<ul class="social-icons">
					<li>
						<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
					</li>

					<li>
						<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
					</li>

					<!-- <li>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</li>

					<li>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</li> -->
				</ul>

				<!-- Header -->
				<header id="header">

					<h1>Welcome {{ env('APP_NAME') }}</h1>
                    <br/><br/>
                    <p class="animated-quick"><i>"{{ $quote->quote }}"</i></p>
					<p class="animated-quick">~ {{ $quote->author }} ~</p>
                    <br/>
					<nav>
						<ul>
							<li>
								<a href="http://webarq.info:8080" class="photos icon-popup icon ion-clipboard" target="_blank"></a>
								<p class="name">Jira</p>
							</li>

							<li>
								<a href="https://dev.webarq.net:8443" class="messages icon-popup icon ion-briefcase" target="_blank"></a>
								<p class="name">Plesk</p>
							</li>

							<li>
								<a href="https://dev.webarq.info:8787" class="about icon-popup icon ion-fork-repo" target="_blank"></a>
								<p class="name">Gitlab</p>
							</li>

							<li>
								<a href="https://github.com/istuu" class="phone icon ion-social-github"></a>
								<p class="name">Github </p>
							</li>
						</ul>
					</nav>
				</header>

			</div>

		</div>


		<!-- Footer -->
		<footer id="footer">
			<span class="copyright">&copy; {{ $image->copyright }}</span>
		</footer>

		<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
        <!-- ********** Resources jQuery ********** -->
        <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->

		<!-- * Libraries jQuery and Bootstrap - Be careful to not remove them * -->
		<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
		<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>

		<!-- Countdown -->
        <script src="{{ asset('assets') }}/js/jquery.lwtCountdown-1.0.js"></script>

        <!-- Newsletter plugin -->
		<script src="{{ asset('assets') }}/js/notifyMe.js"></script>

		<!-- Contact form verification -->
        <script src="{{ asset('assets') }}/js/contact-me.js"></script>

		<!-- Swipebox plugin -->
		<script src="{{ asset('assets') }}/js/jquery.swipebox.js"></script>

		<!-- Constellation effect -->
        <script src="{{ asset('assets') }}/js/constellation.js"></script>

		<!-- Background plugin -->
		<script src="{{ asset('assets') }}/js/vegas.js"></script>

		<!-- Background settings -->
		<script>

		    $('body').vegas({
		        slides: [
		            { src: "{{ url('https://bing.com'.$image->url) }}" }
		        ]
		    });

		</script>

		<!-- Main JS -->
		<script src="{{ asset('assets') }}/js/main.js"></script>

	</body>
</html>
