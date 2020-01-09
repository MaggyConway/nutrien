<div id="sidebar">
    <? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "main-top", array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "6",
        "SECTION_ID" => $_REQUEST["SECTION_CODE"],
        "SECTION_CODE" => "",
        "COUNT_ELEMENTS" => "N",
        "TOP_DEPTH" => "3",
        "SECTION_FIELDS" => array(
            0 => "",
            1 => "UF_ICON",
            2 => "",
        ),
        "SECTION_USER_FIELDS" => array(
            0 => "",
            1 => "",
        ),
        "SECTION_URL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y"
    ),
        false
    ); ?>

    <a href="" class="sidebar__link--under" id="animate_modal">œ–¿…—-À»—“</a>

</div>