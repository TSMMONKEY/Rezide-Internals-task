<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> style="overflow-x: hidden;">

  <!------Header Section---->
    <header class="sticky-top">
        <?php get_template_part('template-parts/header/nav'); ?>
    </header>

  <!------Instant Valuation Section Popup Section---->
<?php get_template_part('template-parts/valuationPopup/popup'); ?>