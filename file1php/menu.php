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

<?php
    $tv="select * from product where id='$id'";
    $stm = $o->query($tv);
    $stm->execute();
    while ($data = $stm->fetch(PDO::FETCH_ASSOC)) { ?>
    <img src="./<?php echo $data['image'] ?>" style="width:100px; height=100px;" />
    <?php echo $data['name']?>
    <?php echo $data['price'] ?>
    <?php echo "Mua sản phẩm" ?>
    <?php
	}
	?>
</body>
</html>
<!-- background-color: #71F95F; -->
<!-- echo  $row['HinhAnh'] . '<br/>' .  $row['Ten_SP'] . '<br/>' .  $row['gia']; -->