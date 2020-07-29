<?php get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h4 class="page-title">
                    <?php
                        printf('Search For: %s', get_search_query());
                    ?>
                </h4>
            </div>
        </div>
    </div>
</section>
<section class="search-page pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <?php 
                    if(have_posts()){
                    while(have_posts()){
                        the_post();
                    ?>
                    <div class="col-md-6">
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
                    }
                the_posts_pagination();
                wp_reset_postdata();
                }
                else{
                    echo '<h2>Not Found!</h2>';
                }
                ?>
                </div>
            </div>
            <div class="col-xl-4">
                <?php dynamic_sidebar('main_sidebar');?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>