<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php use Bitrix\Main\Page\Asset; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/styles.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/settings_page.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/script.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scroll.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.min.js');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width" initial-scale="1.0">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    Asset::getInstance()->addString('<meta charset="utf-8">');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&display=swap" rel="stylesheet">');
    Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com">');
    ?>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<header>
    <div class="title">
        <img class="logo_vertical" src="<?= SITE_TEMPLATE_PATH ?>/images/ww.svg" alt="logo">
        Store of custom clothes
    </div>
    <div class="authorization">
        <a href="#popup" class="popup-link"><img class="dude" src="<?= SITE_TEMPLATE_PATH ?>/images/dude_white.svg"
                                                 alt="dude"></a>
        Войти
    </div>
</header>
<!--<div class="authorization">-->
<!--    <img class="dude" src="--><?php //=SITE_TEMPLATE_PATH?><!--/images/dude_black_big.png">-->
<!--    Войти-->
<!--</div>-->
<div class="container wrapper">
