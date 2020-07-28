<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">

            <div class="single-footer footer-logo">
               <?php dynamic_sidebar('footer_sidebar1');?>
            </div>

         </div>
         <div class="col-lg-2 col-md-6">
            <div class="single-footer">
               <?php dynamic_sidebar('footer_sidebar2');?>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer">
               <?php dynamic_sidebar('footer_sidebar3');?>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <?php dynamic_sidebar('footer_sidebar4');?>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p>&copy; All Rights Reserved 2020</p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-youtube"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</footer>
<?php wp_footer();?>
</body>
</html>