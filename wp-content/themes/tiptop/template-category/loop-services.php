<?php
/**
 * Запись в цикле (services.php)
 */ 
?>
<div class="col-md-6 col-lg-4">
    <div class="tab flx flex-wrap flx-align-cont-sbtw">
        <div class="text-elem">
            <h5><?php the_title(); ?></h5>
            <p><?php the_field('sub_title'); ?></p>
        </div>
        <button type="button" class="black-btn"><a href="<?php the_permalink(); ?>">Выбрать услугу</a></button>
        <?php the_field('svg'); ?>
    </div>
</div>