<div class="request">
	<img src="/bitrix/templates/armap/images/request__form__photo.png" alt="img">
	<div class="request__wrap--red"></div>
	<div class="request__content">
		<h3>�������� �������?</h3>
		<div>�������� ������ � ��� �������� �������� � ���� � ��������� �����</div>

		<form action="/ajax/send.php" method="POST"  class="request__form">
			<input type="text" name="name" placeholder="���� ���" required />
			<input type="text"  name="phone" placeholder="��� �������" class="modal_phone_input" required />
			<input type="hidden" name="event" value="FEEDBACK" />
			<button type="submit" id="animate_modal" class="request_success">���������</button>
		</form>
	</div>
</div>
