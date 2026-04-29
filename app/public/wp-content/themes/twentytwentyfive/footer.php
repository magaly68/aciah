  </main>

  <footer class="site-footer">
    <div class="site-footer__row">
      <a class="footer-logo" 
      href="<?php 
      echo esc_url(home_url('/')); 
      ?>" 
      aria-label="<?php 
      esc_attr_e('Accueil', 'association-maquette'); 
      ?>">
      </a>

      <nav class="footer-nav" 
      aria-label="<?php 
      esc_attr_e('Navigation du pied de page', 'association-maquette');
       ?>">
        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'container'      => false,
            'fallback_cb'    => function () {
                echo '<ul>';
                echo '<li><a href="#">Mentions légales</a></li>';
                echo '<li><a href="#">Gestion des cookies</a></li>';
                echo '<li><a href="#">Données personnelles</a></li>';
                echo '<li><a href="#">Accessibilité</a></li>';
                echo '</ul>';
            },
        ]);
        ?>
      </nav>
    </div>
  </footer>
</div>

<?php 
    wp_footer();
?>
</body>
</html>
