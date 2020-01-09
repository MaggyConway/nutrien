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
<section class="products big_wrapper">
    <h2><a href="/products/">Продукты</a></h2>
    <div id="products__slider">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="products__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" class="wrap-link">
                    <div class="products__item__img" style="background: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>);"> </div>
                    <div class="products__item__title">
                        <? echo $arItem["NAME"] ?>
                    </div>
                    <div class="products__item__txt">
                        <?= $arItem["DISPLAY_PROPERTIES"]["SUBTITLE"]["VALUE"]; ?>
                    </div>
                    <div class="products__inner-wrap">
                    </div>
                    <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" class="btn">ПОДРОБНЕЕ</a>
                </a>
            </div>
        <? endforeach; ?>

    </div>
</section>
