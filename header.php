<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neuigkeiten
 */

// Menus
$top_menu_args = array(
	'theme_location'  => 'header_menu_location',
	'container'       => 'nav',
	'container_class' => 'header__top-navigation top-navigation',
	'menu_class'      => 'top-navigation__menu top-menu',
);
$mob_menu_args = array(
	'theme_location'  => 'mobile_menu_location',
	'container'       => 'nav',
	'container_class' => 'header__mob-navigation mob-navigation',
	'menu_class'      => 'mob-navigation__menu mob-menu',
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="header__container container">
            <div class="header__logo-wrapper">

                <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
                <?php endif ?>

            </div>
            <!-- /.header__logo-wrapper -->

            <?php wp_nav_menu( $top_menu_args ); ?>

            <button class="header__toggle nav-toggle">
                <span class="nav-toggle__bar-top"></span>
                <span class="nav-toggle__bar-mid"></span>
                <span class="nav-toggle__bar-bot"></span>
            </button>
            <!-- /.header__toggle nav-toggle -->

            <?php wp_nav_menu( $mob_menu_args ); ?>

        </div>
        <!-- /.header__container container -->
    </header>
    <!-- /.header -->

    <main class="site-main">
        Что такое Lorem Ipsum?
        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
        "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию
        размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил
        без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время
        послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы
        электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

        Почему он используется?
        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum
        используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное
        распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь
        ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в
        качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много
        веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много
        версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).


        Откуда он появился?
        Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни
        уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард
        МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в
        Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл
        неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О
        пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в
        эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в
        разделе 1.10.32

        Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de
        Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.

        Где его взять?
        Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например,
        юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для
        серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие
        известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут
        нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он
        использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате
        сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.