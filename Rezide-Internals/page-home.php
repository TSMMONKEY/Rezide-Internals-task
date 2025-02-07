<?php
    /* 
Template Name: Home 
*/
    get_header();
?>

<style>
      .main-btn {
      width: 250px;
      border: none;
      text-transform: capitalize;
      padding: 13px 0;
      border-radius: 0;
      font: normal normal bold 12px/15px Termina;
      letter-spacing: 2.16px;
      color: #454545;
      text-transform: uppercase;
      background-color: #e0be77;
      margin: 0 auto;
    }
</style>
  <!-- Hero Section -->
  <?php get_template_part('template-parts/home/hero-section/hero'); ?>

  <section class="main  pb-3">
  <!-- About Section Style -->
    <?php get_template_part('template-parts/home/about/about'); ?>

    <!-- Instant Valuation Section -->
    <?php get_template_part('template-parts/home/instant-valuation/valuation'); ?>

    <!-- Featured Properties Section -->
    <?php get_template_part('template-parts/home/featured-properties/featured'); ?>

    <!-- Ratings Section -->
    <?php get_template_part('template-parts/home/ratings/ratings'); ?>

    <!-- Other Services -->
    <?php get_template_part('template-parts/home/other-services/services'); ?>

    <!-- Discover Section -->
    <?php get_template_part('template-parts/home/discover/discover'); ?>

    <!-- Contact Section -->
    <?php get_template_part('template-parts/home/contact/contact'); ?>

    <!-- Blog Section -->
    <?php get_template_part('template-parts/home/blog/blog'); ?>
  </section>

<?php get_footer(); ?>