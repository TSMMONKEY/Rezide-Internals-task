<section class="hero-section" style="background-image: url('<?php the_field('background_image')?>')">
      <?php if (isset($_GET['success']) && $_GET['success'] === 'true'): ?>
          <div class="alert alert-success" id="success-message" role="alert" style="height: 81px;z-index: 1000000;top: 122px;width: 95%;margin: 0 auto;">
              <h4 class="alert-heading">Thank you for your submission!</h4>
              <p>Your message has been successfully submitted. We'll get back to you soon.</p>
          </div>
      <?php endif; ?>
      <div class="card-img-overlay"></div>
      <div class="hero-section-info">
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