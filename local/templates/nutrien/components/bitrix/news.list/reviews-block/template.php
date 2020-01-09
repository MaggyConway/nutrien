<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="reviews">
    <h2>Отзывы</h2>
    <div id="reviews__slider">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="reviews__slider__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                
                <? //echo '<pre>'; var_dump($arItem["PREVIEW_PICTURE"]["SRC"]); echo '</pre>'; ?>

                <div class="photo" style="background: url(<? echo $arItem["PREVIEW_PICTURE"]["SRC"] ?>);"></div>

                <div class="title">
                    <div class="name"><? echo $arItem["NAME"] ?></div>
                    <div class="position"><? echo $arItem["PROPERTIES"]["REVIEWS_POSITION"]["VALUE"] ?></div>
                </div>

                <input type="text" class="rate_value" style="position: absolute; opacity: 0; user-select: none; z-index: -1" value="<?= $arItem["DISPLAY_PROPERTIES"]["RATE"]["VALUE"]; ?>"/>

                <div class="txt">
                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                </div>


            </div>
        <? endforeach; ?>
    </div>
</section>



