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

<section id="partners">
    <h2>Партнеры</h2>
    <div class="partners__image"></div>
    <div id="partners__companies">

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="partners__companies__item">
                <a href="<?= $arItem["PROPERTIES"]["PARTNERS_LINK"]["VALUE"] ?>" target="_blank" style="background: url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>') no-repeat center center;"></a>
            </div>

        <? endforeach; ?>

    </div>
</section>