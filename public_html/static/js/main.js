$('.add_to_cart_button').on('click', function (e) {
	e.preventDefault();
	var data = {};
	$(this).parent().find('input, textarea, select').each(function () {
		data[this.name] = $(this).val();
	});
	$.post('/execute/cart.php', data, function (data) {
		if (data.status = 'ok') {
			/*
			* здесь должно быть добавление новых элементов в DOM
			* или ajax запрос на обновление корзины
			* поскольку у меня коризна находится на одной странице с каталогом
			* но у нас курс не про JS поэтому я просто обновлю страницу
			*/
			window.location.reload();
		}
	}, 'json');
});

$('.item_count_correct').on('change', function () {
	var data = {};
	$(this).parent().find('input, textarea, select').each(function () {
		data[this.name] = $(this).val();
	});
	$.post('/execute/cart.php', data, function (data) {
		if (data.status = 'ok') {
			window.location.reload();
		}
	}, 'json');
});

$('.send_order').on('click', function (e) {
	e.preventDefault();
	var data = {};
	$(this).parent().find('input, textarea, select').each(function () {
		data[this.name] = $(this).val();
	});
	$.post('/execute/cart.php', data, function (data) {
		if (data.status = 'ok') {
			/*
			* тут все просто, поэтому не перезагружаю страницу, а просто очищаю
			* то что было в корзине и вывожу строку с номером заказа
			*/
			$('.order_box, .cart_box').empty();
			$('#order_id').text(data.id);
			$('.order_success').show();
		}
	}, 'json');
});