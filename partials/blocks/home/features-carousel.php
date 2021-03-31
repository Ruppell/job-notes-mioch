<?php
/**
 * Field Structure:
 *
 * - parent_repeater (Repeater)
 *   - parent_title (Text)
 *   - child_repeater (Repeater)
 *     - child_title (Text)
 */

 ?>
<section class="featured-content">

<!-- **********
  Nav icons
************* -->

 <div class="splide" id="thumbnail-slider">
  <div class="splide__track">
    <ul class="splide__list">
      <?php
      if( have_rows('features-carousel-list-items') ):
          while( have_rows('features-carousel-list-items') ) : the_row();
              // Get parent value.
              $slide_title = get_sub_field('title');
              $icon = get_sub_field('icon');
              ?>
                <li class="splide__slide">
                  <div class="icon-title">
                    <i class="<?php echo $icon; ?> icon"></i>
                    <p class="nav-title"><?php echo $slide_title; ?></p>
                  </div>
                </li>
              <?php
          endwhile;
      endif;
       ?>
    </ul>
  </div>
 </div>

<!-- **********
  Content
************* -->
 <div class="splide" id="content-slider">
  <div class="splide__track">
    <ul class="splide__list">

      <?php
     if( have_rows('features-carousel-list-items') ):
         while( have_rows('features-carousel-list-items') ) : the_row();

      ?>
      <li class="splide__slide">
        <?php
          // Loop over sub repeater rows.
          if( have_rows('details') ):
              while( have_rows('details') ) : the_row();
                  // Get sub value.
                  $heading = get_sub_field('heading');
                  $p_text = get_sub_field('text');
                  $details_icon = get_sub_field('details-icon');
                  $url = get_sub_field('url');
                  $image = wp_get_attachment_image_src( get_sub_field('image') ,'full') ;
                  $image = $image[0];

                  ?>
                  <div class="row feature-item">
                      <div class="col-md-6 item-details item-content">
                        <div class="bg-color-block"></div>
                        <div class="content-container">
                          <h3><?php echo $heading; ?></h3>
                          <p><?php echo $p_text; ?></p>
                          <div class="row action-row">
                            <div class="col-md-6">
                              <i class="<?php echo $details_icon;?> content-icon"></i>
                            </div>
                            <div class="col-md-6 content-btn-container">
                              <a class="btn btn-outline-success content-btn" href="<?php echo $url; ?>">Action <i class="fas fa-chevron-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 item-image item-content" style="background-image:url('<?php echo $image; ?>');">

                      </div>
                  </div>
                <?php
              endwhile;
          endif;
         ?>
      </li>
      <?php
         endwhile;
     endif;
     ?>
    </ul>
  </div>
 </div>

</section>



<?php
