<h1>Product detail</h1>
<div class="list_product">
<div class="product_detail">
		<h2><?php echo $detailProduct['name']?></h2>
		<p><?php echo $detailProduct['price']?> VND</p>
		<img src="webroot/uploads/products/<?php echo $detailProduct['image']?>">
		<a href="index.php?controller=products&action=buy&id=<?php echo $detailProduct['id']?>">BUY NOW</a>
</div>
</div>