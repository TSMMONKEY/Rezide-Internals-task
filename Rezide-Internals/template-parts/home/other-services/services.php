<section class="other-services my-5" style="background-image: url('<?php the_field('more_services_background_image'); ?>');">
        <div class="logo-with-no-text pt-5 mb-3">
          <div class="black-line"></div>
          <img
         src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="35px"
          />
          <div class="black-line"></div>
        </div>
        <h2 class="text-white text-center"><?php the_field('more_services_section_header'); ?></h2>

        <div class="row">
        <?php
            $moreServices = get_field('two_section_cards');
            foreach ($moreServices as $moreService) {
                // Display property details
                // var_dump($moreService["list_options"]); // Debugging line
                echo
                '<div class="col-6">
                        <h3>' . $moreService['header'] . '</h3>
                        <p style="text-align: left">
                       ' . $moreService['paragraph'] . '
                        </p>
                        <ul>
                        <li class="list-Style" style="background-image: url(' . get_template_directory_uri() . '/assets/img/icons/check-box-green.svg);">
                            ' .
                $moreService['list_options']['first_list_option']// Accessing the first list option
                . '
                        </li>
                        <li class="list-Style mt-3" style="background-image: url(' . get_template_directory_uri() . '/assets/img/icons/check-box-green.svg);">
                            ' .
                $moreService['list_options']['second_list_option']// Accessing the first list option
                . '
                        </li>
                        </ul>
                        <div class="more-info-btn mt-3">
                        <a class="btn btn-warning main-btn" href="/valuation.php"
                            >Instant Valuation
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exit.svg" alt="" width="15px"
                        /></a>
                        </div>
                    </div>';
            }
        ?>
        </div>
        <div class="logo-with-no-text mt-3 pb-5">
          <div class="black-line"></div>
          <img
         src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="35px"
          />
          <div class="black-line"></div>
        </div>
      </section>