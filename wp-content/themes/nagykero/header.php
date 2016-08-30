<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<header>
		<button class="hamburger hamburger--elastic" type="button">
		  <span class="hamburger-box">
		    <span class="hamburger-inner"></span>
		  </span>
		</button>	

		<div class="wrapper">
			<h1 class="logo-container">
				<a id="logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
			</h1>
			<nav class ="main-navigation">sdsd</nav>
		</div>
	</header>	