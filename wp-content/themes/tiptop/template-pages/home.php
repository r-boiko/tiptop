<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.02.2019
 * Time: 13:31
 * Template Name: Home
 */
get_header(); // подключаем header.php
$page_id = get_the_ID(); ?>

    <main>
        <section class="typical-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-section">
                            <div class="img-wrapper aside-right w5-12">
                                <img src="<?php echo get_field('image_home', $page_id); ?>" alt="">
                            </div>
                            <h2><?php echo get_field('title_home', $page_id); ?></h2>
                            <?php echo get_field('description_home', $page_id); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typical-section bg-light-grey">
            <div class="container">
                <h3 class="mb">Выбери свой продукт</h3>
                <div class="row tabs">
                    <?php

                    $query = new WP_Query( 'cat=3' );
                    if( $query->have_posts() ){
                        while( $query->have_posts() ){
                            $query->the_post();
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
                            <?php
                        }
                        wp_reset_postdata();
                    }
                    else
                        echo 'Записей нет.';
                    ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); // подключаем footer.php ?>