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

    <section class="hero-section" style="background-image: url('<?php the_field('background_image')?>')">
      <div class="card-img-overlay"></div>
      <di class="hero-section-info">
        <h1 class="card-title text-center">
          <?php
              $title = get_field('page_title');
              $words = explode(' ', $title);
              echo implode(' ', array_slice($words, 0, 3)) . '<br>' . implode(' ', array_slice($words, 3));
          ?>
        </h1>
        <div class="hero-section-logo my-3">
          <div class="line"></div>
          <img
         src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="20px"
          />
          <div class="line"></div>
        </div>
        <p class="card-text mt-3"><?php the_field('slogen')?></p>
        <div class="card-text mb-3">
          <a href="/" class="btn btn-warning main-btn">Sell Your Home</a>
          <a href="/" class="btn btn-warning main-btn">Buy A Home</a>
        </div>
        <div class="arrow-down my-4 text-center">
          <a href="#about"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-down.svg" alt="" /></a>
        </div>
        <div class="search">
          <form class="input-group">
            <input
              type="text"
              class="form-control align-left"
              placeholder="Search by postcode or area......"
              aria-label="Search by postcode or area with three button addons"
            />
            <button
              class="btn btn-outline-secondary dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Min Beds
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
            <button
              class="btn btn-outline-secondary dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Min Price
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
            <button
              class="btn btn-outline-secondary dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Max Price
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>

            <button class="btn btn-outline-secondary search-btn" type="button">
              <img src="<?php echo get_template_directory_uri('template_directory') ?>/assets/img/icons/search-alt.svg" alt="">
            </button>
          </form>
        </div>
        <div id="about"></div>
      </section>
    </section>

    <section class="main  pb-3">
      <!----
 --
 --About Section Style
 --
---->

      <section class="about text-center mt-5 pt-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg" alt="" width="50px" />
        <h2 class="mt-3"><?php the_field('About_Title')?></h2>
        <p>
          <?php the_field('sub_header_text')?>
        </p>
        <ul class="row about-more-info mt-5">
          <li class="col-3 first-li">
            <img
              <img src="<?php the_field('first_icon')?>"
              alt=""
              width="35px"
            />
            <h3><?php the_field('first_icon_header')?></h3>
            <p><?php the_field('first_icon_text')?></p>
          </li>
          <li class="col-3">
            <img
              <img src="<?php the_field('second_icon')?>"
              alt=""
              width="35px"
            />
            <h3><?php the_field('second_icon_header')?></h3>
            <p><?php the_field('second_icon_text')?></p>
          </li>
          <li class="col-3">
            <img
              <img src="<?php the_field('third_icon'); ?>"
              alt=""
              width="35px"
            />
            <h3><?php the_field('third_icon_header'); ?></h3>
            <p>error<?php the_field('third_icon_text'); ?></p>
          </li>
          <li class="col-3">
            <img src="<?php the_field('fourth_icon'); ?>" alt="" width="35px" />
            <h3><?php the_field('fourth_icon_header'); ?></h3>
            <p><?php the_field('fourth_icon_text'); ?></p>
          </li>
        </ul>
      </section>

      <!----
 --
 --Instant Valuation Section
 --
 --@Package Rezide
---->

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
          <div class="col-6 property-info mt-5">
            <div class="card">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/third-framed-image.webp"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title my-3"><?php the_field('thirdFrameHeader'); ?></h5>
                <p class="card-text mb-4">
                  <?php the_field('third_text_field')?>
                </p>
                <ul class="p-0">
                  <li class="my-3" style="background-image: url('http://localhost/wp-content/themes/Rezide-Internals/assets/img/icons/check-box-green.svg');">
                  <?php the_field('first_list_info_third_Valuation'); ?>
                  </li>
                  <li style="background-image: url('http://localhost/wp-content/themes/Rezide-Internals/assets/img/icons/check-box-green.svg');">
                    <?php the_field('second_list_info_third_Valuation'); ?>
                </ul>
                <div class=" col-12 position-relative mt-5 pt-3 mb-3">
                    <a href="#" class="btn btn-primary green-btn position-absolute bottom-0 end-0">Start Buying</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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

      <section class="ratings text-center">
        <div class="logo-with-no-text mt-3 mb-3">
          <div class="black-line"></div>
          <img
         src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="35px"
          />
          <div class="black-line"></div>
        </div>

        <h2><?php the_field('comments_header')?></h2>
        <p class="mb-lg-5 pb-lg-4">
        <?php the_field('comments_title')?>
        </p>
        <div class="row mt-lg-5">
        <?php
            $comments = get_field('comments');
            foreach ($comments as $comment) {
                // Display property details
                echo
                '<div class="col-6 mt-sm-4 text-center">
            <div class="gold-stars text-center">
              <img src=" ' . get_template_directory_uri() . ' /assets/img/icons/gold-star.svg" alt="" width="30px" />
              <img src=" ' . get_template_directory_uri() . ' /assets/img/icons/gold-star.svg" alt="" width="30px" />
              <img src=" ' . get_template_directory_uri() . ' /assets/img/icons/gold-star.svg" alt="" width="30px" />
              <img src=" ' . get_template_directory_uri() . ' /assets/img/icons/gold-star.svg" alt="" width="30px" />
              <img src=" ' . get_template_directory_uri() . ' /assets/img/icons/gold-star.svg" alt="" width="30px" />
            </div>
            <h3 class="text-center">' . $comment['comment_header'] . '</h3>
            <p>
             ' . $comment['comments_text'] . '
            </p>
            <h6 class="text-center">
                ' . $comment['clients_name'] . '
            </h6>
          </div>';
            }
        ?>
        </div>
      </section>

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

      <section clas class="contact mt-5">
        <div class="logo-with-no-text mt-3 mb-3">
          <div class="black-line"></div>
          <img
         src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="35px"
          />
          <div class="black-line"></div>
        </div>

        <div class="row contact-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/map.png');">
          <div class="col-6 form-section p-5 text-white">
            <h2 class="text-white">Got a question?</h2>
            <div class="form-floating">
              <input
                type="name"
                class="form-control"
                id="floatingName"
                placeholder="Name"
              />
              <label for="floatingName">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="tel"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Phone</label>
            </div>
            <div class="form-floating">
              <textarea
                class="form-control"
                placeholder="Leave a comment here"
                id="floatingTextarea2"
                style="height: 100px"
              ></textarea>
              <label for="floatingTextarea2">Message</label>
            </div>
            <div class="form-check my-4">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
              <label class="form-check-label text-white" for="flexCheckDefault">
                I agree to the terms in your
                <a href="#" class="text-white fw-bold">Privacy Policy</a>
              </label>
            </div>
            <a href="/" class="btn btn-warning main-btn">SEND</a>
          </div>
          <div class="col-6">
            <a href="/" class="btn btn-warning main-btn main-green-btn">Directions</a>
          </div>
        </div>
      </section>

      <section class="blog text-center my-5">
        <div class="logo-with-no-text my-5">
          <div class="black-line"></div>
          <img
         src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-with-no-text.svg"
            alt=""
            width="35px"
          />
          <div class="black-line"></div>
        </div>
        <h2>Latest news and information</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
          obcaecati distinctio vel nisi totam numquam accusantium consequuntur,
          quas et. Suscipit deserunt possimus, sed fuga nemo eaque nulla
          incidunt similique explicabo.
        </p>
        <div class="row my-5">
            <?php
                $args = [
                    'post_type'      => 'post',
                    'posts_per_page' => 3, // Display the latest 3 posts
                ];
                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                    ?>
								                <div class="col-4">
								                    <div class="card" style="width: 100%">
								                    <img
								                        <img src="<?php the_post_thumbnail_url('medium'); ?>"
								                        class="card-img-top"
								                        alt="..."
								                    />
								                    <div class="card-body">
								                        <p class="card-text">
								                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
								                    </div>
								                    </div>
								                </div>
								            <?php
                                                    endwhile;
                                                    wp_reset_postdata();
                                                else:
                                                    echo '<p>No posts found.</p>';
                                                endif;
                                            ?>
        </div>
        <a href="/" class="btn btn-warning main-btn">Read more Blogs</a>
      </section>
    </section>

<?php get_footer(); ?>