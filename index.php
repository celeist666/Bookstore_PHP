<!DOCTYPE html>
<html lang="en">

<head>
	<title>꿈을 키우는 세상 - 인터넷교보문고</title>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!--===============================================================================================-->
	<link href="images/icons/favicon.png" rel="icon" type="image/png">
	<!--===============================================================================================-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="fonts/themify/themify-icons.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="fonts/elegant-font/html-css/style.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="vendor/animate/animate.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="vendor/animsition/css/animsition.min.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="vendor/select2/select2.min.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="vendor/slick/slick.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="vendor/lightbox2/css/lightbox.min.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="css/util.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<!--===============================================================================================-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<!--===============================================================================================-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
	<!--===============================================================================================-->
</head>

<body class="animsition">
	<!-- Header -->
	<?php include 'header.php'?>
	<!-- Banner -->
	<section class="banner bgwhite" style="padding 0px">
		<div class="container">
			<div class="row">
				<div class="carousel hov-img-zoom slide col-xs-9 col-sm-9 col-md-9 col-lg-9 m-l-r-auto" data-ride="carousel" id="myCarousel" style="margin:0 auto; padding:0px;">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<a href="product.php?cat1=국내도서&cat2=경제/경영&cat3=경영일반"><img alt="1" src="images/index_banner_01.jpg" style="width:100%; margin:0px auto;"></a>
						</div>
						<div class="item">
							<a href="product.php?cat1=국내도서&cat2=정치/사회&cat3=정치/외교"><img alt="2" src="images/index_banner_02.jpg" style="width:100%; margin:0px auto;"></a>
						</div>
						<div class="item">
							<a href="product.php?cat1=국내도서&cat2=소설&cat3=한국소설"><img alt="3" src="images/index_banner_03.jpg" style="width:100%; margin:0px auto;"></a>
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" data-slide="prev" href="#myCarousel" style="width: 50px;"><span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" data-slide="next"
						href="#myCarousel" style="width: 50px;"><span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span></a>
				</div>
				<img alt="banner_extra" class="col-xs-3 col-sm-3 col-md-3 col-lg-3" src="./images/main_extra.png" style="padding:0px;">
				<div class="sec-title col-xs-12 col-sm-12 col-md-12 col-lg-12 m-l-r-auto" style="height:35px;"></div>
				<div class="sec-title col-xs-12 col-sm-12 col-md-12 col-lg-12 m-l-r-auto">
					<h2 class="m-text5 t-center">BEST SELLERS</h2>
				</div>
				<div class="sec-title col-xs-12 col-sm-12 col-md-12 col-lg-12 m-l-r-auto" style="height:55px;"></div>
				<?php
				$pdo = new PDO('mysql:host=localhost;dbname=bookstore;
				charset=utf8', 'root', '4885');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = 'select thumb, cat1, cat3, no from book where no in (select book_no from(select book_no, sum(quantity) as s from orders group by book_no order by s desc limit 12) as b);';
				$stmt = $pdo->prepare($sql);
				$stmt->execute();

				while($row = $stmt -> fetch()) {
				    echo '<div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 m-l-r-auto" style="padding: 0px 15px 0px 0px;">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
					<a href="product-detail.php?no='.$row["no"].'">
						<img alt="IMG-BENNER" src="';
						echo $row["thumb"];
						echo '" style="margin: 50px 0px 0px 0px;"></a>
						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" href="product-detail.php?no='.$row["no"].'">';
						echo $row["cat1"].'&#47;'.$row["cat3"].'</a>
						</div>
					</div>
				</div>';
				}
				?>
			</div>
		</div>
	</section>


	<?php include 'footer.php'; ?>
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top"><i aria-hidden="true" class="fa fa-angle-double-up"></i></span>
	</div><!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js" type="text/javascript">
	</script>
	<!--===============================================================================================-->

	<script src="vendor/animsition/js/animsition.min.js" type="text/javascript">
	</script>
	<!--===============================================================================================-->

	<script src="vendor/bootstrap/js/popper.js" type="text/javascript">
	</script>
	<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript">
	</script>
	<!--===============================================================================================-->

	<script src="vendor/select2/select2.min.js" type="text/javascript">
	</script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->

	<script src="vendor/slick/slick.min.js" type="text/javascript">
	</script>
	<script src="js/slick-custom.js" type="text/javascript">
	</script>
	<!--===============================================================================================-->

	<script src="vendor/countdowntime/countdowntime.js" type="text/javascript">
	</script>
	<!--===============================================================================================-->

	<script src="vendor/lightbox2/js/lightbox.min.js" type="text/javascript">
	</script>
	<!--===============================================================================================-->

	<script src="vendor/sweetalert/sweetalert.min.js" type="text/javascript">
	</script>

	<script src="js/main.js">
	</script>
</body>`

</html>
