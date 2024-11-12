<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="./output.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <?php wp_head() ?>
  </head>
  <body>

  <?php get_header() ?>


    <!-- BANNER -->
    <section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php the_field('banner_title') ?></h1>
          <div class="banner__grid">
            <div class="banner__main">

            <?php

          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 1,
            
          );
          $newQuery = new WP_Query($args);
          ?>

          <?php if($newQuery->have_posts()) :while($newQuery->have_posts()) :$newQuery->the_post(); ?>


              <div class="banner__story">
                <?php
              if(has_post_thumbnail()) :
                the_post_thumbnail();
              endif;
              ?>
                <div class="banner__story__content">
                  <small class="opacity-70"><?php the_field('banner_date'); ?></small>
                  <h2><?php the_title(); ?></h2>
                  <p>
                    <?php the_excerpt(); ?>
                  </p>
                  <a href="<?php the_field('banner_btn_link') ?>"><?php the_field('banner_btn_text') ?></a>
                </div>
              </div>

               <?php
          endwhile;
          else :
            echo "No Available Content";
          endif;
          wp_reset_postdata();
          ?>

            </div>

            <div class="banner__sidebar">

           <?php

          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 4,
            'offset'         => 1,
          );
          $newQuery = new WP_Query($args);
          ?>

          <?php if($newQuery->have_posts()) :while($newQuery->have_posts()) :$newQuery->the_post(); ?>

              <div class="card__sm">
                <!-- <img src="<?php the_field('small_image') ?>" alt="" /> -->
                 <?php
              if(has_post_thumbnail()) :
                the_post_thumbnail();
              endif;
              ?>
                <div class="card__sm__content">
                  <small><?php the_field('banner_date') ?></small>
                  <h3><?php the_title(); ?></h3>
                  <a href="<?php the_field('banner_btn_link') ?>"><?php the_field('banner_btn_text') ?></a>
                </div>
              </div>

            <?php
          endwhile;
          else :
            echo "No Available Content";
          endif;
          wp_reset_postdata();
          ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- LATEST -->
    <section class="latest">
      <div class="container">
        <h2><?php the_field('latest_title') ?></h2>
        <div class="latest__wrapper">

        <?php 

        if(have_rows('latest_story')) :
            while(have_rows('latest_story')): the_row();
            
        ?>


          <div class="card__md">
            <img src="<?php echo get_sub_field('latest_img'); ?>" alt="" />
            <div class="card__md__content">
              <ul>
                <li><small><?php echo get_sub_field('latest_date') ?></small></li>
                <li><small><?php echo get_sub_field('latest_category') ?></small></li>
              </ul>
              <h3>
                <?php echo get_sub_field('latest_title') ?>
              </h3>

              <p>
                <?php echo get_sub_field('latest_description') ?>
              </p>
            </div>
          </div>

                  <?php

        endwhile;
        else :
            echo "No Content yet.";
        endif;
        ?>

        </div>
      </div>
    </section>

    <!-- FEATURE -->
    <section class="feature">
      <div class="feature__content">
        <h2><?php the_field('feature_title') ?></h2>
        <h3 class="block__header">
          <?php the_field('feature_text') ?>
        </h3>
        <p>
          <?php the_field('feature_message') ?>
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          <img src="<?php the_field('feature_image') ?>" alt="" />
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">

          <?php 

        if(have_rows('feature_card')) :
            while(have_rows('feature_card')): the_row();
            
        ?>



            <div class="card__lg">
              <img src="<?php echo get_sub_field('feature_card_image'); ?>" alt="" />
              <div class="card__lg__content">
                <small><?php echo get_sub_field('feature_card_date'); ?></small>
                <h3>
                  <?php echo get_sub_field('feature_card_title'); ?>
                </h3>
                <p>
                  <?php echo get_sub_field('feature_card_text'); ?>
                </p>
              </div>
            </div>

              <?php

        endwhile;
        else :
            echo "No Content yet.";
        endif;
        ?>


          </div>
          <div class="feature__sidebar">

          <?php

          $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'tax_query'      => array(
              array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'feature-story'
              )
            )
            
          );
          $newQuery = new WP_Query($args);
          ?>

          <?php if($newQuery->have_posts()) :while($newQuery->have_posts()) :$newQuery->the_post(); ?>


            <div class="card__mini">
              <small><?php the_date(); ?></small>
              <h4>
                <?php the_title(); ?>
              </h4>
            </div>

              <?php
          endwhile;
          else :
            echo "No Available Content";
          endif;
          wp_reset_postdata();
          ?>

            
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ?>

    <!-- SCRIPT -->
    <script src="./js/toggle.js"></script>
  </body>
</html>
