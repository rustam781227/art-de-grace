<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Аккаунт");
?>
    <div class="settings_close">
        <a href="../index.php"><img alt="x" src="<?= SITE_TEMPLATE_PATH ?>/images/settings_close.svg"></a>
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
                <li>Настройки</li>
            </ul>
            <button>Купить статус</button>
        </div>
        <div class="settings_content">
            <div class="settings__page user_suggestions">
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
                <div class="small-card">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/item.jpg" alt="img">
                    <h3>Balenciaga, хлопковое худи</h3>
                    <div class="price_info">
                        Цена предложения:
                        <p>2222</p>
                    </div>
                    <div class="remaining-time">
                        <span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/time.png" alt="">
                        </span>
                        <span>02:05:01:59</span>
                    </div>
                </div>
            </div>
            <div class="settings__page user-purchases">

            </div>
            <div class="settings__page user-edit-data">

            </div>
        </div>
    </div>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>