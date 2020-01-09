<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карточка товара");
?>

<div class="product-card-page">
	<div class="shadow_block"><div></div></div>
	<div class="wrapper">
		
	<ul class="breadcrumbs">
		<li><a href="/">Главная</a></li>
		<span>/</span>
		<li><a href="/products/">Продукты</a></li>
		<span>/</span>
		<li>Нутриэн стандарт</li>
	</ul>

	<section class="card">
		<div class="card__item">
			<div class="card__item__img"></div>
			<div class="card__item__trans">
				<div class="item__title">Нутриэн стандарт<span>с пищевыми волокнами</span></div>
				<p>
					Полноценный специализированный продукт лечебного питания для улучшения пищеварения и&nbsp;нормализации кишечной микрофлоры
				</p>
				<ul>
					<li>Пищевые волокна нормализуют пищеварение</li>
					<li>Нативный молочный белок способствует легкому усвоению</li>
				</ul>
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
					<p>
						Нутриэн Стандарт с&nbsp;пищевыми волокнами&nbsp;&mdash; это специальная смесь с&nbsp;повышенной полезностью для людей, нуждающихся в&nbsp;нутритивной поддержке, а&nbsp;также для здоровых людей, которым необходим дополнительный источник питательных веществ (спортсмены, пожилые люди, специалисты вредных производств и т. п.).
					</p>
					<p>
						Нутриэн Стандарт с&nbsp;пищевыми волокнами назначается взрослым и&nbsp;детям старше 3-х лет, которые не&nbsp;могут, не&nbsp;хотят или не&nbsp;должны питаться самостоятельно. Его состав полностью сбалансирован: в&nbsp;него входят витамины, питательные вещества и&nbsp;микроэлементы, которые нужны для нормального самочувствия и&nbsp;жизнедеятельности.
					</p>
					<p>
						Нутриэн Стандарт с&nbsp;пищевыми волокнами подходит для энтерального питания с&nbsp;помощью зонда или гастростомы. Также из&nbsp;него легко приготовить напиток, который человек может пить его самостоятельно.
					</p>
				</div>
				<div class="tabs-panel" data-index="1">
					<p>Инструкция</p>
				</div>
				<div class="tabs-panel" data-index="2">
					<p>Пищевая ценность</p>
				</div>
				<div class="tabs-panel" data-index="3">
					<p>Состав</p>
				</div>
			</div>
		</div>
	</section>
</div>

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>