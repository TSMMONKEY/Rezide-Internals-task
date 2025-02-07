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