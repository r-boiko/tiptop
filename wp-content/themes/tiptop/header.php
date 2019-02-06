<?php
/**
 * Шаблон шапки (header.php)
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Template</title>
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
<!--	<header>-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-md-12">-->
<!--					<nav class="navbar navbar-default">-->
<!--						<div class="navbar-header">-->
<!--							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">-->
<!--								<span class="sr-only">Меню</span>-->
<!--								<span class="icon-bar"></span>-->
<!--								<span class="icon-bar"></span>-->
<!--								<span class="icon-bar"></span>-->
<!--							</button>-->
<!--						</div>-->
<!--						<div class="collapse navbar-collapse" id="topnav">-->
<!--							--><?php //$args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
//								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
//								'container'=> false, // обертка списка, тут не нужна
//						  		'menu_id' => 'top-nav-ul', // id для ul
//						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
//								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
//						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
//					  			);
//								wp_nav_menu($args); // выводим верхнее меню
//							?>
<!--						</div>-->
<!--					</nav>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</header>-->
<!---->
<!--    <body>-->

    <header class="header">
        <div class="container">
            <div class="row align-items-center posr">
                <div class="col-6 col-lg-3">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
                </div>
                <div class="col-lg-6 top-menu__wrapper">
                    <nav class="top-menu text-right text-lg-center">
                        <ul>
                            <li><a href="#" class="text-link">О компании</a></li>
                            <li><a href="#" class="text-link">Блог</a></li>
                            <li><a href="#" class="text-link">Услуги</a></li>
                            <li><a href="#" class="text-link">Клиенты</a></li>
                            <li><a href="#" class="text-link">Контакты</a></li>
                            <li><a href="#" class="text-link">Новости</a></li>
                        </ul>
<!--                        --><?php //$args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
//                            'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
//                            'container'=> false, // обертка списка, тут не нужна
//                            'menu_id' => 'top-nav-ul', // id для ul
//                            'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
//                            'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
//                            'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
//                        );
//                        wp_nav_menu($args); // выводим верхнее меню
//                        ?>
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

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position:absolute">

        <symbol id="icon-image1" viewBox="0 0 400 400">
            <path d="M16.086 1.71c-5.908 2.096-12.358 8.705-14.43 14.786-1.996 5.859-2.57 208.672-.61 215.729 1.546 5.567 6.849 11.845 12.434 14.72l4.962 2.555 40.779.282 40.779.282V282.919l-8.25.291-8.25.29-.29 8.25-.291 8.25H150v-17h-33v-33h16v-17H21.349l-2.175-2.314L17 228.371V21.349l2.314-2.175L21.629 17h144.604c79.532 0 145.332.28 146.222.621C316.999 19.365 317 19.39 317 99.45V175h16V97.866c0-90.339.354-87.817-13.357-95.15L315.5.5 168 .322C36.375.163 20.025.313 16.086 1.71M120 33.899c-14.069 2.987-22.789 17.516-18.906 31.502l1.083 3.9-16.599 16.621-16.599 16.62L75 108.5l6.02 5.958 16.857-16.835c15.19-15.171 17.062-16.726 18.924-15.729 2.673 1.43 13.723 1.431 16.395.001 3.164-1.693 28.268 23.38 26.565 26.531-3.608 6.68.025 20.545 6.984 26.655 19.052 16.727 49.125-3.252 40.205-26.711-1.631-4.291 22.129-28.051 26.42-26.42 24.657 9.375 44.76-24.58 24.885-42.031-19.014-16.695-49.107 3.299-40.205 26.711 1.631 4.291-22.129 28.051-26.42 26.42-3.55-1.35-12.706-1.352-16.253-.003-3.534 1.343-27.936-21.84-26.89-25.547 5.542-19.641-9.679-37.594-28.487-33.601m10.545 18.556c6.275 6.274-1.019 17.56-8.702 13.467C114.015 61.751 116.345 50 125 50c1.948 0 3.998.907 5.545 2.455m114.798-1.345c7.666 3.493 4.784 15.29-3.736 15.29-7.655 0-11.042-9.048-5.251-14.03 3.04-2.615 5.313-2.934 8.987-1.26m-55.893 59.931c3.007 2.952 2.61 8.65-.806 11.589-7.309 6.287-17.541-2.621-12.037-10.479 3.12-4.454 8.926-4.956 12.843-1.11M33 150v8h17v-16H33v8m191.5 1.392c-64.19 12.362-95.136 85.352-59.112 139.425 27.823 41.763 86.452 52.734 127.039 23.772l6.246-4.457 8.617 8.684 8.617 8.684-3.954 4.211c-7.569 8.063-7.923 7.467 22.621 38.097 36.7 36.804 31.724 35.188 50.639 16.446 19.861-19.68 21.009-15.692-14.714-51.11-31.437-31.169-30.736-30.75-38.788-23.191l-4.211 3.954-8.684-8.617-8.684-8.617 4.457-6.246c46.161-64.688-12.19-156.036-90.089-141.035m39 18.994c52.157 17.796 67.789 83.483 29.079 122.193-38.737 38.738-104.435 23.102-122.185-29.079-19.102-56.157 36.995-112.259 93.106-93.114M33.196 186.25c.883 22.17 8.332 29.615 30.554 30.535l11.25.467V200h-8.953C51.616 200 50 198.384 50 183.953V175H32.748l.448 11.25M242 191.432v8.338l5.513.688c17.475 2.184 33.052 18.066 35.348 36.042l.639 5 8.25.29 8.25.291V238.7c0-26.381-24.424-51.855-52.75-55.019l-5.25-.587v8.338m132.26 182.81l-5.72 5.78-20.26-20.242-20.26-20.242 5.72-5.78 5.72-5.78 20.26 20.242 20.26 20.242-5.72 5.78" fill-rule="evenodd"></path>
        </symbol>

        <symbol id="icon-image2" viewBox="0 0 400 400">
            <path d="M41.086 1.717c-2.428.858-6.296 3.44-8.594 5.739C24.37 15.578 25-.619 25 200c0 200.579-.627 184.426 7.474 192.526 7.744 7.745 4.598 7.474 86.745 7.474h72.862l-.291-8.25-.29-8.25-72.443-.257-72.442-.256-2.308-2.168L42 378.651V21.349l2.314-2.175L46.629 17H258l.011 20.75c.02 37.477 4.579 44.407 29.655 45.082l12.334.331V67.187l-10.088-.343C275.17 66.341 275 66.089 275 44.702V28.515L300 53.5l25 24.985V183h17v-54.55c0-45.458-.239-54.999-1.434-57.25-1.729-3.254-67.141-68.522-70.25-70.095-3.859-1.952-223.633-1.365-229.23.612M75 58.5V67h83V50H75v8.5m0 32.96V100h17.081l-.291-8.25-.29-8.25-8.25-.29-8.25-.291v8.541m33.667-7.793c-.367.366-.667 4.191-.667 8.5V100h17V83h-7.833c-4.309 0-8.134.3-8.5.667M100 175.348v25.348l-4.158 1.875c-27.712 12.497-26.741 55.248 1.408 61.987l2.75.659V333h17v-34c0-26.746.27-34 1.265-34 2.287 0 9.164-4.129 13.071-7.848 17.273-16.441 11.667-45.364-10.586-54.619l-3.75-1.56V150h-17v25.348m75 8.192v33.541l8.25-.291 8.25-.29.263-33.25.264-33.25H175v33.54m75-17.04V183h17v-33h-17v16.5m4.364 34.67c-3.455 1.673-4.364 5.25-4.364 17.176v11.252l-3.587 1.297-3.586 1.297-8.785-8.596c-12.475-12.208-11.707-12.355-29.754 5.692s-17.9 17.279-5.692 29.754l8.596 8.785-1.297 3.586-1.297 3.587h-11.252c-18.311 0-18.346.048-18.346 25s.035 25 18.346 25h11.252l1.297 3.587 1.297 3.586-8.596 8.785c-12.208 12.475-12.355 11.707 5.692 29.754s17.279 17.9 29.754 5.692l8.785-8.596 3.586 1.297 3.587 1.297v11.252c0 18.311.048 18.346 25 18.346s25-.035 25-18.346v-11.252l3.587-1.297 3.586-1.297 8.785 8.596c12.475 12.208 11.707 12.355 29.754-5.692s17.9-17.279 5.692-29.754l-8.596-8.785 1.297-3.586 1.297-3.587h11.252c18.401 0 18.358.061 18.314-25.797-.041-24.361.078-24.203-18.201-24.203h-11.365l-1.297-3.587-1.297-3.586 8.596-8.785c12.208-12.475 12.355-11.707-5.692-29.754s-17.279-17.9-29.754-5.692l-8.785 8.596-3.586-1.297-3.587-1.297v-11.252c0-12.195-.899-15.524-4.657-17.236-3.131-1.426-38.015-1.376-40.979.06M115.4 218.394c8.272 3.456 11.774 14.134 7.415 22.606-6.106 11.869-24.367 11.497-29.421-.6-5.967-14.28 7.726-27.973 22.006-22.006m167.762 9.695c.356 11.694 2.371 15.911 7.599 15.911.908 0 5.127 1.632 9.376 3.626 9.801 4.599 11.101 4.29 20.569-4.891l7.365-7.142 5.697 5.696 5.696 5.697-7.208 7.257c-8.971 9.033-9.579 11.194-5.449 19.375 1.647 3.263 3.488 7.762 4.09 9.998 1.853 6.882 3.73 7.835 16.205 8.222l10.898.339v15.646l-11.089.339c-11.694.356-15.911 2.371-15.911 7.599 0 .908-1.632 5.127-3.626 9.376-4.599 9.801-4.29 11.101 4.891 20.569l7.142 7.365-5.668 5.668-5.668 5.668-7.365-7.142c-9.468-9.181-10.768-9.49-20.569-4.891-4.249 1.994-8.468 3.626-9.376 3.626-5.228 0-7.243 4.217-7.599 15.911L282.823 383h-15.646l-.339-11.089c-.356-11.694-2.371-15.911-7.599-15.911-.908 0-5.127-1.632-9.376-3.626-9.801-4.599-11.101-4.29-20.569 4.891l-7.365 7.142-5.67-5.67-5.671-5.67 7.706-7.919c8.883-9.128 9.178-10.29 4.805-18.952-1.595-3.16-3.394-7.576-3.996-9.812-1.853-6.882-3.73-7.835-16.205-8.222L192 307.823v-15.646l11.089-.339c11.694-.356 15.911-2.371 15.911-7.599 0-.908 1.632-5.127 3.626-9.376 4.599-9.801 4.29-11.101-4.891-20.569l-7.142-7.365 5.668-5.668 5.668-5.668 7.365 7.142c9.468 9.181 10.768 9.49 20.569 4.891 4.249-1.994 8.468-3.626 9.376-3.626 5.228 0 7.243-4.217 7.599-15.911l.339-11.089h15.646l.339 11.089M266 267.877c-36.778 12.08-29.455 64.646 9 64.603 42.958-.049 44.419-63.444 1.5-65.113-4.4-.171-9.125.059-10.5.51m17.127 17.689c9.351 4.835 11.155 18.352 3.473 26.034-8.926 8.926-24.261 4.801-27.549-7.41-3.748-13.918 11.047-25.362 24.076-18.624" fill-rule="evenodd"></path>
        </symbol>

        <symbol id="icon-image3" viewBox="0 0 400 400">
            <path d="M29.352 2.054C17.559 5.806 7.498 15.149 2.857 26.656L.5 32.5.231 157.75-.038 283H17V159.468c0-137.237-.506-127.201 6.799-134.837 7.952-8.314-8.92-7.584 175.983-7.609 182.527-.024 167.886-.589 175.587 6.777 7.007 6.702 7.584 9.088 7.609 31.451L383 75h17V55.605c0-31.361-6.751-44.72-26.656-52.748L367.5.5l-166-.201C39.205.102 35.363.141 29.352 2.054M42 41.5V50h16V33H42v8.5m33-.04V50h17.081l-.291-8.25-.29-8.25-8.25-.29-8.25-.291v8.541m267 .04V50h16V33h-16v8.5M33 75v8h192V67H33v8m244.455-5.545C275.12 71.789 275 72.5 275 83.941v12.032l-3.666 1.532-3.666 1.532-8.705-8.519c-12.457-12.189-11.782-12.321-29.758 5.809-17.881 18.036-17.771 17.167-3.94 31.096l6.875 6.923-1.359 3.577-1.358 3.577-12.803.5c-17.5.683-16.62-.617-16.62 24.555 0 25.543-.504 24.804 17.238 25.273l12.417.328 1.268 3.509 1.269 3.508-8.596 8.785c-11.953 12.215-11.91 12.429 6.084 30.242 16.784 16.614 17.502 16.712 30.393 4.167l7.78-7.571 3.573 1.18 3.574 1.179v11.867c0 11.102.155 12.047 2.413 14.672l2.414 2.806h40.346l2.414-2.806c2.258-2.625 2.413-3.57 2.413-14.672v-11.867l3.574-1.179 3.573-1.18 7.78 7.571c12.891 12.545 13.609 12.447 30.393-4.167 17.994-17.813 18.037-18.027 6.084-30.242l-8.596-8.785 1.269-3.508 1.268-3.509 12.417-.328c17.755-.469 17.238.294 17.238-25.429 0-25.253.595-24.399-17.006-24.399h-12.096l-1.526-3.651-1.525-3.651 7.465-7.599c13.183-13.419 13.269-12.833-4.517-30.772-17.976-18.13-17.301-17.998-29.758-5.809l-8.705 8.519-3.666-1.532L325 95.973V83.941C325 66.365 325.936 67 300 67c-19.998 0-20.102.011-22.545 2.455M308 93.05c0 12.084 1.241 15.221 6.733 17.013 2.072.676 7.216 2.739 11.432 4.584 9.299 4.071 9.303 4.07 19.081-5.506l7.746-7.586 5.986 5.923 5.985 5.923-7.981 8.177c-9.066 9.288-9.219 9.851-5.089 18.714 1.592 3.414 3.472 8.151 4.179 10.527 1.911 6.42 3.622 7.181 16.151 7.181H383v17h-10.365c-12.406 0-14.541 1.15-17.197 9.263-.943 2.88-2.777 7.36-4.076 9.954-3.566 7.121-3.236 8.132 5.62 17.205l7.981 8.177-5.958 5.896-5.959 5.897-7.908-7.696c-9.212-8.964-10.67-9.312-19.747-4.708-3.24 1.643-7.315 3.261-9.056 3.595-6.297 1.209-7.793 4.228-8.173 16.495L307.823 250h-15.646l-.339-10.922c-.38-12.267-1.876-15.286-8.173-16.495-1.741-.334-5.816-1.952-9.056-3.595-9.077-4.604-10.535-4.256-19.747 4.708l-7.908 7.696-5.959-5.897-5.958-5.896 7.981-8.177c8.856-9.073 9.186-10.084 5.62-17.205-1.299-2.594-3.133-7.074-4.076-9.954-2.656-8.113-4.791-9.263-17.197-9.263H217v-17h10.889c12.988 0 13.779-.463 17.084-10 1.238-3.575 3.101-7.903 4.139-9.618 3.438-5.678 2.653-7.843-6.094-16.804l-7.981-8.177 5.985-5.923 5.986-5.923 7.746 7.586c9.778 9.576 9.782 9.577 19.081 5.506 4.216-1.845 9.36-3.908 11.432-4.584 5.492-1.792 6.733-4.929 6.733-17.013V83h16v10.05M67 108.508v8.507l62.25-.257 62.25-.258.29-8.25.291-8.25H67v8.508m33 32.952V150h17.081l-.291-8.25-.29-8.25-8.25-.29-8.25-.291v8.541m33.667-7.793c-.367.366-.667 4.191-.667 8.5V150h42v-17h-20.333c-11.184 0-20.634.3-21 .667m159.677.333c-16.212 3.369-27.008 17.632-26.114 34.5 2.197 41.415 63.331 41.415 65.538 0 1.169-21.938-18.221-38.906-39.424-34.5m12.938 17.377C322.858 158.469 317.985 183 300 183c-14.483 0-21.889-16.712-12.129-27.372 4.9-5.352 12.004-6.993 18.411-4.251M71.618 168.112c-21.074 4.948-37.6 24.74-38.456 46.058-1.069 26.625 5.612 48.717 19.109 63.184l4.77 5.114-1.832 2.454c-3.57 4.781-6.486 6.126-15.251 7.034-17.363 1.799-28.475 9.22-35.705 23.844L.5 323.39l-.305 38.305L-.109 400H17v-36.032c0-30.09.252-36.636 1.531-39.696 4.161-9.959 11.622-14.809 24.842-16.149 10.294-1.043 18.229-4.534 22.624-9.951 1.639-2.02 3.772-4.662 4.741-5.872 1.634-2.04 2.156-2.125 7.165-1.177 3.649.691 7.22.696 11 .017 5.208-.936 5.701-.855 7.097 1.168 6.985 10.125 14.391 14.44 27.026 15.747 9.948 1.029 14.855 3.021 19.731 8.007 6.764 6.919 6.713 6.578 7.028 47.188l.285 36.75H167l-.017-34.25c-.019-37.567-.73-44.23-5.606-52.55-7.332-12.512-18.652-19.629-33.684-21.18-16.71-1.724-20.811-6.885-12.557-15.8 12.925-13.961 17.351-27.915 17.359-54.72l.005-19-3.5-6.991c-10.418-20.812-35.145-32.617-57.382-27.397m17.583 16.011c23.467 4.974 33.364 27.781 25.331 58.377-10.792 41.106-47.717 43.418-61.15 3.828-10.331-30.447.106-57.565 23.973-62.289 5.869-1.161 5.974-1.16 11.846.084M382.978 307.25c-.025 64.351.303 61.383-7.609 68.951-7.529 7.202-1.753 6.799-97.337 6.799H192V400.053l87.75-.277 87.75-.276 5.844-2.357c11.683-4.712 20.915-14.767 24.644-26.841 1.916-6.202 2.012-9.227 2.012-63.407V250h-17l-.022 57.25m-169.958 2.034c-4.434 2.244-4.989 4.913-5.005 24.032-.015 17.973.448 20.753 3.898 23.402 1.212.93 18.154 1.226 71.663 1.25l70.075.032 2.175-2.314c2.084-2.22 2.173-3.136 2.142-22.25-.033-20.861-.236-21.921-4.652-24.273-3.267-1.74-136.846-1.624-140.296.121m128.77 23.966l-.29 8.25-58.25.258-58.25.258V325H342.081l-.291 8.25M33 371v29h17v-58H33v29m84 0v29h16v-58h-16v29" fill-rule="evenodd"></path>
        </symbol>

        <symbol id="icon-image4" viewBox="0 0 400 400">
            <path d="M16.086 1.71c-5.908 2.096-12.358 8.705-14.43 14.786-2.532 7.43-2.532 209.578 0 217.008C6.899 248.892 11.133 250 64.678 250H108v33H92v17H242.081l-.291-8.25-.29-8.25-8.25-.29-8.25-.291V250h42.081l-.291-8.25-.29-8.25-122.44-.254-122.44-.254-2.31-2.17C17.105 228.75 17 228 17 214.326V200h266v-17H17V21.349l2.314-2.175L21.629 17h144.604c79.532 0 145.332.28 146.222.621C316.817 19.295 317 21.419 317 70.45V117h16l-.022-48.75c-.026-57.817-.145-58.397-13.478-65.592L315.5.5 168 .322C36.375.163 20.025.313 16.086 1.71m17.581 31.957c-.367.366-.667 4.191-.667 8.5V50h100V33H83.667c-27.134 0-49.634.3-50 .667M150 41.46V50h17.081l-.291-8.25-.29-8.25-8.25-.29-8.25-.291v8.541m33.667-7.793c-.367.366-.667 4.191-.667 8.5V50h17V33h-7.833c-4.309 0-8.134.3-8.5.667m37.833.516c-4.351 2.55-4.435 3.151-4.468 31.893-.032 27.55-.03 27.577 2.282 29.75 3.842 3.609 8.35 2.92 13.412-2.048l4.302-4.222 13.45 13.422c18.037 18 16.066 18.061 35.099-1.096 18.848-18.972 18.787-16.814.979-34.802L273.111 53.5l4.445-4.692c5.125-5.41 5.602-8.349 2.032-12.502l-2.412-2.806-26.838-.245c-19.117-.174-27.413.092-28.838.928m31.861 17.319c-1.369 3.567 1.307 7.501 13.44 19.763L279.44 84.04l-6.218 6.218-6.218 6.218-13.265-13.238C241.458 70.983 240.196 70 236.737 70H233V50h10.469c8.901 0 10.382.225 9.892 1.502M33 100v8h17V92H33v8m.215 36.25c.917 22.144 8.483 29.727 30.501 30.57l11.284.432V150h-8.953C51.616 150 50 148.384 50 133.953V125H32.748l.467 11.25M319 143.821c-7.358 2.457-11.638 4.729-16.834 8.939l-4.334 3.512 5.789 5.85c5.428 5.486 5.916 5.758 7.834 4.365 12.976-9.422 29.6-10.025 41.368-1.5l3.967 2.873 5.605-5.472c6.861-6.699 6.862-6.378-.026-11.31-11.744-8.41-30.511-11.551-43.369-7.257m7.939 40.506c-2.509.697-6.009 2.298-7.777 3.558l-3.216 2.29 3.187 3.662c6.802 7.819 7.681 8.36 11.405 7.013 2.652-.959 3.938-.954 6.079.021 2.785 1.269 15.213-8.719 13.765-11.062-2.606-4.217-16.395-7.441-23.443-5.482m-10.723 34.692c-22.801 5.973-41.389 24.698-47.244 47.59-2.645 10.343-2.954 71.587-.415 82.391 16 68.09 115.939 66.391 129.877-2.208 2.194-10.797 2.231-66.985.051-77.292-7.796-36.861-45.635-60.079-82.269-50.481M325 254.5V275h17v-41.038l2.75.614c15.988 3.572 31.389 18.194 36.344 34.508 3.217 10.589 2.511 73.6-.919 82.141-19.079 47.499-88.513 39.524-96.235-11.054-1.822-11.936-.736-64.221 1.479-71.171 5.408-16.976 24.211-33.898 38.831-34.946.413-.03.75 9.171.75 20.446m-117 12V283h-83v-33h83v16.5" fill-rule="evenodd"></path>
        </symbol>

        <symbol id="icon-image5" viewBox="0 0 400 400">
            <path d="M177.202 2.006C156.383 7.507 139.981 24.158 134.853 45c-1.934 7.863-1.934 77.137 0 85 6.471 26.299 30.494 45 57.807 45H200l.032 22.25c.033 23.31.191 24.21 4.652 26.587 4.985 2.654 5.967 1.919 31.771-23.791l25.045-24.954 46-.357c50.354-.391 48.532-.19 61.586-6.777 8.861-4.471 19.594-15.356 24.116-24.458 6.237-12.552 6.298-13.095 6.298-56 0-30.528-.306-40.086-1.41-44-5.337-18.926-20.268-34.404-39.793-41.249-7.965-2.792-170.623-3.013-181.095-.245M359.489 20.92c8.887 4.375 15.744 11.24 19.818 19.839L382.5 47.5v80.042l-3.42 6.946c-4.342 8.821-10.768 15.248-19.589 19.592l-6.943 3.42-48.765.5-48.766.5-18.939 18.921-18.939 18.92-.319-16.645c-.426-22.145.652-21.007-20.597-21.733-23.217-.794-34.224-7.188-42.522-24.704L150.5 126.5v-78l3.165-6.68c5.268-11.12 13.707-18.92 24.751-22.876 4.782-1.713 10.105-1.81 89.606-1.632l84.522.188 6.945 3.42M211.5 58.901C200.918 61.62 192 71.484 192 80.468c0 2.511-.071 2.532-8.5 2.532H175v17h8.5c8.011 0 8.5.123 8.5 2.134 0 28.431 44.281 29.879 49.41 1.616l.681-3.75h124.99l-.291-8.25-.29-8.25-62.233-.258-62.233-.257-.607-2.743c-2.089-9.438-6.586-15.713-13.68-19.086-4.979-2.367-12.011-3.343-16.247-2.255m8.843 17.209c5.446 2.482 7.097 24.541 2.202 29.435-4.688 4.689-12.495 2.489-14.118-3.978-3.883-15.471 2.747-29.634 11.916-25.457M16.086 101.717c-5.904 2.085-12.357 8.694-14.43 14.779-2.532 7.43-2.532 209.578 0 217.008C6.899 348.892 11.133 350 64.678 350H108v33H92v17H242.081l-.291-8.25-.29-8.25-8.25-.29-8.25-.291v-32.842l45.25-.288c68.408-.437 62.75 7.602 62.75-89.155V192h-16v66.351c0 68.454-.173 71.601-4.039 73.67-1.169.626-54.122.979-146.721.979H21.349l-2.175-2.314c-2.021-2.152-2.174-3.312-2.174-16.5V300h283v-17H17V121.349l2.304-2.165c2.287-2.148 2.653-2.166 49.75-2.424l47.446-.26.29-8.25.291-8.25-48.291.079c-41.043.067-48.952.313-52.704 1.638M33 200v8h17v-16H33v8m.196 36.25c.883 22.17 8.332 29.615 30.554 30.535l11.25.467V250h-8.953C51.616 250 50 248.384 50 233.953V225H32.748l.448 11.25M208 366.5V383h-83v-33h83v16.5" fill-rule="evenodd"></path>
        </symbol>

        <symbol id="icon-image6" viewBox="0 0 400 400">
            <path d="M84.994.926C68.26 6.073 67 10.235 67 60.366V100H56.678c-12.825 0-18.475 1.745-24.204 7.474C24.517 115.43 25 107.147 25 235.678V350h-8.953C2.479 350-.901 352.745.289 362.795c1.807 15.252 12.079 28.565 26.558 34.42L32.5 399.5h335l5.653-2.285c14.479-5.855 24.751-19.168 26.558-34.42 1.19-10.05-2.19-12.795-15.758-12.795H375l-.044-114.75c-.047-123.876.185-118.443-5.373-125.73-5.32-6.975-10.511-8.975-24.333-9.373L333 99.794l-.022-40.147c-.026-48.016-.491-49.981-13.478-56.989L315.5.5l-114-.173C138.8.233 86.372.502 84.994.926m228.981 18.049c3.14 3.14 3.096 1.302 2.804 116.362l-.279 109.836-2.806 2.414-2.806 2.413H89.112l-2.806-2.413-2.806-2.414-.279-109.836c-.292-115.06-.336-113.222 2.804-116.362 3.106-3.106 224.844-3.106 227.95 0M100 41.46V50h17.081l-.291-8.25-.29-8.25-8.25-.29-8.25-.291v8.541m33.667-7.793c-.367.366-.667 4.191-.667 8.5V50h17V33h-7.833c-4.309 0-8.134.3-8.5.667M167 41.5V50h16V33h-16v8.5m18.5 51.159c-18.731 2.971-42.425 14.303-53.013 25.354l-2.912 3.04 5.65 5.65 5.65 5.65 3.312-2.716c17.597-14.426 35.036-20.982 55.813-20.982s38.216 6.556 55.813 20.982l3.312 2.716 5.65-5.65 5.65-5.65-2.912-3.04c-17.101-17.849-55.157-29.614-82.013-25.354M67 182.386v65.386l2.793 5.346c7.661 14.665.926 13.975 133.218 13.653L314.5 266.5l5.188-2.735c2.853-1.505 6.327-4.229 7.719-6.054 5.781-7.579 5.593-5.036 5.593-75.679V117h10.186c9.081 0 10.436.236 12.5 2.174l2.314 2.175V350H42v-25h300.081l-.291-8.25-.29-8.25-149.75-.253L42 307.993V121.629l2.174-2.315c2.001-2.129 3-2.314 12.5-2.314H67v65.386m119.5-55.985c-8.989 2.06-17.879 5.981-24.86 10.962-9.524 6.796-9.441 6.407-2.791 12.987l5.783 5.724 3.934-3.138c18.367-14.65 44.501-14.65 62.868 0l3.934 3.138 5.793-5.733c6.807-6.737 6.889-6.487-4.662-14.213-13.796-9.227-34.557-13.266-49.999-9.727m2.673 34.025c-4.185 1.362-12.173 6.239-12.173 7.431 0 .322 2.54 3.151 5.643 6.288l5.644 5.703 2.918-2.157c2.21-1.634 4.343-2.158 8.795-2.158s6.585.524 8.795 2.158l2.918 2.157 5.894-5.97 5.893-5.97-2.5-2.024c-7.462-6.041-22.247-8.577-31.827-5.458M167 371v4h66v-8h149.051l-1.443 2.75c-2.123 4.046-8.572 9.929-12.826 11.701-5.66 2.358-329.904 2.358-335.564 0-4.254-1.772-10.703-7.655-12.826-11.701L17.949 367H167v4" fill-rule="evenodd"></path>
        </symbol>

    </svg>