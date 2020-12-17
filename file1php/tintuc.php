<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
</head>
<body background="https://indainam.com/wp-content/uploads/2017/10/mau-background-don-gian-02-768x576.jpg">
	<div class="header">
		<div class="element header1">
			<span class="logo">
				<img src="images/logo.jfif" alt="logo">
			</span>
			<span class="menu">
				<ul>
					<li><a href="trangchu.php">Trang Chủ</a></li>
					<li><a href="#">Giày Bóng Đá</a></li>
					<li><a href="#">Tin Tức</a></li>
					<li><a href="#">Hãng Giày Bóng Đá</a></li>
					<li><a>
						<form action="index.php" method="post" enctype="multipart/form-data">
							<span>
							<input type="text"name="txttimkiem" value="" placeholder="Tìm kiếm sản phẩm gì"><br>
							</span>
							<span><input type="submit"  value="Tìm kiếm" name="btntimkiem"></span>
						  </form>
						</a>
				    </li>
					<li><a href="login.php">Đăng Nhập</a></li>
				  </ul>
			</span>
		</div>
		<div class="clearfix"></div>

	</div>
	<!-- --close  header-->
	<div class="content">
		<div>
            <p>Tin Tức</p>
            <h1>Những Mẫu Giày Bóng đá mới nhất 2020</h1>
            <img src="https://media.thethao247.vn/origin_850x0/upload/thanhtung/2019/08/13/chon-giay-theo-vitri.jpg" />
            <p>2019 là năm vô cùng thành công của ngành sản xuất giày bóng đá. Tiếp bước cho những “bùng nổ” của năm cũ. Cùng Giaydb điểm qua những mẫu giày đá bóng mới nhất 2020 hứa hẹn một lần nữa làm nóng sân chơi giữa các ông lớn như Nike hay Adidas!</p>
            <p>
            Phiên bản Nike Lunar Gato 2 được đánh giá là một trong những huyền thoại bất bại của dòng giày bóng đá sân Futsal. Vào ngày 7.04.2020 Nike đã ra mắt người hâm mộ mẫu React Gato như một bản nâng cấp của phiên bản Lunar Gato 2 trước đó. 
            </p>
            <p>
            Thiết kế đặc trưng cho mẫu giày mới này nhằm gia tăng khả năng kiểm soát bóng của cầu thủ. Một cái tên hứa hẹn mang lại nhiều bứt phá và có thể trở thành đôi giày bóng đá đáng mơ ước trong năm 2020 này!
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NR6HPxZBX1Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
	</div>
	<!-- --close  element-->
	<div class="clearfix"></div>
	<div class="footer">
		<h1>Shop Giày Bóng Đá</h1>
        <h3>Chủ shop: Thịnh Thanh</h3>
		<h3>Liên hệ sdt: 01884475616 hoặc gmail:kaitoukid@gmail.com</h3>
		<h3>Địa chỉ: 55 Hòa Bình, P. Tân Thới Hòa, Q. Tân Phú, TP. Hồ Chí Minh.</h3>
	</div>
</body>
<script>
jQuery(document).ready(function() {
var offset = 220;
var duration = 500;
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > offset) {
jQuery('.back-to-top').fadeIn(duration);} else {
jQuery('.back-to-top').fadeOut(duration);}});
jQuery('.back-to-top').click(function(event) {
event.preventDefault();
jQuery('html, body').animate({scrollTop: 0}, duration);
return false;})});</script>
<style>
div#page {
max-width: 900px;
margin-left: auto;
margin-right: auto;
padding: 20px;}
.back-to-top {
position: fixed;
bottom: 2em;
right: 0px;
text-decoration: none;
color: #000000;
background-color: rgba(235, 235, 235, 0.80);
font-size: 12px;
padding: 1em;
display: none;}
.back-to-top:hover {
text-decoration: none;}</style>
<a href="#" class="back-to-top"><img src="https://thenaynhe.com/wp-content/uploads/2019/09/them-nut-len-dau-trang-back-to-top-button-63-2.jpg" alt="Back to Top" /></a>
</html>
<!-- background-color: #71F95F; -->
<!-- echo  $row['HinhAnh'] . '<br/>' .  $row['Ten_SP'] . '<br/>' .  $row['gia']; -->