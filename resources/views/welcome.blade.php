<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> PHP Dev Mariëlle </title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="img/about/marielle.png">

	<!-- Styles -->
	<link rel="stylesheet" href="css/style.css">

    <script>
        window.categories = @json($skills['categories']);
        window.workingExperience = @json($skills['workingExperience']);
        window.studyExperience = @json($skills['studyExperience']);
        window.selfLearningExperience = @json($skills['selfLearningExperience']);
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LCJV9VBLGG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LCJV9VBLGG', { 'anonymize_ip': true });
    </script>
</head>
<body data-spy='scroll' data-target='#navbar-header' data-offset='0'>
	<header id="header-area" class="header-area">
    @include('partials/nav')
		<!-- Particle-background -->
		<div id="particles-js"></div>
		<div class="slider-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 slider-height d-flex justify-content-center align-items-center">
						<div class="single-slider-content text-center name-title">
							<h1 class="font-weight-bold">Mariëlle</h1>
							<h4 class="text-uppercase">Freelance PHP Developer</h4>
							<ul>
								<li><a href="https://github.com/MariellevDijk"><i class="ion-social-github-outline"></i></a></li>
								<li><a href="https://www.linkedin.com/in/mariellevdijk/"><i class="ion-social-linkedin-outline"></i></a></li>
								<li><a href="mailto:jobs@marielle.dev"><i class="ion-ios-email-outline"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header-area-end -->
	<!-- Main Content Start -->
	<main>
		@include('partials/aboutme')
        @include('partials/werkervaring')
		@include('partials/opleidingen')
        @include('partials/portfolio')
        @include('partials/skillmatrix')
        @include('partials/testimonials')
        @include('partials/contact')
	</main>
	<!-- Main Content End -->

	<!-- Footer start -->
	@include('partials/footer')
	<!-- Footer end -->
    <script src="js/app.js"></script>
</body>
</html>
