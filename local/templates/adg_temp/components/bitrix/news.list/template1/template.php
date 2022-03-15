<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="content">
    <img class="left_arrow" onclick="plusSlides(1)" src="<?= SITE_TEMPLATE_PATH ?>/images/left_arrow.svg" alt="<-"/>

    <div class="slideshow-container">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
//       var_dump($arItem);
            ?>
            <div class="flip-card" id="card_<?=$arItem["ID"]?>">
                <div class="slide flip-card-inner">
                    <div class="thing flip-card-front">
                        <div class="seller">
                            <img class="dude" src="<?= SITE_TEMPLATE_PATH ?>/images/dude_black.svg" alt="dude">
                            Продавец:
                        </div>
                        <div class="mobile__info">
                            <div class="left">
                                <img class="time" src="<?= SITE_TEMPLATE_PATH ?>/images/clock.svg" alt="clock">
                                Завершится<br> через:<?= $arItem["PROPERTIES"]["END_TIME"]["VALUE"]?>
                            </div>
                            <div class="right">
                                <img class="mobile_moreinfo_image" src="<?= SITE_TEMPLATE_PATH ?>/images/show_info.svg"
                                     alt="+">
                            </div>
                        </div>
                        <div class="slider">
                            <div class="slider__wrapper">
                                <div class="slider__items">
                                    <?php foreach ($arItem['PROPERTIES']['KARTINKI']['VALUE'] as $pic): ?>
                                        <? $src = CFile::GetPath($pic); ?>
                                        <div class="slider__item">
                                            <img class="slider_image" src="<?= $src; ?>">
                                        </div>
                                    <? endforeach; ?>
                                </div>
                            </div>
                            <button class="participate_button">Участвовать</button>
                        </div>
                    </div>

                    <div class="info flip-card-back">
                        <div class="left">
                            <img class="time" src="<?= SITE_TEMPLATE_PATH ?>/images/clock.svg" alt="clock">
                            Аукцион завершится через: <span id="end_time_<?=$arItem["ID"]?>"><?= $arItem["PROPERTIES"]["END_TIME"]["VALUE"] ?></span>
                        </div>
                        <div class="right">
                            Подробнее
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/show_info.svg" alt="">
                            <img id="close_info_img" src="<?= SITE_TEMPLATE_PATH ?>/images/cross_in_circle.svg" alt="x">
                        </div>
                        <div class="focus-information">
                            <h1><? echo($arItem["NAME"]) ?></h1>
                            <? echo $arItem["DESCRIPTION"]['VALUE'] ?>
                        </div>
                        <div class="more-info">
                            <?= $arItem["DESCRIPTION"] ?>
                        </div>
                        <div class="price">
                            Текущая цена:
                            <div class="price_info">
                                <p><?= $arItem["PROPERTIES"]["CURRENT_PRICE"]["VALUE"]; ?></p>
                                <img class="info_image" src="<?= SITE_TEMPLATE_PATH ?>/images/info.svg" alt="info">
                            </div>
                        </div>
                        <div class="bet">
                            Ставка:<br>
                            <div class="bet_info">
                                <img class="minus" src="<?= SITE_TEMPLATE_PATH ?>/images/minus.svg" alt="-">
                                1 500 ₽
                                <img class="plus" src="<?= SITE_TEMPLATE_PATH ?>/images/plus.svg" alt="+">
                            </div>
                            <button class="make_bet">Сделать ставку</button>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <img class="right_arrow" onclick="plusSlides(-1)" src="<?= SITE_TEMPLATE_PATH ?>/images/right_arrow.svg" alt="->"/>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "flex";
        dots[slideIndex - 1].className += " active";
    }

    const div = document.querySelector('.popup');

    // document.addEventListener( 'click', (e) => {
    //     const withinBoundaries = e.composedPath().includes(div);
    //     if (!withinBoundaries) {
    //         div.style.display = 'none'; // скрываем элемент т к клик был за его пределами
    //     }
    // });
    div.addEventListener("click", function (e) {
        if (!e.target.closest('.popup__content')) {
            div.style.display = 'none';
        }
    });
</script>


<!--///** @var array $arParams */-->
<!--///** @var array $arResult */-->
<!--///** @global CMain $APPLICATION */-->
<!--///** @global CUser $USER */-->
<!--///** @global CDatabase $DB */-->
<!--///** @var CBitrixComponentTemplate $this */-->
<!--///** @var string $templateName */-->
<!--///** @var string $templateFile */-->
<!--///** @var string $templateFolder */-->
<!--///** @var string $componentPath */-->
<!--///** @var CBitrixComponent $component */-->
<!--//$this->setFrameMode(true);-->
<!--//?>-->
<!--<div class="news-list">-->
<? //if($arParams["DISPLAY_TOP_PAGER"]):?>
<!--	--><? //=$arResult["NAV_STRING"]?><!--<br />-->
<? //endif;?>
<? //foreach($arResult["ITEMS"] as $arItem):?>
<!--	--><? //
//	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
//	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
//	?>
<!--	<p class="news-item" id="--><? //=$this->GetEditAreaId($arItem['ID']);?><!--">-->
<!--		--><? //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			--><? //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><? //=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
<!--						class="preview_picture"-->
<!--						border="0"-->
<!--						src="--><? //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--						width="--><? //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--						height="--><? //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--						alt="--><? //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--						title="--><? //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--						style="float:left"-->
<!--						/></a>-->
<!--			--><? //else:?>
<!--				<img-->
<!--					class="preview_picture"-->
<!--					border="0"-->
<!--					src="--><? //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--					width="--><? //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--					height="--><? //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--					alt="--><? //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--					title="--><? //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--					style="float:left"-->
<!--					/>-->
<!--			--><? //endif;?>
<!--		--><? //endif?>
<!--		--><? //if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
<!--			<span class="news-date-time">--><? //echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--		--><? //endif?>
<!--		--><? //if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
<!--			--><? //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><? //echo $arItem["DETAIL_PAGE_URL"]?><!--"><b>--><? //echo $arItem["NAME"]?><!--</b></a><br />-->
<!--			--><? //else:?>
<!--				<b>--><? //echo $arItem["NAME"]?><!--</b><br />-->
<!--			--><? //endif;?>
<!--		--><? //endif;?>
<!--		--><? //if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
<!--			--><? //echo $arItem["PREVIEW_TEXT"];?>
<!--		--><? //endif;?>
<!--		--><? //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			<div style="clear:both"></div>-->
<!--		--><? //endif?>
<!--		--><? //foreach($arItem["FIELDS"] as $code=>$value):?>
<!--			<small>-->
<!--			--><? //=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><? //=$value;?>
<!--			</small><br />-->
<!--		--><? //endforeach;?>
<!--		--><? //foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!--			<small>-->
<!--			--><? //=$arProperty["NAME"]?><!--:&nbsp;-->
<!--			--><? //if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--				--><? //=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--			--><? //else:?>
<!--				--><? //=$arProperty["DISPLAY_VALUE"];?>
<!--			--><? //endif?>
<!--			</small><br />-->
<!--		--><? //endforeach;?>
<!--	</p>-->
<? //endforeach;?>
<? //if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<!--	<br />--><? //=$arResult["NAV_STRING"]?>
<? //endif;?>
<!--</div>-->