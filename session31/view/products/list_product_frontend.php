<h1>Product list</h1>
<div class="list_product">
<?php
	while ($product = $listProduct->fetch_assoc()) {
	  $id = $product['id'];
?>
	<div class="product_detail">
			<h2><a href="index.php?controller=products&action=product_detail&id=<?php echo $id?>"><?php echo $product['name']?></a></h2>
			<p><?php echo $product['price']?> VND</p>
			<img src="webroot/uploads/products/<?php echo $product['image']?>">
	</div>
<?php }?>
</div>
<div class="paging">
<?php if ($numberPage > 1) {?>
	<?php for($i = 1; $i <= $numberPage; $i++){?>
		<a href="index.php?controller=products&action=list_products&page=<?php echo $i?>"><?php echo $i?></a>
	<?php }?>
<?php }?>
</div>