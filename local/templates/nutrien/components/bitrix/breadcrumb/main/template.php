<?php 
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
//delayed function must return a string
	if(empty($arResult))
		return "";
	
	if ($APPLICATION->GetCurPage(false) !== '/' && $APPLICATION->GetCurPage(false) !== '/v-razrabotke/' && $APPLICATION->GetCurPage(false) !== '/policy.php' && $APPLICATION->GetCurPage(false) !== '/politika-zashchity-i-obrabotki-personalnykh-dannykh/' && $APPLICATION->GetCurPage(false) !== '/polozhenie-o-poryadke-khraneniya-i-zashchity-personalnykh-dannykh/' && $APPLICATION->GetCurPage(false) !== '/soglasie-posetitelya-sayta-na-obrabotku-personalnykh-dannykh/' && $APPLICATION->GetCurPage(false) !== '/usloviya-otbora-kontragentov/' && $APPLICATION->GetCurPage(false) !== '/personal_policy/' && $APPLICATION->GetCurPage(false) !== '/error404/') {
	$strReturn = '<ul class="breadcrumbs">';

	for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)

	{

	/*if($index > 0)
		$strReturn .= '<li><span>&nbsp;&gt;&nbsp;</span></li>';
*/
		$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
		if($arResult[$index]["LINK"] <> "" && $index!=$itemSize-1)
			$strReturn .= '<li><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a><span>/</span></li>';
		else
			$strReturn .= '<li>'.$title.'</li>';

	}
	$strReturn .= '</ul>';
	return $strReturn;
} else{
	return "";
 }
