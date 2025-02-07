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