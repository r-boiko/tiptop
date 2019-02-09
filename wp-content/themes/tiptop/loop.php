<?php
/**
 * Запись в цикле (loop.php)
 */
?>
<div class="news-item">
    <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
            <img src="<?php the_post_thumbnail_url(full); ?>" alt="">
        </div>
        <div class="col-md-8">
            <p class="article-data">от <?php the_author(); ?> | <?php echo get_the_date('j F'); ?></p>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>