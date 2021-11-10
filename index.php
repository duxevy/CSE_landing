<!DOCTYPE HTML>

<html>
	<head>
		<title>Центр судебных экспертиз СПбПУ</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<?php
				include('header.php');
			 ?>

			<!-- Main -->
				<section id="main" class="wrapper style3">
					<div class="title">Главная</div>
					<div class="container">

						<!--Blocks-->
						<section id="highlights">
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Центр судебных экспертиз<br class="mobile-hide" />
										Санкт-Петербургского Политехнического университета</h2>
										<p style="color: #171717;">Мы рады предоставить Вам возможность получить специальные знания и навыки для проведения судебных экспертиз</p>
									</header>
								</article>
							</div>
								<div class="row aln-center">
									<div class="col-4 col-12-medium">
										<section class="highlight">
											<ul class="actions">
												<li>
													<a href="./about.php" class="image featured"><img class="image nav" src="assets/images/o_nas_1.svg" alt="" /></a>
													<a href="./about.php" class="button style3">О нас</a>
												</li>
											</ul>
										</section>
									</div>
									<div class="col-4 col-12-medium">
										<section class="highlight">
											<ul class="actions">
												<li>
													<a href="./services.php" class="image featured"><img class="image nav" src="assets/images/uslugi.svg" alt="" /></a>
													<a href="./services.php" class="button style3">Услуги</a>
												</li>
											</ul>
										</section>
									</div>
									<div class="col-4 col-12-medium">
										<section class="highlight">
											<ul class="actions">
												<li>
													<a href="./lab.php" class="image featured"><img class="image nav" src="assets/images/laboratoria.svg" alt="" /></a>
													<a href="./lab.php" class="button style3">Лаборатория</a>
												</li>
											</ul>
										</section>
									</div>
								</div>
							</div>
						</section>

					</div>
				</section>

			<?php
				include('footer.php');
			 ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>        
    			$('a[href*=#]:not([href=#])').on('click', function (event) {
        			event.preventDefault();
        			var element = $(this.hash);
        			$('html,body').animate({ scrollTop: element.offset().top },'normal', 'swing');
    			});
</script>


	</body>
</html>