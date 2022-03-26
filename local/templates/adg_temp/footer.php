<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
</div>
<footer>
    <div class="footer-container">
        <div class="menu">
            <img class="adg_horizontal" src="<?= SITE_TEMPLATE_PATH ?>/images/adg_horizontal.svg" alt="">
            <div class="menu__items">
                <label>Пункт меню</label>
                <label>Пункт меню</label>
                <label>Пункт меню</label>
                <label>Пункт меню</label>
                <label>Пункт меню</label>
            </div>
        </div>
        <div class="agreement-social">
            <div class="agreement-social__agreement">
                Copyright © интернет-аукцион artdegrace.ru 2020-2021
                Все права защищены<br>
                Используя сайт, вы принимаете соглашение
            </div>
            <div class="agreement-social__social">
                <img class="facebook" src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt="">
                <img class="facebook" src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt="">
                <img class="facebook" src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt="">
                <img class="facebook" src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt="">
            </div>
        </div>
    </div>
    <div id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <img class="cross" src="<?= SITE_TEMPLATE_PATH ?>/images/cross.png" alt="">
                <div class="popup__title">
                    <button id="login">Вход</button>
                    <button id="register">Регистрация</button>
                </div>
                <form id="login-form" class="login-form">
                    <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "",
                        array(
                            "CONFIRM_CODE" => "confirm_code",
                            "LOGIN" => "login",
                            "USER_ID" => "confirm_user_id"
                        )
                    );
                    ?>
                    <!--                    <p>Логин / Почта<input type="text"></p>-->
                    <!--                    <p>Пароль<input type="password"></p>-->
                    <!--                    <p class="popup__error">Неправильно введена почта или пароль</p>-->
                    <!--                    <button id="enter">Войти</button>-->
                </form>
                <form id="registration-form" action="php/check.php" class="registration-form" method="post">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.register",
                        "registration_comp",
                        array(
                            "AUTH" => "Y",
                            "REQUIRED_FIELDS" => array(
                                0 => "EMAIL",
                                1 => "LOGIN",
                                2 => "PASSWORD",
                                3 => "CONFIRM_PASSWORD",
                            ),
                            "SET_TITLE" => "Y",
                            "SHOW_FIELDS" => array(
                                0 => "EMAIL",
                                1 => "LOGIN",
                                2 => "PASSWORD",
                                3 => "CONFIRM_PASSWORD",
                            ),
                            "SUCCESS_PAGE" => "",
                            "USER_PROPERTY" => array(),
                            "USER_PROPERTY_NAME" => "",
                            "USE_BACKURL" => "Y",
                            "COMPONENT_TEMPLATE" => "registration_comp"
                        ),
                        false
                    ); ?>
                </form>
            </div>
        </div>
    </div>
</footer>


<script>
    let slideContainer = document.querySelectorAll('.slider');
    for (let i = 0; i < slideContainer.length; i++) {
        slideShow('#' + slideContainer[i].id, {
            isAutoplay: true
        });
    }
</script>
<script>
    document.querySelector('.popup-link').addEventListener('click',
        function (e) {
            document.querySelector('.popup').style.display = 'flex';
            e.preventDefault();
        });
    document.querySelector('#second-link').addEventListener('click',
        function (e) {
            document.querySelector('.popup').style.display = 'flex';
            e.preventDefault();
        });
    var reg_button = document.getElementById("register");
    var log_button = document.getElementById("login");
    var log = document.getElementById("login-form");
    var reg = document.getElementById("registration-form");
    reg_button.onclick = function () {
        log.style.display = "none";
        reg.style.display = "flex";
        reg_button.style.backgroundColor = "#000";
        reg_button.style.color = "#fff";
        reg_button.style.borderRadius = "5px";
        log_button.style.color = "#8F8F8F";
        log_button.style.backgroundColor = "#fff";
    }
    log_button.onclick = function () {
        reg.style.display = "none";
        log.style.display = "block";
        log_button.style.backgroundColor = "#000";
        log_button.style.color = "#fff";
        reg_button.style.color = "#8F8F8F";
        reg_button.style.backgroundColor = "#fff";
    }
    document.querySelector('.cross').addEventListener('click',
        function () {
            document.querySelector('.popup').style.display = 'none';
        });
</script>

<script>
    let header = document.getElementsByTagName('header');
    let body = document.getElementsByTagName('body');
    header.onclick = function () {
        window.scrollTo(0, 1000);
    }
</script>

<script>
    let card = document.querySelector('.flip-card');
    card.addEventListener('click', function () {
        if (card.classList.contains('active')) {
            card.classList.remove('active');

        } else {
            card.classList.add('active');
        }
    });

</script>

</body>

</html>