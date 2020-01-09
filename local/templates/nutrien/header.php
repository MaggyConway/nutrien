<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<html>
<head>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Roboto:400,500,700&display=swap&subset=cyrillic" rel="stylesheet">


<link rel="stylesheet" href="/local/templates/nutrien/css/modals.css">
<link rel="stylesheet" href="/local/templates/nutrien/css/burger_menu.css">
<link rel="stylesheet" href="/local/templates/nutrien/css/articles-clinicals.css">
<link rel="stylesheet" href="/where_to_buy/style.css">
<link rel="stylesheet" href="/contacts/contacts.css">
<link rel="stylesheet" href="/local/templates/nutrien/css/partners_page.css">
<link rel="stylesheet" href="/local/templates/nutrien/css/style.css">

<link rel="stylesheet" href="/local/templates/nutrien/js/slick/slick.css">
<link rel="stylesheet" href="/local/templates/nutrien/js/slick/slick-theme.css">

<script src="/local/templates/nutrien/js/jquery-3.4.1.min.js"></script>
<script src="/local/templates/nutrien/js/slick/slick.min.js"></script>


<meta name="yandex-verification" content="333645d9fb16192d" />
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56399524, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56399524" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8012733-10"></script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NR4VHTR');</script>
<!-- End Google Tag Manager -->


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-8012733-10');
</script>


<!-- Rating Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3150645", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="https://top-fwz1.mail.ru/counter?id=3150645;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
</div></noscript>
<!-- //Rating Mail.ru counter -->


</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR4VHTR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<?$APPLICATION->ShowPanel()?>


<header class="wrapper big_wrapper">
	<a class="logo" href="/"></a>
	
	<div class="big_menu">
		<?$APPLICATION->IncludeComponent(
			"bitrix:menu", 
			"top_menu", 
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "sub-menu",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "header",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "top_menu"
			),
			false
		);?>
	</div>

	<div class="phone"><a href="tel:+78001009969">+7 (800) 100-99-69</a></div>

	<div class="outer-burger-menu">
		<input class="checkbox-toggle" type="checkbox" />
		<div class="hamburger">
			<div></div>
		</div>
		<div class="burger-menu">
			<div>
				<div>
					<div class="small_menu">
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu", 
							"top_menu", 
							array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "sub-menu",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "header",
								"USE_EXT" => "N",
								"COMPONENT_TEMPLATE" => "top_menu"
							),
							false
						);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header> 

<? $APPLICATION->IncludeComponent("bitrix:breadcrumb","main",Array(
    "START_FROM" => "0",
    "PATH" => "",
    "SITE_ID" => "s1"
));?>