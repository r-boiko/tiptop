<?php
/**
 * Template Name: Contacts
 */
get_header(); // подключаем header.php
$page_id = get_the_ID(); ?>


    <main>
        <div class="h1-block bg-light-grey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="text-link"><i class="icon-home-solid"></i>Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 text-right">
                        <h1>Как с нами связаться</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="typical-section">
            <div class="container">
                <div class="row align-items-center contacts">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="text-section var">
                            <h2>Контакты</h2>
                            <?php the_field('contacts_text'); ?>
                            <ul class="contacts-list">
                                <li><i class="icon-location-1"></i><?php the_field('contacts_address'); ?></li>
                                <li><i class="icon-mail-1"></i><a href="mailto:<?php the_field('contacts_mail'); ?>"><?php the_field('contacts_mail'); ?></a></li>
                                <li><i class="icon-mobile"></i><a href="tel:<?php the_field('contacts_phone'); ?>"><?php the_field('contacts_phone'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php echo do_shortcode('[contact-form-7 id="250" title="Контактная форма"]'); ?>
                    </div>
                </div>
                <div class="map" id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2253.916171889105!2d37.21469871621246!3d55.60347258051365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b556c3bbfa1559%3A0x17404dda35c6aa5a!2z0YPQuy4g0J_Rg9GI0LrQuNC90LAsIDEyMiwg0JzQsNGA0YPRiNC60LjQvdC-LCDQnNC-0YHQutCy0LAsINCg0L7RgdGB0LjRjywgMTQzMzUw!5e0!3m2!1sru!2sua!4v1548940852755" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); // подключаем footer.php ?>