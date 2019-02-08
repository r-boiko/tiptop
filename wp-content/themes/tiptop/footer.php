<?php
/**
 * Шаблон подвала (footer.php)
 */
$home_id = 5; ?>

<footer class="footer">
    <div class="container">
        <div class="footer__top-part">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6">
                    <h2><?php echo get_field('title_update', $home_id); ?></h2>
                    <p class="subp"><?php echo get_field('sub_title_update', $home_id); ?></p>
                </div>
                <div class="col-lg-5 offset-xl-1">
<!--                    <form class="subscribe-form" id="subscribe-form">-->
<!--                        <div class="input-wrapper flx">-->
<!--                            <input type="text" class="field" name="user_name">-->
<!--                            <button type="submit" class="bttn green-btn">Отправить</button>-->
<!--                        </div>-->
<!--                    </form>-->
                    <div class="subscribe-form" id="subscribe-form">
                        <?php echo do_shortcode('[contact-form-7 id="12" title="Подписка на обновления"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom-part">
            <div class="row">
                <div class="col-sm-6 col-xl-4 row_cell">
                    <a href="/"><img src="<?php echo get_field('logo_footer', $home_id); ?>" alt="logo"></a>
                    <ul class="contacts">
                        <li><a href="#" class="text-link"><i class="icon-location"></i><?php echo get_field('address', $home_id); ?></a></li>
                        <li><a href="tel:<?php echo get_field('phone', $home_id); ?>" class="text-link"><i class="icon-phone"></i><?php echo get_field('phone', $home_id); ?></a></li>
                        <li><a href="mailto:<?php echo get_field('e-mail', $home_id); ?>" class="text-link"><i class="icon-mail-alt"></i><?php echo get_field('e-mail', $home_id); ?></a></li>
                    </ul>
                </div>
                <div class="col-sm-5 offset-sm-1 col-xl-3 offset-xl-0 row_cell">
                    <h4>Информация</h4>
                    <nav>
                        <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                            'theme_location' => 'info', // идентификатор меню, определен в register_nav_menus() в functions.php
                            'container'=> false, // обертка списка, тут не нужна
                            'menu_id' => 'info-nav-ul', // id для ul
                            'items_wrap' => '<ul id="%1$s" class="just-list %2$s">%3$s</ul>',
                            'menu_class' => '', // класс для ul, первые 2 обязательны
                            'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
                        );
                        wp_nav_menu($args); // выводим верхнее меню
                        ?>
                    </nav>
                </div>
                <div class="col-sm-6 col-xl-3 row_cell">
                    <h4>Навигация</h4>
                    <nav>
                        <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                            'theme_location' => 'nav', // идентификатор меню, определен в register_nav_menus() в functions.php
                            'container'=> false, // обертка списка, тут не нужна
                            'menu_id' => 'nav-nav-ul', // id для ul
                            'items_wrap' => '<ul id="%1$s" class="just-list %2$s">%3$s</ul>',
                            'menu_class' => '', // класс для ul, первые 2 обязательны
                            'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
                        );
                        wp_nav_menu($args); // выводим верхнее меню
                        ?>
                    </nav>
                </div>
                <div class="col-sm-5 offset-sm-1 col-xl-2 offset-xl-0 row_cell">
                    <h4>Соц. сети</h4>
                    <nav>
                        <ul class="just-list">
                            <li><a href="<?php echo get_field('facebook', $home_id); ?>" class="text-link" target="_blank"><i class="icon-facebook"></i>Facebook</a></li>
                            <li><a href="<?php echo get_field('twitter', $home_id); ?>" class="text-link" target="_blank"><i class="icon-twitter"></i>Twitter</a></li>
                            <li><a href="<?php echo get_field('vkontakte', $home_id); ?>" class="text-link" target="_blank"><i class="icon-vkontakte"></i>Vkontakte</a></li>
                            <li><a href="<?php echo get_field('instagram', $home_id); ?>" class="text-link" target="_blank"><i class="icon-instagram"></i>Instagram</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- modals -->
 <?php echo do_shortcode('[contact-form-7 id="11" title="Заказать звонок"]'); ?>
<!-- </modals -->

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>