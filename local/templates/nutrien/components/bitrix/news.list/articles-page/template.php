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

<div class="articles-box">
    <section class="articles"> 
        <? foreach ($arResult["ITEMS"] as $arItem) : ?>

            <?
            $res = CIBlockElement::GetByID($arItem["ID"]);
            if ($ar_res = $res->GetNext()){

                $tags = $ar_res['TAGS'];
            } else {
                $tags = '';
            }
            $arrayTags =  explode(',', $tags);

            //var_dump($arItem);

            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" class="articles__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                
                <div class="articles__item__tags">
                    <div class="articles__item__img" style="background: url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>') no-repeat top center; background-size: cover;"></div>

                    <ul>
                        <?  foreach ($arrayTags as $tagItem) : ?>  
                            <li class="elemTags itemTag">
                                <?= $tagItem; ?> 
                            </li>
                        <?  endforeach; ?>
                    </ul>
                </div>

                <div class="articles__item__txt">
                    <h3><? echo $arItem["NAME"] ?></h3>
                    <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
                </div>
            </a>
        <? endforeach; ?>

    </section>


    <div class="transition-loader">
      <div class="transition-loader-inner">
        <label></label>
        <label></label>
        <label></label>
        <label></label>
        <label></label>
        <label></label>
    </div>
</div>


</div>