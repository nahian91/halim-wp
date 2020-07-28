<?php get_header();?>
      <!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_archive_title();?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li> / 
                        <li><?php the_archive_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">

            <?php 
               $query = new WP_Query($args);
               while(have_posts()){
                  the_post();
               ?>
               <div class="col-md-4">
                  <div class="single-blog">
                     <?php the_post_thumbnail();?>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><?php the_category(', ');?></li> 
                              <li><a href="#"><?php echo get_the_date();?></a></li>
                              <li><a href="#"><?php echo get_the_author();?></a></li>
                           </ul>
                        </div>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
            <?php
            
           posts_nav_link(' — ',('&laquo; Previous Posts'), ('Next Posts &raquo;'));
               }
               wp_reset_postdata();
            ?>
            </div>
      </section>
      <!-- Latest News Area End -->
<?php get_footer();?>