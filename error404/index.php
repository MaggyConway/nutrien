<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка 404");
?>

<div class="shadow_block">
	<div>
	</div>
</div>
<section class="articles_cloud empty_cloud error404">
	<div class="wrapper">
		<h1><?$APPLICATION->ShowTitle();?></h1>
		<p>Страница не найдена</p>
		<div class="error_cloud"></div>
	</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>