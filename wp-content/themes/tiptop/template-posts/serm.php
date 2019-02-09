<?php
/**
 * Template Name: SERM
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
                            <h4 class="mb">Описание проекта</h4>
                            <?php the_field('serm_description'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="serm-slider-wrapper">
            <div class="container">
                <div class="row row-block">
                    <div class="serm-slider">
                        <?php while ( have_rows('slider_works') ) : the_row(); ?>
                            <div class="serm-slider__item">
                                <div class="img-wrapper bg-layout-cover" style="background-image: url(<?php the_sub_field('slider_works_image'); ?>);"></div>
                                <h4 class="mb"><?php the_sub_field('slider_works_title'); ?></h4>
                                <p class="descr"><?php the_sub_field('slider_works_description'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="typical-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-section">
                            <?php the_field('serm_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="work-preview">
            <div class="container">
                <?php while ( have_rows('block_works') ) : the_row(); ?>
                    <div class="img-with-descr flx align-items-center flex-wrap">
                        <div class="img-wrapper bg-layout-cover flex-shrink-0" style="background-image: url(<?php the_sub_field('block_works_image'); ?>);"></div>
                        <div class="descr-block flex-shrink-0">
                            <h3><?php the_sub_field('block_works_title'); ?></h3>
                            <p><?php the_sub_field('block_works_description'); ?></p>
                            <a href="<?php the_sub_field('block_works_link'); ?>" class="more-link"><i class="icon-right"></i></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>

<?php get_footer(); // подключаем footer.php ?>