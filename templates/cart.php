<h2>Корзина</h2>
<?php if ($cart_items) { ?>
	<div class="cart_box">
		<?php foreach ($cart_items as $value) { ?>
			<div class="item">
				<h3><?php echo $value['name']; ?></h3>
				<p><?php echo $value['text']; ?></p>
				<p>Количество: <?php echo $value['count']; ?> шт.</p>
				<form action="/execute/cart.php" method="post">
					<input type="hidden" name="item" value="<?php echo $value['id']; ?>">
					<input type="submit" name="delete" value="Удалить из корзины">
				</form>
			</div>
		<?php } ?>
	</div>
<?php } else { ?>
	<p class="empty_title">Корзина пока пуста</p>
<?php } ?>