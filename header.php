<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	

	<link rel="shortcut icon" href="favicon.ico">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	

	<?php wp_head(); ?>
</head>

<body>
	<script type="text/javascript">
		document.documentElement.className += ' js';
	</script>

	<!-- Navigation -->
	<div class="fixed-top">
		<nav class="nav navbar navbar-expand-lg navbar-light bg-danger text-light py-3 main-nav">
			<div class="container">
				<a class="navbar-brand" href="index.html"><img class="logo" src="" alt="Logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon "></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto ">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'meu_menu',
							'depth' => 2,
							'container' => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'navbarSupportedContent',
							'menu_class' => 'navbar-nav',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker())
					);
					?>
					</ul>
				</div>
			</div>
		</nav>
	</div>
