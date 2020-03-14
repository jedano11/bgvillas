<!DOCTYPE html>
<?php global $bettergardens; ?>

<html <?php language_attributes(); ?> class="no-js" lang="">

<head>
	
	
    <title><?php echo get_the_title() . ' | '. get_bloginfo( 'description' ); ?></title>
	
    <meta charset="<?php bloginfo('charset'); ?>">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,900|Ubuntu:300,400,500,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">

    <?php wp_head(); ?>

    <?php if (is_page('Porfolio')): ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
	<?php endif; ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70459333-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-70459333-1');
</script>

	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5QR738S');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="Vzc4-IkAOkiFTKan1gQu2FENMaKL2m_PZ2cEODUz3nc" />
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QR738S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	<div class="mobile-nav">
        <a href="<?php echo site_url(); ?>" class="logo-block">
            <img src="<?php bloginfo('template_directory'); ?>/images/mobile-logo.png" alt="*">
        </a>
        <p></p>
	    <nav class="">
	    	<?php 
		    	$args = array(
		    		'theme_location' => 'mobile-menu',
		    		'container' => 'ul',
				    'menu_class'=> 'unstyled mainnav'
	    		);
			?>
			<?php wp_nav_menu( $args ); ?>
		</nav>
	</div>


<main class="app-container">

	<!-- Mobile Navigation Button Start-->
	<div class="mobile-nav-btn bg-white ">
		<span class="lines bg-white"></span>
	</div>
	<!-- Mobile Navigation Button End-->

    <header class="ph">
    	<div class="">
	    	<div class="col-md-3">
		        <a href="<?php echo site_url(); ?>" class="logo d-inline-block">
	              <img src="<?php bloginfo('template_directory'); ?>/images/header-logo.png" alt="*">
	            </a>
		    </div>
		    <div class="col-md-9 col-nopadd hidden-md-down">
		        <nav class="pn">
			    	<?php 
				    	$args = array(
				    		'theme_location' => 'primary',
				    		'container' => 'ul',
						    'menu_class'=> 'unstyled inline'
			    		);
					?>
		    		<?php wp_nav_menu( $args ); ?>
		    	</nav>

		    	
		    </div>
	    </div>
    </header>
    
	


