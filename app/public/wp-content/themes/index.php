<?php
get_header();
?>

<section>
  <h1><?php bloginfo('name'); ?></h1>
  <p>
    <?php 
  bloginfo('description'); 
  ?>
  </p>
</section>

<section class="news-band">
  <h3>Actualité</h3>
  <div class="news-grid">
    <article class="news-item"><a href="#">Article 1</a><img src="https://picsum.photos/seed/a/300/180" alt=""></article>
    <article class="news-item"><a href="#">Article 2</a><img src="https://picsum.photos/seed/b/300/180" alt=""></article>
    <article class="news-item"><a href="#">Article 3</a><img src="https://picsum.photos/seed/c/300/180" alt=""></article>
    <article class="news-item"><a href="#">Article 4</a><img src="https://picsum.photos/seed/d/300/180" alt=""></article>
  </div>
</section>

<?php
get_footer();
?>