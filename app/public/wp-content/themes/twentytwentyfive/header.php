<?php
if (! defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-wrap">
  <header class="site-header">
    <div class="site-header__row">
      <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Accueil', 'association-maquette'); ?>"></a>

      <nav class="main-nav" aria-label="<?php esc_attr_e('Navigation principale', 'association-maquette'); ?>">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'fallback_cb'    => function () {
                echo '<ul>';
                echo '<li><a href="#">Accueil</a></li>';
                echo '<li><a href="#">À propos</a></li>';
                echo '<li><a href="#">Formations</a></li>';
                echo '<li><a href="#">Index tutoriels</a></li>';
                echo '<li><a href="#">Contactez-nous</a></li>';
                echo '</ul>';
            },
        ]);
        ?>
      </nav>
    </div>
  </header>

  <main class="site-content">
