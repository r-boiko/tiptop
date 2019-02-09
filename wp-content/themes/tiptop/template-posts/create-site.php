<?php
/**
 * Template Name: Create site
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
        <div class="typical-section project-introduction">
            <div class="container">
                <div class="project-slider-wrapper flx justify-content-between flex-wrap">
                    <div class="project-slider">
                        <?php while ( have_rows('slider_preview') ) : the_row(); ?>
                            <div class="project-slider__item bg-layout-cover cover-top" style="background-image: url(<?php the_sub_field('slider_preview_image'); ?>);">
                                <img src="<?php the_sub_field('slider_preview_image'); ?>" alt="" class="slide-thumb">
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="project-slider__thumbs"></div>
                </div>
                <div class="row project-description">
                    <div class="col-md-8 col-xl-7">
                        <div class="text-section">
                            <h4>Описание проекта</h4>
                            <?php the_field('project_description'); ?>
                        </div>
                    </div>
                    <div class="col-md-4 offset-xl-1 right-col">
                        <h4>Детали проекта</h4>
                        <table>
                            <tbody>
                            <?php while ( have_rows('project_detail') ) : the_row(); ?>
                                <tr>
                                    <td><?php the_sub_field('project_detail_title'); ?></td>
                                    <td><?php the_sub_field('project_detail_description'); ?></td>
                                </tr>
                            <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).on( "click", ".play", function() {
                $(".green-video").html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field("video_youtube"); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            });
        </script>
        <div class="green-video">
            <button type="button" class="bttn play"><img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt=""></button>
        </div>
        <section class="typical-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-section">
                            <div class="img-wrapper aside-left w5-12">
                                <img src="<?php the_field('image_post'); ?>" alt="">
                            </div>
                            <?php the_field('description_post'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); // подключаем footer.php ?>