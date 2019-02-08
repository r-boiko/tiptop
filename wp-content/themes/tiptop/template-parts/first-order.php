<?php $home_id = 5; ?>
<section class="black-insert typical-section bg-black">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6">
                <h2><?php echo get_field('first_order_title', $home_id); ?></h2>
                <p class="subp"><?php echo get_field('first_order_sub_title', $home_id); ?></p>
            </div>
            <div class="col-lg-5 col-xl-4 offset-xl-2 text-center text-lg-right">
                <a href="tel:<?php echo get_field('first_order_phone', $home_id); ?>" class="link-btn"><i class="icon-phone"></i><span><?php echo get_field('first_order_phone', $home_id); ?></span></a>
            </div>
        </div>
    </div>
</section>