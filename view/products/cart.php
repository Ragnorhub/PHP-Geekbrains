<h2>Корзина</h2>
<?php if ($cart_items) { ?>
	<div class="cart_box">
		<?php foreach ($cart_items as $value) { ?>
			<div class="item">
				<h3><?php echo $value['name']; ?></h3>
				<p><?php echo $value['text']; ?></p>
				<form action="/execute/cart.php" method="post">
					<input type="hidden" name="item_id" value="<?php echo $value['id']; ?>">
					<select name="item_count_correct" class="item_count_correct">
						<?php for ($i = 0; $i <= 50; $i++): ?>
							<?php if ($i == $value['count']) { ?>
								<option value="<?php echo $i; ?>" selected><?php echo $i; ?> шт.</option>
							<?php } else { ?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?> шт.</option>
							<?php } ?>
						<?php endfor; ?>
					</select>
				</form>
			</div>
		<?php } ?>
	</div>
	<p class="order_success">Номер вашего заказа: <span id="order_id"></span></p>
	<div class="order_box">
		<form action="/execute/cart.php">
			<input type="submit" name="send_order" value="Отправить заказ"
			       class="send_order">
		</form>
	</div>
<?php } else { ?>
	<p class="empty_title">Корзина пока пуста</p>
<?php } ?>