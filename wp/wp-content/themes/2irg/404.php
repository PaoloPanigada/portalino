<?php

/* 	D5 Business Line Theme's 404 Error Page
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 Business Line 1.0
*/

get_header(); ?>

<h1 class="page-title"Non trovata</h1>
<h3 class="arc-src"><span>Mi dispiace ma la pagina che stai cercando non esiste.</span></h3>

<?php //get_search_form(); ?>
<p><a href="<?php echo home_url(); ?>" title="Browse the Home Page">&laquo; Torna alla home</a></p><br /><br />

<h2 class="post-title-color">Questi i contenuti che potrebbero interessarti:</h2>
<div class="content-ver-sep"></div><br />
<?php get_template_part( 'featured-box' ); ?>
 
<?php get_footer(); ?>
