<!-- СТАНИЦА КАРТОЧКИ ТОВАРА -->

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

$APPLICATION->SetPageProperty("title", $arResult["NAME"]);?>
<div class="product-card-page">
    <div class="shadow_block">
        <div></div>
    </div>

    <div class="wrapper">

       <div id="modal-card-container">
        <div class="modal--background"></div>
        <div class="modal">
            <div class="modal_card_img" style="background: url('<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>');" title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>" id="image_<?= $arResult["PREVIEW_PICTURE"]["ID"] ?>"></div>
            <span class="modal-close"></span>
        </div>
    </div>

    <section class="card">
        <div class="card__item">
            <div class="card__item__img">
                <? if (is_array($arResult["PREVIEW_PICTURE"]) && is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                border="0"
                src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                width="<?= $arResult["PREVIEW_PICTURE"]["WIDTH"] ?>"
                height="<?= $arResult["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
                title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"
                id="image_<?= $arResult["PREVIEW_PICTURE"]["ID"] ?>"
                style="display:block;cursor:pointer;cursor: hand;"
                />
                <img
                border="0"
                src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                id="image_<?= $arResult["DETAIL_PICTURE"]["ID"] ?>"
                style="display:none;cursor:pointer;cursor: hand;"
                />
                <? elseif (is_array($arResult["DETAIL_PICTURE"])): ?>
                    <img
                    border="0"
                    src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                    width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                    height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                    alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                    title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                    />
                    <? elseif (is_array($arResult["PREVIEW_PICTURE"])): ?>
                        <img
                        border="0"
                        src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["PREVIEW_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                    <? endif ?>
                </div>
                <div class="card__item__trans">
                    <div class="item__title"><?= $arResult["NAME"]; ?><span><?= $arResult["DISPLAY_PROPERTIES"]["SUBTITLE"]["VALUE"]; ?></span></div>
                    <?= $arResult["DETAIL_TEXT"] ?>
                </div>
            </div>

            <div class="tabs-container">
                <ul class="tabs">
                    <li class="active">
                        <a href="">Описание</a>
                    </li>
                    <li>
                        <a href="">Инструкция</a>
                    </li>
                    <li>
                        <a href="">Пищевая ценность</a>
                    </li>
                    <li>
                        <a href="">Состав</a>
                    </li>
                </ul>
                <div class="tabs-content">
                    <div class="tabs-panel active" data-index="0">
                        <?= $arResult["DISPLAY_PROPERTIES"]["DESCRIPTION"]["~VALUE"]['TEXT']; ?>
                    </div>
                    <div class="tabs-panel" data-index="1">
                        <?= $arResult["DISPLAY_PROPERTIES"]["INSTRUCTION"]["~VALUE"]['TEXT']; ?>
                    </div>
                    <div class="tabs-panel" data-index="2">
                        <?= $arResult["DISPLAY_PROPERTIES"]["FOOD_VALUE"]["~VALUE"]['TEXT']; ?>
                        <!--                            <table>-->
                            <!--                                <tr>-->
                                <!--                                    <td>Пищевая ценность</td>-->
                                <!--                                    <td>в 100 г продукта</td>-->
                                <!--                                    <td>в 100 г продукта</td>-->
                                <!--                                </tr>-->
                                <!--                                <tr>-->
                                    <!--                                    <td>Энергетическая ценность,<br>ккал/кДЖ</td>-->
                                    <!--                                    <td>448/1876</td>-->
                                    <!--                                    <td>100/419</td>-->
                                    <!--                                </tr>-->
                                    <!--                                <tr>-->
                                        <!--                                    <td>Белок, г</td>-->
                                        <!--                                    <td>18,0</td>-->
                                        <!--                                    <td>4,0</td>-->
                                        <!--                                </tr>-->
                                        <!--                                <tr>-->
                                            <!--                                    <td>Жир, г<br>в т.ч. СЦТ 50%</td>-->
                                            <!--                                    <td>16,0</td>-->
                                            <!--                                    <td>3,6</td>-->
                                            <!--                                </tr>-->
                                            <!--                            </table>-->
                                        </div>
                                        <div class="tabs-panel" data-index="3">
                                            <?= $arResult["DISPLAY_PROPERTIES"]["STRUCTURE"]["~VALUE"]['TEXT']; ?>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <? 

                            if(!empty($arResult["DISPLAY_PROPERTIES"]["QA_BLOCK"]["VALUE"])) :
                              global $arrFilter;
                                $arrFilter =  array('ID' => $arResult["DISPLAY_PROPERTIES"]["QA_BLOCK"]["VALUE"]);

                                ?>
                                <?$APPLICATION->IncludeComponent(
                                   "bitrix:news.list", 
                                   "qa-block", 
                                   array(
                                      "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                      "ADD_SECTIONS_CHAIN" => "N",
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
                                      "DETAIL_URL" => "",
                                      "DISPLAY_BOTTOM_PAGER" => "Y",
                                      "DISPLAY_DATE" => "Y",
                                      "DISPLAY_NAME" => "Y",
                                      "DISPLAY_PICTURE" => "Y",
                                      "DISPLAY_PREVIEW_TEXT" => "Y",
                                      "DISPLAY_TOP_PAGER" => "N",
                                      "FIELD_CODE" => array(
                                         0 => "",
                                         1 => "",
                                     ),
                                      "FILTER_NAME" => "arrFilter",
                                      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                      "IBLOCK_ID" => "3",
                                      "IBLOCK_TYPE" => "content",
                                      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                      "INCLUDE_SUBSECTIONS" => "Y",
                                      "MESSAGE_404" => "",
                                      "NEWS_COUNT" => "10",
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
                                         0 => "",
                                         1 => " ",
                                         2 => "",
                                     ),
                                      "SET_BROWSER_TITLE" => "N",
                                      "SET_LAST_MODIFIED" => "N",
                                      "SET_META_DESCRIPTION" => "N",
                                      "SET_META_KEYWORDS" => "N",
                                      "SET_STATUS_404" => "N",
                                      "SET_TITLE" => "N",
                                      "SHOW_404" => "N",
                                      "SORT_BY1" => "ACTIVE_FROM",
                                      "SORT_BY2" => "SORT",
                                      "SORT_ORDER1" => "DESC",
                                      "SORT_ORDER2" => "ASC",
                                      "STRICT_SECTION_CHECK" => "N",
                                      "COMPONENT_TEMPLATE" => "qa-block"
                                  ),
                                   false
                               );?>
                                <?
                            endif;
                            ?>

                        </div>
                        <?

                        if(!empty($arResult["DISPLAY_PROPERTIES"]["REVIEWS"]["VALUE"])) :
                          global $arrFilterAlt;
                            $arrFilterAlt =  array('ID' => $arResult["DISPLAY_PROPERTIES"]["REVIEWS"]["VALUE"]);

                            ?>
                            <?$APPLICATION->IncludeComponent(
                               "bitrix:news.list", 
                               "reviews-detail-block", 
                               array(
                                  "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                  "ADD_SECTIONS_CHAIN" => "N",
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
                                  "DETAIL_URL" => "",
                                  "DISPLAY_BOTTOM_PAGER" => "Y",
                                  "DISPLAY_DATE" => "Y",
                                  "DISPLAY_NAME" => "Y",
                                  "DISPLAY_PICTURE" => "Y",
                                  "DISPLAY_PREVIEW_TEXT" => "Y",
                                  "DISPLAY_TOP_PAGER" => "N",
                                  "FIELD_CODE" => array(
                                     0 => "",
                                     1 => "",
                                 ),
                                  "FILTER_NAME" => "arrFilterAlt",
                                  "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                  "IBLOCK_ID" => "4",
                                  "IBLOCK_TYPE" => "content",
                                  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                  "INCLUDE_SUBSECTIONS" => "Y",
                                  "MESSAGE_404" => "",
                                  "NEWS_COUNT" => "10",
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
                                     0 => "RATE",
                                     1 => "",
                                 ),
                                  "SET_BROWSER_TITLE" => "N",
                                  "SET_LAST_MODIFIED" => "N",
                                  "SET_META_DESCRIPTION" => "N",
                                  "SET_META_KEYWORDS" => "N",
                                  "SET_STATUS_404" => "N",
                                  "SET_TITLE" => "N",
                                  "SHOW_404" => "N",
                                  "SORT_BY1" => "ACTIVE_FROM",
                                  "SORT_BY2" => "SORT",
                                  "SORT_ORDER1" => "DESC",
                                  "SORT_ORDER2" => "ASC",
                                  "STRICT_SECTION_CHECK" => "N",
                                  "COMPONENT_TEMPLATE" => "reviews-block"
                              ),
                               false
                           );?>
                            <?  endif; ?>  


                            <? $APPLICATION->IncludeComponent("bitrix:news.list", "catalog-slider", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",    // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",    // Учитывать права доступа
        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
        "DISPLAY_DATE" => "Y",    // Выводить дату элемента
        "DISPLAY_NAME" => "Y",    // Выводить название элемента
        "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
        "FIELD_CODE" => array(    // Поля
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "1",    // Код информационного блока
        "IBLOCK_TYPE" => "catalog",    // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "10",    // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",    // Название категорий
        "PARENT_SECTION" => "",    // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(    // Свойства
            0 => "SUBTITLE",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
        "SHOW_404" => "N",    // Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
    ),
                            false
                        ); ?>
    <?  // включаемая область для раздела
    $APPLICATION->IncludeFile(
        SITE_DIR."/include/feedback.php",
        Array(),
        Array(
            "MODE"  => "html"  )
    );
    ?>
</div>

<? /*
<div class="catalog-element">
    <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
            <? if (is_array($arResult["PREVIEW_PICTURE"]) && is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                        border="0"
                        src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["PREVIEW_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"
                        id="image_<?= $arResult["PREVIEW_PICTURE"]["ID"] ?>"
                        style="display:block;cursor:pointer;cursor: hand;"
                        OnClick="document.getElementById('image_<?= $arResult["PREVIEW_PICTURE"]["ID"] ?>').style.display='none';document.getElementById('image_<?= $arResult["DETAIL_PICTURE"]["ID"] ?>').style.display='block'"
                />
                <img
                        border="0"
                        src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                        id="image_<?= $arResult["DETAIL_PICTURE"]["ID"] ?>"
                        style="display:none;cursor:pointer;cursor: hand;"
                        OnClick="document.getElementById('image_<?= $arResult["DETAIL_PICTURE"]["ID"] ?>').style.display='none';document.getElementById('image_<?= $arResult["PREVIEW_PICTURE"]["ID"] ?>').style.display='block'"
                />
            <? elseif (is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                        border="0"
                        src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                />
            <? elseif (is_array($arResult["PREVIEW_PICTURE"])): ?>
                <img
                        border="0"
                        src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["PREVIEW_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"
                />
            <? endif ?>
            <td width="100%" valign="top">
                <?
                $pub_date = '';
                if ($arResult["ACTIVE_FROM"])
                    $pub_date = $arResult["ACTIVE_FROM"];
                elseif ($arResult["DATE_CREATE"])
                    $pub_date = $arResult["DATE_CREATE"];

                if ($pub_date)
                    echo '<b>' . GetMessage('PUB_DATE') . '</b>&nbsp;' . $pub_date . '<br />';
                ?>
                <? foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
                    <b><?= $arProperty["NAME"] ?>:</b>&nbsp;<?
                    if (is_array($arProperty["DISPLAY_VALUE"])):
                        echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
                    elseif ($pid == "MANUAL"):
                        ?><a href="<?= $arProperty["VALUE"] ?>"><?= GetMessage("CATALOG_DOWNLOAD") ?></a><?
                    else:
                        echo $arProperty["DISPLAY_VALUE"]; ?>
                    <? endif ?><br/>
                <? endforeach ?>
            </td>
        </tr>
    </table>
    <? foreach ($arResult["PRICES"] as $code => $arPrice): ?>
        <? if ($arPrice["CAN_ACCESS"]): ?>
            <p><?= $arResult["CAT_PRICES"][$code]["TITLE"]; ?>&nbsp;
                <? if ($arParams["PRICE_VAT_SHOW_VALUE"] && ($arPrice["VATRATE_VALUE"] > 0)): ?>
                    <? if ($arParams["PRICE_VAT_INCLUDE"]): ?>
                        (<? echo GetMessage("CATALOG_PRICE_VAT") ?>)
                    <? else: ?>
                        (<? echo GetMessage("CATALOG_PRICE_NOVAT") ?>)
                    <? endif ?>
                <? endif; ?>:&nbsp;
                <? if ($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]): ?>
                    <s><?= $arPrice["PRINT_VALUE"] ?></s> <span
                            class="catalog-price"><?= $arPrice["PRINT_DISCOUNT_VALUE"] ?></span>
                    <? if ($arParams["PRICE_VAT_SHOW_VALUE"]): ?><br/>
                        <?= GetMessage("CATALOG_VAT") ?>:&nbsp;&nbsp;<span
                                class="catalog-vat catalog-price"><?= $arPrice["DISCOUNT_VATRATE_VALUE"] > 0 ? $arPrice["PRINT_DISCOUNT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT") ?></span>
                    <? endif; ?>
                <? else: ?>
                    <span class="catalog-price"><?= $arPrice["PRINT_VALUE"] ?></span>
                    <? if ($arParams["PRICE_VAT_SHOW_VALUE"]): ?><br/>
                        <?= GetMessage("CATALOG_VAT") ?>:&nbsp;&nbsp;<span
                                class="catalog-vat catalog-price"><?= $arPrice["VATRATE_VALUE"] > 0 ? $arPrice["PRINT_VATRATE_VALUE"] : GetMessage("CATALOG_NO_VAT") ?></span>
                    <? endif; ?>
                <? endif ?>
            </p>
        <? endif; ?>
    <? endforeach; ?>
    <? if (is_array($arResult["PRICE_MATRIX"])): ?>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" class="data-table">
            <thead>
            <tr>
                <? if (count($arResult["PRICE_MATRIX"]["ROWS"]) >= 1 && ($arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)): ?>
                    <td><?= GetMessage("CATALOG_QUANTITY") ?></td>
                <? endif; ?>
                <? foreach ($arResult["PRICE_MATRIX"]["COLS"] as $typeID => $arType): ?>
                    <td><?= $arType["NAME_LANG"] ?></td>
                <? endforeach ?>
            </tr>
            </thead>
            <? foreach ($arResult["PRICE_MATRIX"]["ROWS"] as $ind => $arQuantity): ?>
                <tr>
                    <? if (count($arResult["PRICE_MATRIX"]["ROWS"]) > 1 || count($arResult["PRICE_MATRIX"]["ROWS"]) == 1 && ($arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arResult["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)): ?>
                        <th nowrap>
                            <? if (IntVal($arQuantity["QUANTITY_FROM"]) > 0 && IntVal($arQuantity["QUANTITY_TO"]) > 0)
                                echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_FROM_TO")));
                            elseif (IntVal($arQuantity["QUANTITY_FROM"]) > 0)
                                echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], GetMessage("CATALOG_QUANTITY_FROM"));
                            elseif (IntVal($arQuantity["QUANTITY_TO"]) > 0)
                                echo str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_TO"));
                            ?>
                        </th>
                    <? endif; ?>
                    <? foreach ($arResult["PRICE_MATRIX"]["COLS"] as $typeID => $arType): ?>
                        <td>
                            <? if ($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"] < $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"])
                                echo '<s>' . FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]) . '</s> <span class="catalog-price">' . FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]) . "</span>";
                            else
                                echo '<span class="catalog-price">' . FormatCurrency($arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arResult["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]) . "</span>";
                            ?>
                        </td>
                    <? endforeach ?>
                </tr>
            <? endforeach ?>
        </table>
        <? if ($arParams["PRICE_VAT_SHOW_VALUE"]): ?>
            <? if ($arParams["PRICE_VAT_INCLUDE"]): ?>
                <small><?= GetMessage('CATALOG_VAT_INCLUDED') ?></small>
            <? else: ?>
                <small><?= GetMessage('CATALOG_VAT_NOT_INCLUDED') ?></small>
            <? endif ?>
        <? endif; ?><br/>
    <? endif ?>
    <? if ($arResult["CAN_BUY"]): ?>
        <? if ($arParams["USE_PRODUCT_QUANTITY"] || count($arResult["PRODUCT_PROPERTIES"])): ?>
            <form action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data">
                <table border="0" cellspacing="0" cellpadding="2">
                    <? if ($arParams["USE_PRODUCT_QUANTITY"]): ?>
                        <tr valign="top">
                            <td><? echo GetMessage("CT_BCE_QUANTITY") ?>:</td>
                            <td>
                                <input type="text" name="<? echo $arParams["PRODUCT_QUANTITY_VARIABLE"] ?>" value="1"
                                       size="5">
                            </td>
                        </tr>
                    <? endif; ?>
                    <? foreach ($arResult["PRODUCT_PROPERTIES"] as $pid => $product_property): ?>
                        <tr valign="top">
                            <td><? echo $arResult["PROPERTIES"][$pid]["NAME"] ?>:</td>
                            <td>
                                <? if (
                                    $arResult["PROPERTIES"][$pid]["PROPERTY_TYPE"] == "L"
                                    && $arResult["PROPERTIES"][$pid]["LIST_TYPE"] == "C"
                                ): ?>
                                    <? foreach ($product_property["VALUES"] as $k => $v): ?>
                                        <label><input type="radio"
                                                      name="<? echo $arParams["PRODUCT_PROPS_VARIABLE"] ?>[<? echo $pid ?>]"
                                                      value="<? echo $k ?>" <? if ($k == $product_property["SELECTED"]) echo '"checked"' ?>><? echo $v ?>
                                        </label><br>
                                    <? endforeach; ?>
                                <? else: ?>
                                    <select name="<? echo $arParams["PRODUCT_PROPS_VARIABLE"] ?>[<? echo $pid ?>]">
                                        <? foreach ($product_property["VALUES"] as $k => $v): ?>
                                            <option value="<? echo $k ?>" <? if ($k == $product_property["SELECTED"]) echo '"selected"' ?>><? echo $v ?></option>
                                        <? endforeach; ?>
                                    </select>
                                <? endif; ?>
                            </td>
                        </tr>
                    <? endforeach; ?>
                </table>
                <input type="hidden" name="<? echo $arParams["ACTION_VARIABLE"] ?>" value="BUY">
                <input type="hidden" name="<? echo $arParams["PRODUCT_ID_VARIABLE"] ?>"
                       value="<? echo $arResult["ID"] ?>">
                <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "BUY" ?>"
                       value="<? echo GetMessage("CATALOG_BUY") ?>">
                <input type="submit" name="<? echo $arParams["ACTION_VARIABLE"] . "ADD2BASKET" ?>"
                       value="<? echo GetMessage("CATALOG_ADD_TO_BASKET") ?>">
            </form>
        <? else: ?>
            <noindex>
                <a href="<? echo $arResult["BUY_URL"] ?>" rel="nofollow"><? echo GetMessage("CATALOG_BUY") ?></a>
                &nbsp;<a href="<? echo $arResult["ADD_URL"] ?>"
                         rel="nofollow"><? echo GetMessage("CATALOG_ADD_TO_BASKET") ?></a>
            </noindex>
        <? endif; ?>
    <? elseif ((count($arResult["PRICES"]) > 0) || is_array($arResult["PRICE_MATRIX"])): ?>
        <?= GetMessage("CATALOG_NOT_AVAILABLE") ?>
        <? $APPLICATION->IncludeComponent("bitrix:sale.notice.product", ".default", array(
            "NOTIFY_ID" => $arResult['ID'],
            "NOTIFY_URL" => htmlspecialcharsback($arResult["SUBSCRIBE_URL"]),
            "NOTIFY_USE_CAPTHA" => "N"
        ),
            $component
        ); ?>
    <? endif ?>
    <br/>
    <? if ($arResult["PREVIEW_TEXT"]): ?>
        <br/><?= $arResult["PREVIEW_TEXT"] ?><br/>
    <? elseif ($arResult["DETAIL_TEXT"]): ?>
        <br/><?= $arResult["DETAIL_TEXT"] ?><br/>
    <? endif; ?>
    <? if (count($arResult["LINKED_ELEMENTS"]) > 0): ?>
        <br/><b><?= $arResult["LINKED_ELEMENTS"][0]["IBLOCK_NAME"] ?>:</b>
        <ul>
            <? foreach ($arResult["LINKED_ELEMENTS"] as $arElement): ?>
                <li><a href="<?= $arElement["DETAIL_PAGE_URL"] ?>"><?= $arElement["NAME"] ?></a></li>
            <? endforeach; ?>
        </ul>
    <? endif ?>
    <?
    // additional photos
    $LINE_ELEMENT_COUNT = 2; // number of elements in a row
    if (count($arResult["MORE_PHOTO"]) > 0):?>
        <a name="more_photo"></a>
        <? foreach ($arResult["MORE_PHOTO"] as $PHOTO):?>
            <img border="0" src="<?= $PHOTO["SRC"] ?>" width="<?= $PHOTO["WIDTH"] ?>" height="<?= $PHOTO["HEIGHT"] ?>"
                 alt="<?= $arResult["NAME"] ?>" title="<?= $arResult["NAME"] ?>"/><br/>
        <? endforeach ?>
    <? endif ?>
    <? if (is_array($arResult["SECTION"])): ?>
        <br/><a href="<?= $arResult["SECTION"]["SECTION_PAGE_URL"] ?>"><?= GetMessage("CATALOG_BACK") ?></a>
    <? endif ?>
</div>

 */ ?>
