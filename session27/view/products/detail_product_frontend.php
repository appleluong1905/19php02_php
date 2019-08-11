<h1>Product detail</h1>
<div class="list_product">
	<div class="product_detail_full">
			<h2><?php echo $detailProduct['name']?></h2>
			<p><?php echo $detailProduct['price']?> VND</p>
			<img src="webroot/uploads/products/<?php echo $detailProduct['image']?>">
			<a href="index.php?controller=products&action=buy&id=<?php echo $detailProduct['id']?>">BUY NOW</a>
	</div>
</div>
<div class="comment">
	<div class="comment_list">
		<div class="comment_detail">
			<div class="comment_author">Chad</div>
			<div class="comment_connent_detail">Chào anh !
Anh cho em hỏi anh đã đủ 20-60 tuổi chưa và đang có những giấy tờ gì như CMND, Hộ khẩu, Bằng lái xe, Hóa đơn điện và số tiền muốn đưa trước, số tháng anh muốn góp để em tìm gói trả góp phù hợp cho anh nha. 
Mong nhận được phản hồi từ anh.</div>
			<div class="comment_time">15:00:01 11/08/2019</div>
		</div>

		<div class="comment_detail">
			<div class="comment_author">Peter</div>
			<div class="comment_connent_detail">Chào anh !
Anh cho em hỏi anh đã đủ 20-60 tuổi chưa và đang có những giấy tờ gì như CMND, Hộ khẩu, Bằng lái xe, Hóa đơn điện và số tiền muốn đưa trước, số tháng anh muốn góp để em tìm gói trả góp phù hợp cho anh nha. 
Mong nhận được phản hồi từ anh.</div>
			<div class="comment_time">16:00:01 11/08/2019</div>
		</div>

		<div class="comment_detail">
			<div class="comment_author">Rooney</div>
			<div class="comment_connent_detail">Chào anh !
Anh cho em hỏi anh đã đủ 20-60 tuổi chưa và đang có những giấy tờ gì như CMND, Hộ khẩu, Bằng lái xe, Hóa đơn điện và số tiền muốn đưa trước, số tháng anh muốn góp để em tìm gói trả góp phù hợp cho anh nha. 
Mong nhận được phản hồi từ anh.</div>
			<div class="comment_time">11:00:01 11/08/2019</div>
		</div>
	</div>
	<div class="comment_content">
		<form action="#" method="POST">
			<textarea cols="40" rows="6"></textarea>
			<p>
				<input type="submit" name="comment" value="Comment">
			</p>
		</form>
	</div>
	
</div>