<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * Template Name: Page
 */
get_header(); // подключаем header.php ?>
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
                            <?php while ( have_rows('page_content') ) : the_row(); ?>
                                <div class="img-wrapper aside-right w7-12">
                                    <img src="<?php the_sub_field('page_content_image'); ?>" alt="">
                                </div>
                                <?php the_sub_field('page_content_text'); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); // подключаем footer.php ?>