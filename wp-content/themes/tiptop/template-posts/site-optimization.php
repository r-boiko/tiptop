<?php
/**
 * Template Name: Site optimization
 * Template Post Type: post
 */
get_header(); // подключаем header.php; ?>


    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position:absolute">

        <symbol id="icon-icon5" viewBox="0 0 400 400">
            <path d="M203.164 1.836c-2.901 2.901-3.158 20.346-3.161 215.24L200 395.651l2.314 2.175 2.315 2.174h141.022l2.175-2.314 2.174-2.315V4.349l-2.314-2.175L345.371 0h-70.185c-66.769 0-70.275.089-72.022 1.836M79.909 5.854C69.212 9.357 59.602 17.963 53.877 29.166L50.64 35.5 50.234 160l-.406 124.5 16.179 47c21.246 61.72 22.694 64.467 33.993 64.467 11.166 0 12.473-2.431 33.904-63.085l16.119-45.617-.262-125.883L149.5 35.5l-2.72-5.805c-3.799-8.109-13.504-17.941-21.69-21.974-8.407-4.142-34.89-5.236-45.181-1.867m243.079 10.778l11.017.669-.252 183.1L333.5 383.5l-58.113.258-58.113.258-.637-4.648c-.35-2.556-.637-6.384-.637-8.508V367l27.75-.074c26.44-.071 29.725-.207 35.034-1.447 4.842-1.132 5.52-11.162.923-13.648-1.517-.821-11.815-1.334-32.957-1.642l-30.75-.447v-32.448l14.623-.548c16.686-.624 18.777-1.543 18.777-8.246 0-6.545-1.916-7.38-18.687-8.142l-14.76-.671.274-16.373.273-16.373 25-.053c38.155-.08 41.388-.739 41.468-8.447.08-7.672-2.903-8.301-39.742-8.381l-27.274-.06.274-16.75.274-16.75 14.487-.175c16.619-.201 19.972-1.778 18.581-8.735-1.268-6.341-3.018-7.022-19.106-7.438l-14.509-.376.273-16.638.274-16.638 31.189-.264 31.188-.264 2.062-2.621c2.578-3.278 2.638-7.417.15-10.49l-1.91-2.361-31.59-.325-31.589-.326V116h29.864l2.145-3.012c6.034-8.475.638-12.401-17.611-12.812L216 99.852V66h31.186c30.642 0 31.225-.038 33.5-2.174 2.872-2.699 3.056-7.688.404-10.965l-1.911-2.361-31.589-.303-31.59-.302.014-14.198c.016-16.952.32-18.457 3.838-18.971 4.781-.7 91.861-.779 103.136-.094M114.306 20.91c6.445 1.059 12.498 5.508 16.444 12.085l3.25 5.417V276h-17.928l-.286-101.087-.286-101.087-2.806-2.413c-3.583-3.081-7.131-3.067-10.239.042L100 73.909V276H66.946l.277-120.336.277-120.336 2.93-4.227c6.652-9.598 23.578-13.529 43.876-10.191m15.399 272.462c.325.325-3.631 12.524-8.792 27.109L111.529 347l-11.514-.012-11.515-.011-8.891-25.739c-4.89-14.156-9.086-26.265-9.326-26.908-.783-2.104 57.34-3.041 59.422-.958m-24.897 71.878C103.467 370.191 100.523 378 100 378c-.523 0-3.467-7.809-4.808-12.75-.239-.882 1.176-1.25 4.808-1.25 3.632 0 5.047.368 4.808 1.25" fill-rule="evenodd"></path>
        </symbol>

        <symbol id="icon-icon6" viewBox="0 0 400 400">
            <path d="M106.766 1.702C93.894 5.995 88.678 14.694 88 33l-.5 13.5-17 .512c-22.04.663-27.935 3.308-34.314 15.398L33.5 67.5v312l2.202 4.116c3.384 6.326 6.64 9.703 12.465 12.93L53.5 399.5l116.438.266c129.206.296 122.762.607 130.846-6.313 8.046-6.887 9.645-11.027 10.216-26.453l.5-13.5 17-.512c22.04-.663 27.935-3.308 34.314-15.398l2.686-5.09v-312l-2.966-5.356c-3.602-6.501-8.294-10.533-15.322-13.164-7.366-2.758-232.231-3.018-240.446-.278m234.405 22.953c2.632 2.382 2.885 301.146.258 303.774-2.473 2.473-227.503 2.392-229.557-.083-2.547-3.069-1.987-302.057.569-303.927 3.194-2.335 226.143-2.105 228.73.236M88.022 200.75c.025 147.57-.667 134.817 7.783 143.585 8.514 8.836-.168 8.099 102.195 8.665l90.5.5v10.333c0 9.074-.236 10.505-1.941 11.75-3.196 2.333-226.145 2.102-228.73-.238-2.156-1.951-2.934-299.411-.794-303.411.953-1.78 2.228-1.934 16-1.934H88l.022 130.75M135.4 74.4c-5.914 5.914-4.305 15.071 3.199 18.206 5.211 2.177 172.191 2.062 176.794-.122 5.936-2.817 8.157-9.586 5.09-15.517C317.255 70.725 321.611 71 225.95 71H138.8l-3.4 3.4m1.914 52.55c-6.279 3.829-7.372 11.715-2.396 17.284l2.918 3.266 87.6.266c96.315.293 91.79.566 95.047-5.733 3.09-5.975.999-12.627-4.84-15.398-5.811-2.758-173.777-2.461-178.329.315m3.448 52.765c-9.573 1.452-12.016 17.115-3.29 21.09 1.969.897 24.399 1.195 90.059 1.195h87.437l3.266-2.918c6.828-6.101 3.521-16.96-5.827-19.128-3.761-.872-165.981-1.098-171.645-.239M135.4 237.4c-6.297 6.297-3.941 16.245 4.395 18.56 6.186 1.718 170.409 1.399 174.569-.339 7.117-2.973 9.531-10.001 5.632-16.396-3.25-5.33-1.353-5.225-94.161-5.225H138.8l-3.4 3.4" fill-rule="evenodd"></path>
        </symbol>

        <symbol id="icon-icon7" viewBox="0 0 400 400">
            <path d="M185 33.697c-47.825 5.15-110.299 40.905-106.534 60.972 2.677 14.271 16.331 15.342 31.034 2.434 78.246-68.694 203.151-27.699 225.005 73.849l.743 3.452-6.666-6.108c-12.982-11.896-22.071-12.231-27.853-1.027-4.233 8.204-.75 13.381 28.756 42.731l20.609 20.5 22.853-23.095c27.834-28.127 29.999-31.709 25.043-41.424-5.163-10.122-15.034-9.242-27.403 2.441-3.252 3.072-5.993 5.471-6.091 5.332-.098-.14-.983-4.079-1.967-8.754C345.509 84.112 265.607 25.016 185 33.697M47.473 175.157C39.609 177.195 0 220.835 0 227.461c0 15.564 14.756 18.066 28.964 4.912 3.354-3.105 6.243-5.471 6.421-5.259.179.212 1.345 4.661 2.592 9.886C65.935 354.135 199.918 405.157 297 335.639c21.475-15.378 27.578-24.82 22.451-34.733-5.236-10.126-15.383-9.219-28.951 2.588-77.787 67.689-195.232 31.185-223.538-69.48-2.263-8.045-2.061-8.242 3.249-3.182 12.679 12.082 22.139 14.103 27.931 5.968 6.704-9.415 3.674-14.759-24.568-43.323-18.582-18.795-20.115-19.871-26.101-18.32" fill-rule="evenodd"></path>
        </symbol>

    </svg>

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
        <section class="typical-section service-descr">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-section var">
                            <p class="cat-name">Об услуге</p>
                            <h2><?php the_title(); ?></h2>
                            <?php the_field('about_service'); ?>
                        </div>
                        <div class="thesis-tabs">
                            <?php while ( have_rows('optimization_detail') ) : the_row(); ?>
                                <div class="thesis-tab">
                                    <div class="thesis-tab__title flx align-items-center">
                                        <?php the_sub_field('optimization_detail_image'); ?>
                                        <h4><?php the_sub_field('optimization_detail_title'); ?></h4>
                                    </div>
                                    <p><?php the_sub_field('optimization_detail_description'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <button type="button" class="order green-border-btn">Заказать</button>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="service-descr__img--wrapper bg-layout-cover" style="background-image: url(<?php the_field('video_youtube_preview'); ?>);">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/circles.png" alt="" class="circles">
                            <button type="button" class="bttn" data-toggle="modal" data-target="#youtube_modal"><img src="<?php echo get_template_directory_uri(); ?>/img/play2.png" alt="" class="play"></button>
                        </div>

                        <div class="modal fade" id="youtube_modal" tabindex="-1" role="dialog" aria-labelledby="youtube_modal-title" aria-hidden="true">
                            <div class="modal-dialog youtube_modal" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field("video_youtube"); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="typical-section bg-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-section">
                            <div class="img-wrapper aside-left w5-12">
                                <img src="<?php the_field('image_post'); ?>" alt="">
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <?php the_field('text_post'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio typical-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="text-section">
                            <p class="cat-name">Портфолио</p>
                            <h2>Наши работы</h2>
                        </div>
                        <ul class="nav justify-content-center" role="tablist">
                            <?php $count = 0; while ( have_rows('works') ) : the_row(); $count++; if($count == 1) { ?>
                                <li class="nav-item">
                                    <a href="#tab-pane-<?php echo $count; ?>" class="text-link active" id="tab<?php echo $count; ?>" data-toggle="tab" role="tab" aria-controls="tab-pane-<?php echo $count; ?>" aria-selected="true"><?php the_sub_field('works_tab_title'); ?></a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a href="#tab-pane-<?php echo $count; ?>" class="text-link" id="tab<?php echo $count; ?>" data-toggle="tab" role="tab" aria-controls="tab-pane-<?php echo $count; ?>" aria-selected="true"><?php the_sub_field('works_tab_title'); ?></a>
                                </li>
                            <?php } endwhile; ?>
                        </ul>
                        <div class="tab-content">
                            <?php $count_tab_content = 0; while ( have_rows('works') ) : the_row(); $count_tab_content++; if($count_tab_content == 1) { ?>
                                <div class="tab-pane fade show active" id="tab-pane-<?php echo $count_tab_content; ?>" role="tabpane<?php echo $count_tab_content; ?>" aria-labelledby="tab<?php echo $count_tab_content; ?>">
                                    <?php while ( have_rows('works_slides') ) : the_row(); ?>
                                        <div class="tab-pane-slider-item">
                                            <div class="img-with-descr flx align-items-center flex-wrap">
                                                <div class="img-wrapper bg-layout-cover flex-shrink-0" style="background-image: url(<?php the_sub_field('works_slides_image'); ?>);"></div>
                                                <div class="descr-block flex-shrink-0">
                                                    <h3><?php the_sub_field('works_slides_title'); ?></h3>
                                                    <p><?php the_sub_field('works_slides_description'); ?></p>
                                                    <a href="<?php the_sub_field('works_slides_link'); ?>" class="more-link"><i class="icon-right"></i></a>
                                                </div>
                                                <img src="<?php the_sub_field('works_slides_image'); ?>" alt="" class="slide-thumb">
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php } else { ?>
                                <div class="tab-pane fade" id="tab-pane-<?php echo $count_tab_content; ?>" role="tabpane<?php echo $count_tab_content; ?>" aria-labelledby="tab<?php echo $count_tab_content; ?>">
                                    <?php while ( have_rows('works_slides') ) : the_row(); ?>
                                        <div class="tab-pane-slider-item">
                                            <div class="img-with-descr flx align-items-center flex-wrap">
                                                <div class="img-wrapper bg-layout-cover flex-shrink-0" style="background-image: url(<?php the_sub_field('works_slides_image'); ?>);"></div>
                                                <div class="descr-block flex-shrink-0">
                                                    <h3><?php the_sub_field('works_slides_title'); ?></h3>
                                                    <p><?php the_sub_field('works_slides_description'); ?></p>
                                                    <a href="<?php the_sub_field('works_slides_link'); ?>" class="more-link"><i class="icon-right"></i></a>
                                                </div>
                                                <img src="<?php the_sub_field('works_slides_image'); ?>" alt="" class="slide-thumb">
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php } endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); // подключаем footer.php ?>