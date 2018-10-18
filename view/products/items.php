<h2>Товары</h2>
<div class="items_box">
	<?php foreach ($items as $value): ?>
		<div class="item">
			<h3><?php echo $value['name']; ?></h3>
			<p><?php echo $value['text']; ?></p>
			<form action="/execute/cart.php" method="post">
				<input type="hidden" name="item_id" value="<?php echo $value['id']; ?>">
				<select name="item_count">
					<?php for ($i = 1; $i <= 20;$i++): ?>
						<option value="<?php echo $i;?>"><?php echo $i;?> шт.</option>
					<?php endfor; ?>
				</select>
				<input type="submit" name="add_to_cart" value="Добавить в корзину" class="add_to_cart_button">
			</form>
		</div>
	<?php endforeach; ?>
</div>