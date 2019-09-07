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
	<a href="index.php?controller=products&action=list_products&page=1">1</a>
	<a href="index.php?controller=products&action=list_products&page=2">2</a>
	<a href="index.php?controller=products&action=list_products&page=3">3</a>
</div>