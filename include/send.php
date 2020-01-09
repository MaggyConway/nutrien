<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


if(isset($_POST)  && !empty($_POST)){

	$event = $_POST['event'];
	if($event == 'FEEDBACK'){

		$USER_NAME= $_POST['name'];
		$USER_EMAIL= $_POST['email'];
		$USER_QUESTION= $_POST['question'];
		$fields = array(
			'USER_NAME' => $USER_NAME,
			'USER_EMAIL' => $USER_EMAIL,
			'USER_QUESTION' => $USER_QUESTION
		);
	}
	if($event){
		CEvent::Send($event, 's1', $fields , 'N', '','' );
	}
	echo true;
} else {
	LocalRedirect("404.php", " 404 Страница не найдена");
}?>