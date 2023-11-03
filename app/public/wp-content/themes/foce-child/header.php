<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
  <header id="masthead" class="site-header">
  <nav id="nav">
    <h3>Fleurs d'orangers et chats errants</h3>
    <ul>
      <li class=" liste-transition">
        <a href="#histoire">Histoire</a>
      </li>
      <li class=" liste-transition2">
        <a href="#chats">Personnage</a>
      </li>
      <li class=" liste-transition2">
        <a href="#lelieu">Lieu</a>
      </li>
      <li class=" liste-transition">
        <a href="#studio">Studio Koukaki</a>
      </li>
    </ul>
    <div id="icons" class="burger-icon"></div>  
  </nav>
  </header>
</div>
</body>


