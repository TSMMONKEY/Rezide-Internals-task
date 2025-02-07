<section class="about text-center mt-5 pt-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg" alt="" width="50px" />
        <h2 class="mt-3"><?php the_field('About_Title')?></h2>
        <p>
          <?php the_field('sub_header_text')?>
        </p>
        <ul class="row about-more-info mt-5">
          <?php
            $aboutCards = get_field('about_cards');;
            foreach ($aboutCards as $card) {
                // Display property details
                echo'
                  <li class="col-3 first-li">
                <img
                  <img src="'. $card['image'] .'"
                  alt=""
                />
                <h3>'. $card['header'] .'</h3>
                <p>'. $card['pargraph'] .'</p>
                  </li>
                ';}?>

        </ul>
      </section>
