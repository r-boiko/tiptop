<?php
/**
 * Template Name: SEO
 * Template Post Type: post
 */
get_header(); // подключаем header.php; ?>


    <main>
        <div class="h1-block bg-light-grey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/" class="text-link"><i class="icon-home-solid"></i>Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 text-right">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="typical-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-section">
                            <p class="cat-name">Об услуге</p>
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="text-section var">
                            <?php the_field('about_service'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bottom-line-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="typical-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-section">
                            <?php $count = 0; while ( have_rows('content_post') ) : the_row(); $count++; if($count%2 != 0) { ?>
                                <div class="img-wrapper aside-right w5-12">
                                    <img src="<?php the_sub_field('content_post_image'); ?>" alt="">
                                </div>
                                <?php the_sub_field('content_post_text'); ?>
                                <?php } else { ?>
                                <div class="img-wrapper">
                                    <img src="<?php the_sub_field('content_post_image'); ?>" alt="">
                                </div>
                                <?php the_sub_field('content_post_text'); ?>
                            <?php } endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php echo get_template_part('template-parts/first-order'); ?>
        <section class="portfolio typical-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <div class="text-section">
                            <p class="cat-name">Наши клиенты</p>
                            <h2><?php the_field('feedback_title'); ?></h2>
                            <p class="subtext"><?php the_field('feedback_sub_title'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                        <div class="faces-slider">
                            <?php while ( have_rows('feedback') ) : the_row(); ?>
                                <div class="faces-slider__item">
                                    <div class="title">
                                        <h4><?php the_sub_field('feedback_name'); ?></h4>
                                        <p class="subtext"><?php the_sub_field('feedback_position'); ?></p>
                                    </div>
                                    <div class="img-wrapper bg-layout-cover" style="background-image: url(<?php the_sub_field('feedback_photo'); ?>);"></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonials-slider">
                            <?php while ( have_rows('feedback') ) : the_row(); ?>
                                <div class="testimonials-slider__item">
                                    <div class="text-section">
                                        <div class="img-wrapper aside-right w5-12">
                                            <img src="<?php the_sub_field('feedback_image'); ?>" alt="">
                                        </div>
                                        <?php the_sub_field('feedback_text'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); // подключаем footer.php ?>