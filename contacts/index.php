<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");

 
$APPLICATION->AddHeadScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
?>

<div class="shadow_block">
	<div>
	</div>
</div>
<section class="articles_cloud empty_cloud">
	<div class="wrapper">
		<h1><?$APPLICATION->ShowTitle();?></h1>
	</div>
</section>

<div class="wrapper">
	<section class="contacts">
		<div id="map" class="map">
			
			<div class="baloon_map clicked"><div class="close_baloon_map"></div>
				<div class="box">
					<div class="baloon_map__title">Адрес офиса</div>
					<span>123060, г. Москва, ул. Маршала Рыбалко, д.2/8</span>
				</div>
				<div class="box">
					<div class="baloon_map__title">Наш телефон</div>
					<a href="tel:+74959892415" target="_blank">+7 (495) 989-24-15</a>
				</div>

			</div>

		</div>
	</section>
</div>

























<? // включаемая область для раздела
 $APPLICATION->IncludeFile(
 	SITE_DIR . "/include/feedback.php",
 	Array(),
 	Array(
 		"MODE" => "html")
 );
 ?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>