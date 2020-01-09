<div class="request">
	<img src="/bitrix/templates/armap/images/request__form__photo.png" alt="img">
	<div class="request__wrap--red"></div>
	<div class="request__content">
		<h3>Остались вопросы?</h3>
		<div>Оставьте заявку и наш менеджер свяжется с Вами в ближайшее время</div>

		<form action="/ajax/send.php" method="POST"  class="request__form">
			<input type="text" name="name" placeholder="Ваше имя" required />
			<input type="text"  name="phone" placeholder="Ваш телефон" class="modal_phone_input" required />
			<input type="hidden" name="event" value="FEEDBACK" />
			<button type="submit" id="animate_modal" class="request_success">ОТПРАВИТЬ</button>
		</form>
	</div>
</div>
