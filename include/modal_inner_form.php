<form action="/ajax/send.php" method="POST" class="modal_inner_form">
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="phone" placeholder="Телефон" class="modal_phone_input" required>
    <input type="hidden" name="event" value="FEEDBACK" />
    <button type="submit" id="animate_modal" class="btn_inner_form">Оставить заявку</button>
</form>