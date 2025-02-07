<section class="instant-valuation">
        <div class="logo-with-no-text mt-3 mb-3">
          <div class="black-line"></div>
          <img
         src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="35px"
          />
          <div class="black-line"></div>
        </div>
        <div class="row image-frame">
          <div class="col-12 row">
            <div class="frame col-6 p-0">
              <img
                src="<?php echo get_field('instant_valuation_first_card')['image']; ?>"
                alt=""
                width="100%"
                height="100%"
              />
            </div>
            <div class="first-frame-info col-6 d-flex">
              <h2 Class="mb-4"><?php echo get_field('instant_valuation_first_card')['header']; ?></h2>
              <p class="text-start">
              <?php echo get_field('instant_valuation_first_card')['paragraph']; ?>
              </p>
              <ul class="p-0">
                <?php
                    $listOptions = get_field('instant_valuation_first_card')['list_section'];
                    foreach ($listOptions as $listOption) {
                        // Display property details
                        echo '
                <li class="my-4" style="background-image: url(' . esc_url(get_template_directory_uri()) . '/assets/img/icons/check-box.svg);">
                 ' . $listOption . '
                </li>
                ';
                }?>
                <li class="nav-item mt-5" style="list-style: none; position: relative;">
                  <a class="btn btn-warning main-btn" href="#"
                    >Instant Valuation
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exit.svg" alt="" width="15px"
                  /></a>
                </li>
              </ul>
            </div>
          </div>
          <?php
              $cards = get_field('instant_valuation_cards');
              foreach ($cards as $card) {
                  // Display property details
                  echo 
                    '<div class="col-6 property-info mt-5">
                        <div class="card">
                          <img
                            src="' . $card['image'] . '"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <h5 class="card-title my-3">' . $card['header'] . '</h5>
                            <p class="card-text mb-4">
                            ' . $card['paragraph'] . '
                            </p>
                            <ul class="p-0">
                            
                                <li class="my-3" style="background-image: url(http://localhost/wp-content/themes/Rezide-Internals/assets/img/icons/check-box-green.svg);">
                                ' . $card['list_section']['first_list_section'] . '
                                </li>
                                <li style="background-image: url(http://localhost/wp-content/themes/Rezide-Internals/assets/img/icons/check-box-green.svg);">
                                ' .  $card['list_section']['second_list_section'] . '
                                </li>
                            </ul>
                            <div class="col-12 position-relative mt-5 pt-3 mb-3">
                              <a href="#" class="btn btn-primary green-btn position-absolute bottom-0 end-0">Start Selling</a>
                            </div>
                          </div>
                        </div>
                    </div>
          ';
          }?>
        </div>
      </section>