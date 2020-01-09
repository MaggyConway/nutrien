<div id="modal-callback-container">
	<div class="modal--background"></div>
	<div class="modal">
		<h3>Оставьте заявку</h3>
		<p>С вами свяжется менеджер</p>

        <?
        // включаемая область для раздела
        $APPLICATION->IncludeFile(
            SITE_DIR."/include/modal_inner_form.php",
            Array(),
            Array(
                "MODE"  => "html"  )
        );
        ?>

		<svg class="modal--svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"><rect x="0" y="0" fill="none" width="100%" height="100%" rx="3" ry="3"></rect>
		</svg>
		<span class="modal-close"></span>
	</div>
</div>