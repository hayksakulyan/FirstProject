<p>Главная страница</p>
<?php echo '<pre>'; print_r( $_SERVER)?>

<?php foreach ($news as $val): ?>
	<h3><?php echo $val['title']; ?></h3>
	<p><?php echo $val['description']; ?></p>
	<hr>
<?php endforeach; ?>