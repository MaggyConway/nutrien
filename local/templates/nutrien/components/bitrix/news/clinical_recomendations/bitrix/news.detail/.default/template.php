<!-- ДЕТАЛЬНАЯ СТРАНИЦА КЛИНИЧЕСКИХ РЕКОМЕДАЦИЙ -->

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true); ?>

<section class="detail_clinical">
    <? $file_path = CFile::GetPath($arResult['PROPERTIES']["PDF_UPLOAD"]['VALUE']); ?>
    <? //echo "<pre>"; var_dump($arResult['PROPERTIES']["PDF_NAME"]["VALUE"]); echo "</pre>"; ?>

    <? $arrayTags =  explode(',', $arResult["TAGS"]); ?>

    <? if ($arResult["PROPERTIES"]["PDF_TEMPLATE"]["VALUE_XML_ID"][0] == "YES"): ?>

    <div class="flex_clinical" style="height: 140px">
        <div>
            <h1><? echo $arResult["NAME"] ?></h1>
            <ul class="tags tags--pdf_page">
                <? foreach ($arrayTags as $tagItem) : ?>
                    <li class="itemTag">
                        <?= $tagItem; ?>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
        <div class="detail_picture" style="background: url('<? echo $arResult["DETAIL_PICTURE"]["SRC"] ?>') no-repeat top center; background-size: contain"></div>
    </div>
    <div class="detail_text"><?echo $arResult["DETAIL_TEXT"];?></div>
    <div class="download__detail">
        <div class="download__title"><?= $arResult['PROPERTIES']["PDF_NAME"]["VALUE"] ?></div>
        <a href="<?= $file_path ?>" target="_blank">Скачать PDF файл</a>
    </div>
    
    <? elseif ($arResult["PROPERTIES"]["PDF_TEMPLATE"]["VALUE_XML_ID"][0] == "NO"): ?>

        <div class="flex_clinical">
            <div>
                <h1><? echo $arResult["NAME"] ?></h1>
                <ul class="tags tags--pdf_page">
                    <? foreach ($arrayTags as $tagItem) : ?>
                        <li class="itemTag">
                            <?= $tagItem; ?>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
            <div class="detail_picture" style="background: url('<? echo $arResult["DETAIL_PICTURE"]["SRC"] ?>') no-repeat top center; background-size: contain"></div>
        </div>

        <div class="detail_text"><?echo $arResult["DETAIL_TEXT"];?></div>
    <? endif; ?> 
</section>