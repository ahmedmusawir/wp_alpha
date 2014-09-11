<?php 
/**
*
* The Header for the theme.
*
**/
	//Get the favicon
	$favicon = IMAGES . '/icons/favicon.png';
	//Get the custom touch icon.
	$touch_icon = IMAGES . '/icons/apple-touch-icon-152x152-precomposed.png';

?>
<!DOCTYPE html>
<!-- [if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]  -->
<!-- [if !IE]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]--> 
	<head>
		<meta charset="<?php bloginfo( 'charset' );  ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Favicon and Apple Icons  -->
		<link rel="shortcut icon" type="text/css" href="<?php echo $favicon; ?>">
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $touch_icon; ?>">
		<!-- <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png"> -->
		<!-- <link rel="apple-touch-icon" sizes="72/72" href="images/icons/apple-touch-icon-72x72.png"> -->
		<!-- <link rel="apple-touch-icon" sizes="114/114" href="images/icons/apple-touch-icon-114x114.png"> -->

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- HEADER -->
		<header class="site-header" role="banner">
			
			<div class="container header-contents">
				<div class="row">
					<div class="col-xs-3">
						<div class="site-logo">
							Site Title:
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<p>Site Description:	<?php bloginfo( 'description' ); ?></p>
						</div>
						<!-- end site logo -->
					</div>
					<!-- end col-xs-3 -->
					<div class="col-xs-9">
						<nav class="site-navigation" role="navigation">
							<?php 
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'menu_class' => 'site-menu'
									)
								);
							?>
						</nav>		
					</div>
					<!-- end col-xs-9 -->
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</header>
		<!-- end site header -->

		<!-- MAIN CONTENT AREA -->
		<div class="container">
			<div class="row">












































