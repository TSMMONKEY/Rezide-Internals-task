<section class="featured-properties">
        <div class="logo-with-no-text mt-3 mb-3">
          <div class="black-line"></div>
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="35px"
          />
          <div class="black-line"></div>
        </div>
        <h2 class="text-center"><?php the_field('featured_properties_header'); ?></h2>
        <p class="text-center">
        <?php the_field('featured_properties_title'); ?>
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php
              $featured_properties = get_field('featured_properties_cards');
              foreach ($featured_properties as $property) {
                  // Display property details
                  echo '<div class="col">
                <div class="card">
                  <img
                    src="' . esc_url($property['image_url']) . '"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <div class="row">
                        <h4 class="col-6">' . esc_html($property['property_title']) . '</h4>
                        <h4 class="col-6 text-end">' . esc_html($property['price']) . '</h4>
                    </div>
                    <div class="row">
                      <h4 class="col-6">' . esc_html($property['location']) . '</h4>
                      <h4 class="col-6 text-end" style="color: #dcbf7a;">' . esc_html($property['number_of_rooms']) . '<img
                    src="' . esc_url(get_template_directory_uri() . '/assets/img/icons/bed-icon.svg') . '"
                    class="card-img-top"
                    alt="..."
                    style="width: 30px;"                  /></h4>
                    </div>
                  </div>
                </div>
              </div>';
              }
          ?>
          <a href="/" class="btn btn-warning main-btn mt-5">View more Homes</a>
        </div>
      </section>