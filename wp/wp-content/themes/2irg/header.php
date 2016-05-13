<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title() ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php $upload_dir = wp_upload_dir(); ?>

<link rel="shortcut icon" href="<?php echo $upload_dir['baseurl']; ?>/2015/05/favicon.png">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.smartWizard.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.poshytip.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.poshytip.min.js"></script>
<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

<script>

 $(function() {
	$( "#tabs-21" ).tabs({
	   activate: function( event, ui ) {
		  var result = $( "#result-2" ).empty();
		  //result.append( "activated" );
	   },
	   create: function( event, ui ) {
		  var result = $( "#result-1" ).empty();
		  //result.append( "created" );
	   }
	});
 });
</script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php 
wp_head(); ?>


</head>

<body <?php body_class(); ?> >
  
      <div id ="header">
      <div id ="header-content">
		<!-- Site Titele and Description Goes Here -->
       <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if ( get_header_image() !='' ): ?><img class="site-logo" src="<?php header_image(); ?>"/><?php else: ?><h1 class="site-title"><?php echo bloginfo( 'name' ); ?></h1><?php endif; ?></a> -->
       
       <a href="http://10.79.225.252:8080/support2i/"><?php if ( get_header_image() !='' ): ?><img class="site-logo" src="<?php header_image(); ?>"/><?php else: ?><h1 class="site-title"><?php echo bloginfo( 'name' ); ?></h1><?php endif; ?></a>
		<h2 class="site-title-hidden"><?php bloginfo( 'description' ); ?></h2>
                
        
        <!-- Site Main Menu Goes Here -->
        <nav id="d5businessline-main-menu">
		<?php if ( has_nav_menu( 'main-menu' ) ) :  wp_nav_menu( array( 'theme_location' => 'main-menu' )); else: wp_page_menu(); endif; ?>
        </nav>
      
      </div><!-- header-content -->
      </div><!-- header -->
      <div id="container">
     	  
