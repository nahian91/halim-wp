<?php get_header();?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                <?php
                    while(have_posts()){
                        the_post();
                ?>
                    <h4><?php the_title();?></h4>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li> / 
                        <li><?php the_title();?></li>
                    </ul>
                <?php
                    }
                ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
               <?php
                  while(have_posts()){
                     the_post();
                     get_template_part('template-parts/content');
                  };
               ?>
            </div>
            <div class="col-xl-4">
                <?php dynamic_sidebar('main_sidebar');?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>