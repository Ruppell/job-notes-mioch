<?php

    $taxonomies = get_field('taxonomy_terms');
    $post_count = get_field('posts-count');
    $section_heading = get_field('section-heading');
    $archive_url = get_field('archive-url');

    $args = array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => $post_count,
            'orderby'        => 'date',
            'order'          => 'ASC',
            'cat'            =>  $taxonomies
    );

    $loop = new WP_Query( $args );

 ?>

<section class="posts-carousel">
<div class="row">
  <div class="col-md-6">
    <?php if ($section_heading) : ?>
      <p class="section-heading"><?php echo $section_heading ?></p>
    <?php endif; ?>
  </div>
  <div class="col-md-6">
    <?php if ($archive_url) : ?>
      <a class="btn btn-success btn-custom" href="<?php echo $archive_url; ?>">View All <i class="fab fa-chevron-right"></i> </a>
    <?php endif; ?>
  </div>
</div>


<div class="splide" id="posts-slider">
 <div class="splide__track">
   <ul class="splide__list">
     <?php
     if( $loop->have_posts() ):
         while ( $loop->have_posts() ) : $loop->the_post();
             // Get parent value.
             $slide_title = get_the_title();
             $excerpt = get_the_excerpt();
             $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
             $post_url = get_the_permalink();
             ?>
               <li class="splide__slide">
                 <img src="<?php echo $image_url; ?>" class="post-image" alt="">
                 <div class="post-content">
                   <h5><?php echo $slide_title; ?></h5>
                   <p><?php echo $excerpt; ?></p>
                   <a href="<?php echo $post_url; ?>" class="post-link"> Read more </a>
                 </div>
               </li>
             <?php
         endwhile;
     endif;
      ?>
   </ul>
 </div>
</div>

</section>
