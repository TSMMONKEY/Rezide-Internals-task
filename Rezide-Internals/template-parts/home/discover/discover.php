<section class="descover-more row my-5">
        <div class="col-6 p-0">
            <div class="col-12">
                <img
                <img src="<?php the_field('discover_first_image'); ?>"
                alt=""
                width="100%"
                />
            </div>
            <div class="row mt-3">
        <?php
            $discoverImages = get_field('discover_doorstep_section');
            foreach ($discoverImages as $discoverImage) {
                // Display property details
                // var_dump(value: $discoverImage); // Debugging line
                echo '
                    <div class="col-4">
                        <img
                            <img src="' . $discoverImage . '"
                            alt=""
                            width="100%"
                        />
                    </div>
                ';
        }?>
             </div>
        </div>
        <div class="col-6 second-section position-relative">
            <h2><?php the_field('discover_header'); ?></h2>
                <p style="text-align: left">
                <?php the_field('discover_paragraph'); ?>
                </p>
                <ul>

            <?php
                $secondSections = get_field('second_discover_section');
                foreach ($secondSections as $secondSection) {
                    // Display property details
                    // var_dump(value: $secondSection); // Debugging line
                    echo '
                                <li class="list-Style" style="background-image: url(http://localhost/wp-content/themes/Rezide-Internals/assets/img/icons/check-box-green.svg);">
                                <p style="text-align: left">
                                    ' . $secondSection['first_list_option'] . '
                                </p>
                                </li>
                                <li class="list-Style" style="background-image: url(http://localhost/wp-content/themes/Rezide-Internals/assets/img/icons/check-box-green.svg);">
                                <p style="text-align: left">
                                     ' . $secondSection['second_list_option'] . '
                                </p>
                                </li>
                                <li class="list-Style" style="background-image: url(http://localhost/wp-content/themes/Rezide-Internals/assets/img/icons/check-box-green.svg);">
                                <p style="text-align: left">
                                    ' . $secondSection['third_list_option'] . '
                                </p>
                                </li>
                        ';
            }?>
            </ul>
          <div class="row w-100 position-absolute" style="bottom: 5px; padding: 4%">
            <div class="col-6">
              <a class="navbar-brand" href="#"
                ><img
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-text.png"
                  alt=""
                  class="logo"
                  width="97px"
                  height="97px"
              /></a>
            </div>
            <div class="col-6 btn-section">
              <a href="/" class="btn btn-warning main-btn w-100">Buy A Home</a>
            </div>
          </div>
        </div>
      </section>