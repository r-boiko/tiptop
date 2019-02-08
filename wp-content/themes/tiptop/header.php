<?php
/**
 * Шаблон шапки (header.php)
 */
$home_id = 5; ?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo(); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- Template Basic Images Start -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>

    <header class="header">
        <div class="container">
            <div class="row align-items-center posr">
                <div class="col-6 col-lg-3">
                    <a href="/"><img src="<?php echo get_field('logo_header', $home_id); ?>" alt="logo"></a>
                </div>
                <div class="col-lg-6 top-menu__wrapper">
                    <nav class="top-menu text-right text-lg-center">
                        <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                            'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
                            'container'=> false, // обертка списка, тут не нужна
                            'menu_id' => 'top-nav-ul', // id для ul
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'menu_class' => '', // класс для ul, первые 2 обязательны
                            'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
                        );
                        wp_nav_menu($args); // выводим верхнее меню
                        ?>
                        <button type="button" class="bttn order-call-link clone" data-toggle="modal" data-target="#order-call"><i class="icon icon-phone-1"></i>Заказать звонок</button>
                    </nav>
                </div>
                <div class="col-6 col-lg-3 text-right">
                    <button type="button" class="burger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                    <button type="button" class="bttn text-link order-call-link" data-toggle="modal" data-target="#order-call"><i class="icon icon-phone-1"></i>Заказать звонок</button>
                </div>
            </div>
        </div>
    </header>