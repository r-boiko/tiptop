<?php
/**
 * Template Name: Advertising
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
                    <div class="col-12">
                        <div class="text-section">
                            <?php while ( have_rows('content_block') ) : the_row(); ?>
                                <div class="img-wrapper aside-right w7-12">
                                    <img src="<?php the_sub_field('content_block_image'); ?>" alt="">
                                </div>
                                <?php the_sub_field('content_block_text'); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="example-slider-section typical-section">
            <div class="container">
                <div class="row text-sm-center">
                    <div class="col-12">
                        <div class="text-section">
                            <p class="cat-name">Проекты</p>
                            <h2><?php the_field('projects_title'); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="example-slider-wrapper">
                <div class="container">
                    <div class="example-slider">
                        <?php while ( have_rows('projects_slider') ) : the_row(); ?>
                            <div class="example-slider__item">
                                <div class="img-wrapper" style="background: url('<?php the_sub_field('projects_slider_image'); ?>');">
                                    <div class="adv">
                                        <p class="cat-name"><?php the_sub_field('projects_slider_description'); ?></p>
                                        <p class="adv-title">Яндекс Реклама.</p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); // подключаем footer.php ?>