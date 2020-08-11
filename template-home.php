<?php
/*
Template Name: Home
*/
get_header();?>
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">

         <?php
            $args = array(
               'post_type' => 'sliders',
               'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            while($query -> have_posts()){
               $query -> the_post();

               $sub_heading = get_field('sub_title');
               $btn_text = get_field('btn_text');
               $btn_link = get_field('btn_link');
            ?>

            <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url();?>">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <h4><?php echo $sub_heading;?></h4>
                              <h2><?php the_title();?></h2>
                              <?php the_content();?>
                              <?php
                                 if($btn_text){
                              ?>
                                    <a href="<?php echo $btn_link;?>" class="box-btn"><?php echo $btn_text;?> <i class="fa fa-angle-double-right"></i></a>
                              <?php
                                 }
                              ?>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php
            }
            wp_reset_postdata();
         ?>


         </div>
      </section>
      <!-- Slider Area Start -->
      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">

            <?php
               $config = get_option('halim_options');
               if($config['about_sec_title']){
            ?>
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo $config['about_sec_subtitle'];?></span> <?php echo $config['about_sec_title'];?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $config['about_sec_des'];?></p>
               </div>
            </div>
            <?php
               }
            ?>


            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <h4><?php echo $config['about_page_title'];?></h4>
                     </div>
                     <p><?php echo $config['about_page_desc'];?></p>
                     <a href="<?php echo $config['about_page_btn'];?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
               <div class="col-md-5">

               <?php
                  $about_features = $config['about_page_features'];

                  if($about_features){
                     foreach($about_features as $about_feature){
               ?>
                  <div class="single_about">
                     <i class="<?php echo $about_feature['features_icon'];?>"></i>
                     <h4><?php echo $about_feature['features_title'];?></h4>
                     <p><?php echo $about_feature['features_des'];?></p>
                  </div>
               <?php
                     }
                  }
               ?>
                  
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <h4>faq</h4>
                     </div>
                     <div class="accordion" id="accordionExample">

                     <?php
                        $about_accordions = $config['about_faq_list'];
                        if($about_accordions){
                           $i = 0;
                           foreach($about_accordions as $about_accordion){
                           $i++;
                     ?>
                        <div class="card">
                           <div class="card-header" id="heading-<?php echo $i;?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>">
                                    <?php echo $about_accordion['faq_title'];?> 
                                 </button>
                              </h5>
                           </div>
                           <div id="collapse-<?php echo $i;?>" class="collapse <?php if($i == 1){echo 'show';}?>" aria-labelledby="heading<?php echo $i;?>" data-parent="#accordionExample">
                              <div class="card-body">
                                 <?php echo $about_accordion['faq_des'];?> 
                              </div>
                           </div>
                        </div>
                     <?php
                        }
                     }
                     ?>


                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4>our skills</h4>
                     </div>

                  <?php
                     $about_skills = $config['about_skills_list'];
                     if($about_skills){
                        foreach($about_skills as $about_skill){
                     ?>
                     
                     <div class="single-skill">
                        <h4><?php echo $about_skill['skill_title'];?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $about_skill['skill_number'];?>%;" aria-valuenow="<?php echo $about_skill['skill_number'];?>" aria-valuemin="0" aria-valuemax="100"><?php echo $about_skill['skill_number'];?>%</div>
                     </div>
                  <?php
                        }
                     }
                  ?>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->
      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> our services</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">

            <?php
               $args = array(
                  'post_type' => 'services',
                  'posts_per_page' => 6
               );
               $query = new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();

               $services_icon = get_field('service_icon');
               ?>
               <div class="col-lg-4 col-md-6">
                  <div class="single-service">
                     <i class="<?php echo $services_icon;?>"></i>
                     <h4><?php the_title();?></h4>
                     <?php the_content();?>
                  </div>
               </div>
            <?php
               };
               wp_reset_postdata();
            ?>
              


            </div>
         </div>
      </section>
      <!-- Services Area End -->
      
      <?php
         $counters = $config['counter_lists'];
         if($counters){
      ?>
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">

            <?php
               
               foreach($counters as $counter)
               {
            ?>
               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php echo $counter['counter_icon'];?>"></i><span class="counter"><?php echo $counter['counter_number'];?></span><?php echo $counter['counter_title'];?></h4>
                  </div>
               </div>
            <?php
               }
            }
            ?>

            </div>
         </div>
      </section>
      <!-- Counter Area End -->
      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> creative team</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">

               <?php
                  $args = array(
                     'post_type' => 'team',
                     'posts_per_page' => 3,
                     'orderby' => 'menu_order',
                     'order' => 'ASC'
                  );
                  $query = new WP_Query($args);
                  while($query->have_posts()){
                     $query->the_post();

                  $team_facebook = get_field('team_facebook');
                  $team_twitter = get_field('team_twitter');
                  $team_linkedin = get_field('team_linkedin');
                  $team_google = get_field('team_google');
                  ?>

                  <div class="col-md-4">
                     <div class="single-team">
                        <?php the_post_thumbnail();?>
                        <div class="team-hover">
                           <div class="team-content">
                              <h4><?php the_title();?> <span><?php the_content();?></span></h4>
                              <ul>
                                 <?php
                                    if($team_facebook){
                                 ?>
                                 <li><a href="<?php echo $team_facebook;?>"><i class="fa fa-facebook"></i></a></li>
                                 <?php     
                                    }
                                 ?>

                                 <?php
                                    if($team_twitter){
                                 ?>
                                 <li><a href="<?php echo $team_twitter;?>"><i class="fa fa-twitter"></i></a></li>
                                 <?php     
                                    }
                                 ?>

                                 <?php
                                    if($team_linkedin){
                                 ?>
                                 <li><a href="<?php echo $team_linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
                                 <?php     
                                    }
                                 ?>

                                 <?php
                                    if($team_google){
                                 ?>
                                 <li><a href="<?php echo $team_google;?>"><i class="fa fa-google-plus"></i></a></li>
                                 <?php     
                                    }
                                 ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                  };
               ?>


            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> what client say</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">
                     
                  <?php
                     $args = array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => 6
                     );
                     $query = new WP_Query($args);
                     while($query->have_posts()){
                        $query->the_post();

                     $name = get_field('name');
                     $designation = get_field('designation');
                     $description = get_field('description');
                     ?>
                        <div class="single-testimonial">
                           <div class="testi-img">
                              <?php the_post_thumbnail();?>
                           </div>
                           <p>" <?php echo $description;?> "</p>
                           <h4><?php echo $name;?> <span><?php echo $designation;?></span></h4>
                     </div>
                  <?php
                     };
                     wp_reset_postdata();
                  ?>
                     
                     


                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->
      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> latest news</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">

            <?php
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3
               );
               $query = new WP_Query($args);
               while($query->have_posts()){
                  $query->the_post();
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
               wp_reset_postdata();
            ?>
               


            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
<?php get_footer();?>