<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/form_modal.php",
    Array(),
    Array(
        "MODE" => "html")
);
?>

<footer>
	<div class="wrapper big_wrapper">
		<ul class="footer__docs">
			<li class="footer__block-title">Документы</li>
			
			<li><a href="/images/docs/usloviya_otbora.pdf" target="_blank">Условия отбора контрагентов</a></li>
			<li><a href="/images/docs/policy.pdf" target="_blank">Политика по сбору, обработке и хранению персональных данных</a></li>
		</ul>
		
		<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"footer",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(""),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "footer",
			"USE_EXT" => "N"
		)
	);?>
		<div class="footer__info">
			<a class="logo" href="/"></a>
			<div class="phone"><a href="tel:+78001009969">+7 (800) 100-99-69</a></div>
		</div>
	</div>
</footer>

<script src="/local/templates/nutrien/js/script.js"></script>
<script src="/local/templates/nutrien/js/modals.js"></script>
</body>
</html>