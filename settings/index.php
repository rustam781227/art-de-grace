<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Аккаунт");
?>
    <div class="settings_close">
        <img alt="x" src="<?= SITE_TEMPLATE_PATH ?>/images/settings_close.svg">
    </div>
    <div class="settings_container">
        <div class="settings_menu">
            <div class="settings_user_info">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/participant.svg" alt="(^^)">
                <?php echo $USER->GetLogin(); ?>
            </div>
            <p>Статус аккаунта - Участник</p>
            <ul class="settings_menu_items">
                <li>Мои предложения</li>
                <li>Мои покупки</li>
                <li>Личные данные</li>
            </ul>
            <button>Купить статус</button>
        </div>
        <div class="settings_content">
            asdf
        </div>
    </div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>