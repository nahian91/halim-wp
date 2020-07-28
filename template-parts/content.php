    <h2><?php the_title();?></h2>
    <?php the_post_thumbnail();?>
    <?php the_content();?>
    <div class="comments">
        <?php comments_template();?>
    </div>