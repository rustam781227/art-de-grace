<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Art de Grace"); ?>
<?php
global $USER;
if ($USER->IsAuthorized()): ?>
    <div class="user-panel">
        <div class="user-panel__wrapper">
            <div class="user-panel__row">
                <img alt="O" src="<?= SITE_TEMPLATE_PATH ?>/images/dude_black.svg" class="dude">
                <?php echo $USER->GetLogin(); ?>
            </div>
            <div class="user-panel__row">
                Участник
                <img alt="|" src="<?= SITE_TEMPLATE_PATH ?>/images/vertical_line.svg">
                Зритель
            </div>
            <div class="user-panel__row">
                <img alt="*" src="<?= SITE_TEMPLATE_PATH ?>/images/settings.svg">
            </div>
        </div>
    </div>
    <?php
    echo('<!--DEBUG:');
    var_dump($USER);
    echo('-->');
    ?>
<?php else: ?>
    <div class="authorization_black">
        <a href="#popup" class="popup-link" id="second-link">
            <img alt="O" src="<?= SITE_TEMPLATE_PATH ?>/images/dude_black.svg" class="dude">
        </a>
        Войти
    </div>
<?php endif; ?>
<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "template1",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => ".default",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "", 1 => "",),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "4",
        "IBLOCK_TYPE" => "products",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
                0 => "START_TIME", 1 => "END_TIME",
                2 => "TITLE", 3 => "CURRENT_PRICE",
                4 => "DESCRIPTION", 5 => "CURRENT_PRICE_DATETIME",),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>