<h2>Товары</h2>
<div class="items_box">
	<?php foreach ($items as $value) { ?>
		<div class="item">
			<h3><?php echo $value['name']; ?></h3>
			<p><?php echo $value['text']; ?></p>
			<form action="/execute/cart.php" method="post">
				<input type="hidden" name="item" value="<?php echo $value['id']; ?>">
				<input type="submit" name="add" value="Добавить в корзину">
			</form>
		</div>
	<?php } ?>
</div>