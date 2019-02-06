<?php
/**
 * Шаблон подвала (footer.php)
 */
?>

<footer class="footer">
    <div class="container">
        <div class="footer__top-part">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6">
                    <h2>Подпишись на обновления</h2>
                    <p class="subp">Уже подписались около 15&nbsp;000 пользователей</p>
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
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="logo"></a>
                    <ul class="contacts">
                        <li><a href="#" class="text-link"><i class="icon-location"></i>Москва, улица Пушкина 122</a></li>
                        <li><a href="#" class="text-link"><i class="icon-phone"></i>+7 (909) 625 55-33</a></li>
                        <li><a href="#" class="text-link"><i class="icon-mail-alt"></i>seosite@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-5 offset-sm-1 col-xl-3 offset-xl-0 row_cell">
                    <h4>Информация</h4>
                    <nav>
                        <ul class="just-list">
                            <li><a href="#" class="text-link">О компании</a></li>
                            <li><a href="#" class="text-link">Блог</a></li>
                            <li><a href="#" class="text-link">Услуги</a></li>
                            <li><a href="#" class="text-link">Клиенты</a></li>
                        </ul>
<!--                        --><?php //$args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
//                            'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
//                            'container'=> false, // обертка списка, false - это ничего
//                            'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
//                            'menu_id' => 'bottom-nav', // id для ul
//                            'fallback_cb' => false
//                        );
//                        wp_nav_menu($args); // выводим нижние меню
//                        ?>
                    </nav>
                </div>
                <div class="col-sm-6 col-xl-3 row_cell">
                    <h4>Навигация</h4>
                    <nav>
                        <ul class="just-list">
                            <li><a href="#" class="text-link">Новости</a></li>
                            <li><a href="#" class="text-link">Блог</a></li>
                            <li><a href="#" class="text-link">Обратный звонок</a></li>
                            <li><a href="#" class="text-link">Подписка</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-5 offset-sm-1 col-xl-2 offset-xl-0 row_cell">
                    <h4>Соц. сети</h4>
                    <nav>
                        <ul class="just-list">
                            <li><a href="#" class="text-link"><i class="icon-facebook"></i>Facebook</a></li>
                            <li><a href="#" class="text-link"><i class="icon-twitter"></i>Twitter</a></li>
                            <li><a href="#" class="text-link"><i class="icon-vkontakte"></i>Vkontakte</a></li>
                            <li><a href="#" class="text-link"><i class="icon-instagram"></i>Instagram</a></li>
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