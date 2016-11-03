<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="template/css/style.css">
        <link rel="stylesheet" type="text/css" href="template/font-awesome-4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="template/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="template/owl-carousel/owl.theme.css">

        <script type="text/javascript" src="template/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="template/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="template/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="template/js/script.js"></script>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="header">
					<!--Top links-->
					<div class="container-fluid">
						<div class="container">
							<div class="nav-top-links">
								<a href="#" class="first-item">
									<i class="fa fa-phone"></i>
									<span>00-62-658-658</span>
								</a>
								<a href="#">
									<i class="fa fa-envelope"></i>
									<span>Contact us today!</span>
								</a>
							</div>

							<div class="support-link">
								<a href="#">Services</a>
								<a href="#">Support</a>
							</div>

							<div id="user-info-top" class="user-info pull-right">
								<div class="dropdown">
									<a href="#" class="current-open" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span>My Account</span>
									</a>
									<ul class="dropdown-menu mega-dropdown" role="menu">
										<li><a href="#">Login <i class="fa fa-user"></i></a></li>
										<li><a href="#">Sign-up <i class="fa fa-sign-in"></i></a></li>
										<li><a href="#">Compare <i class="fa fa-clone"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--End Top links-->

					<!--Logo-->
					<div class="container">
						<div class="row">
							<div class="logo">
								<a href="#"><img src="template/images/logo.png"></a>
							</div>
						</div>
					</div>
					<!--End Logo-->

					<!--Navbar-->
					<div class="container-fluid">
						<div class="row">
							<div class="nav-bar">
								<div class="navbar navbar-default menu-block">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a href="#" class="navbar-brand" >Trang chủ</a>
									</div>
				
									<div class="navbar-collapse collapse" id="menu">
										<ul class="nav navbar-nav">
											<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Khoa học cơ bản <i class="fa fa-caret-down "></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Toán học</a></li>
													<li><a href="#">Vật Lý</a></li>
													<li><a href="#">Hóa học</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Xã hội <i class="fa fa-caret-down "></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Ngữ Văn</a></li>
													<li><a href="#">Lịch sử</a></li>
													<li><a href="#">Địa lí</a></li>
												</ul>
											</li>
											<li><a href="">Hỏi đáp</a></li>
											<li><a href="">Giới thiệu</a></li>
											<li><a href="">Giỏ hàng</a></li>
											<li><a href="">Liên hệ</a></li>
										</ul>
									</div>
								</div>
							</div>

							<!--FIX-NAVBAR-->
							<div class="nav-bar " id="fixNav">
								<div class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a href="#" class="navbar-brand">Trang chủ</a>
									</div>
				
									<div class="navbar-collapse collapse" id="menu">
										<ul class="nav navbar-nav">
											<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Khoa học cơ bản <i class="fa fa-caret-down "></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Toán học</a></li>
													<li><a href="#">Vật Lý</a></li>
													<li><a href="#">Hóa học</a></li>
												</ul>
											</li>
											<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Xã hội <i class="fa fa-caret-down "></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Ngữ Văn</a></li>
													<li><a href="#">Lịch sử</a></li>
													<li><a href="#">Địa lí</a></li>
												</ul>
											</li>
											<li><a href="">Hỏi đáp</a></li>
											<li><a href="">Giới thiệu</a></li>
											<li><a href="">Giỏ hàng</a></li>
											<li><a href="">Liên hệ</a></li>
										</ul>		
									</div>
								</div>
							</div>
							<!--FIX-NAVBAR-->
						</div>
					</div>
					<!--End Navbar-->
				</div>
				<div class="content container">
					<style>
						#shop-cart{
							position: fixed;
							top:100px;
							right: 0;
							z-index: 10000;
						}
						#shop-cart-con{
							display: none;
							padding: 15px;
							background: WHITE;
							outline: 1px solid BLUE;
						}
					</style>

					<script>
						$(document).ready(function(e){
							var btnShopCart = $("#shop-cart");
							//Show cart
							var conShopCart = $("#shop-cart-con");
							$(btnShopCart).click(function(showcart){
								conShopCart.show();
								conShopCart.css({'position' :'fixed','top':'100px','right':'4%','z-index':'10000','width':'25%'});
							})
							//Hide Cart
							var btnhide     = $("#btn-shop-hide");
							$(btnhide).click(function(hidecart) {
								/* Act on the event */
								conShopCart.hide();
							});
						});
					</script>
					<!--SHOP-CART-->
					<div id="shop-cart">
						<ul class="list-unstyled">
						<li><img src="template/images/shop_cart.png" style="width:55px;"  ></li>
						</ul>
					</div>
					<div id="shop-cart-con">
						<ul class="list-unstyled">
						<li><a href="#">Photoshop(7.000 đ)</a><a href="#">Hủy</a></li>
						<li><a href="#">PHP(7.000 đ)</a><a href="#">Hủy</a></li>
						<li><a href="#">Java(7.000 đ)</a><a href="#">Hủy</a></li>
						<li>Tổng: 21.000 đ<a href="#">(Chi tiết giỏ hàng)</a></li>
						<li><a href="#" class="btn btn-primary btn-xs">Thanh toán</a><span class="btn btn-default btn-xs" id="btn-shop-hide" >Ẩn</span></li>
						</ul>
					</div>
					<!--E-SHOP-CART-->
					<div>
						<a href="#" id="back-to-top" title="Back to top">
							<i class="fa fa-arrow-circle-up fa-2x"></i>
						</a>
					</div>

					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-purple">
										<img src="template/images/math.png" alt="Toán học">
									</span>
									<div class="info-box-content">
										<span class="subject">Toán</span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-aqua">
										<img src="template/images/physic.png" alt="Vật lý">
									</span>
									<div class="info-box-content">
										<span class="subject">Vật lý</span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-green">
										<img src="template/images/chem.png" alt="Hóa học">
									</span>
									<div class="info-box-content">
										<span class="subject">Hóa học</span>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-blue">
										<img src="template/images/bio.png" alt="Sinh học">
									</span>
									<div class="info-box-content">
										<span class="subject">Sinh học</span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-yellow">
										<img src="template/images/lite.png" alt="Ngữ Văn">
									</span>
									<div class="info-box-content">
										<span class="subject">Ngữ Văn</span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-red">
										<img src="template/images/hist.png" alt="Tiếng Anh">
									</span>
									<div class="info-box-content">
										<span class="subject">Tiếng Anh</span>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-olive">
										<img src="template/images/hist.png" alt="Lịch sử">
									</span>
									<div class="info-box-content">
										<span class="subject">Lịch sử</span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-teal">
										<img src="template/images/geo.png" alt="Địa lý">
									</span>
									<div class="info-box-content">
										<span class="subject">Địa lý</span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="info-box">
								<a href="#">
									<span class="info-box-icon bg-orange">
										<img src="template/images/more.png" alt="Môn học khác">
									</span>
									<div class="info-box-content">
										<span class="subject">Môn khác</span>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="row video-carousel">
						<div class="video-title col-md-12">
							<p><i class="fa fa-video-camera"></i><span>video bài giảng</span></p>
						</div>

						<div id="owl-demo" class="owl-carousel owl-theme">
						  	<div class="item"><img src="template/images/akali.png" alt="video1"></div>
						  	<div class="item"><img src="template/images/alista.png" alt="video2"></div>
						  	<div class="item"><img src="template/images/annie.png" alt="video3"></div>
						  	<div class="item"><img src="template/images/ashe.png" alt="video4"></div>
						  	<div class="item"><img src="template/images/brand.jpg" alt="video5"></div>
						  	<div class="item"><img src="template/images/caitlyn1.png" alt="video6"></div>
						  	<div class="item"><img src="template/images/caitlyn2.png" alt="video7"></div>
						  	<div class="item"><img src="template/images/elise.png" alt="video8"></div>
						  	<div class="item"><img src="template/images/fiddlesticks.png" alt="video9"></div>
						  	<div class="item"><img src="template/images/graves.png" alt="video10"></div>
						</div>

						<div class="customNavigation">
						  <a class="btn prev"><i class="fa fa-caret-left fa-lg"></i></a>
						  <a class="btn next"><i class="fa fa-caret-right fa-lg"></i></a>
						</div>
					</div>

					<div class="row">
						<div class="left-col col-md-8">
							<div class="adv-top">
								<img src="template/images/819g85L_1474362912115_0.jpeg" alt="adv">
							</div>

							<div class="main-content">
								<div class="notify">
									<div class="row">
										<div class="main-content-title">
											<i class="fa fa-volume-up fa-2x col-md-1"></i>
											<span class="main-title-p col-md-11"><a href="#">Tin tức từ ban quản trị</a></span>
										</div>
									</div>
									<div class="row new-central">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<a href="#"><img src="template/images/logo.png" class="img-responsive" alt="Logo" /></a>
											<p><a class="new-central-title" href="#">Thông báo bảo trì</a></p>
											<p> Ngày 20 - 9 - 2016 Tiến hành bảo trì website trong khoảng thời gian từ 7h- 12h..<a href="#">Xem thêm</a></p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<a href="#"><img src="template/images/tuvan.png" class="img-responsive" alt="Logo" /></a>
											<p><a class="new-central-title" href="#">Thông báo bảo trì</a></p>
											<p> Ngày 20 - 9 - 2016 Tiến hành bảo trì website trong khoảng thời gian từ 7h- 12h..<a href="#">Xem thêm</a></p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<a href="#"><img src="template/images/elise.png" class="img-responsive" alt="Logo" /></a>
											<p><a class="new-central-title" href="#">Thông báo bảo trì</a></p>
											<p> Ngày 20 - 9 - 2016 Tiến hành bảo trì website trong khoảng thời gian từ 7h- 12h..<a href="#">Xem thêm</a></p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<a href="#"><img src="template/images/ashe.png" class="img-responsive" alt="Logo" /></a>
											<p><a class="new-central-title" href="#">Thông báo bảo trì</a></p>
											<p> Ngày 20 - 9 - 2016 Tiến hành bảo trì website trong khoảng thời gian từ 7h- 12h..<a href="#">Xem thêm</a></p>
										</div>
									</div>
								</div>
								
								<div class="row sub-adv">
									<a href="#"><img class="col-md-6 col-xs-12 no-border-right" src="template/images/giamhocphi.jpg"></a>
									<a href="#"><img class="col-md-6 col-xs-12" src="template/images/giamhocphi2.jpg"></a>
								</div>

								<div class="question">
									<div class="row">
										<div class="main-content-title">
											<i class="fa fa-question-circle fa-2x col-md-1"></i>
											<span class="main-title-p col-md-11"><a href="#">Box hỏi đáp</a></span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="ratting button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class=" ratting main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>	
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>
									<div class="row">
										<div class="main-content-content col-md-8  col-xs-12  col-sm-12 col-md-offset-1">
											<a href="#">Thông báo về giá cước, nội quy hỏi đáp, đăng bài trong diễn đàn</a><br>
											<span class="date_time">nglongit95, 23 - 9 - 2016</span>
										</div>
										<div class="button col-md-1">
											<a href="#"><button class="btn btn-primary btn-xs">Sinh Học</button></a>
										</div>
										<div class="main-content-content col-md-2 col-xs-12 pull-right">
											<span class="small date_time">Bình luận: 699</span><br>
											<span class="small date_time">Lượt xem: 6900</span>
										</div>
									</div>

									<div class="row group-box-chat">
										<div class="col-md-2">
											<a href="#" class="btn btn-primary btn-xs"> Toán học</a>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-primary btn-xs"> Vật lý</a>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-primary btn-xs"> Hóa học</a>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-primary btn-xs"> Sinh học</a>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-primary btn-xs"> Văn học</a>
										</div>
										<div class="col-md-2">
											<a href="#" class="btn btn-primary btn-xs"> Môn khác</a>
										</div>
									</div>
							  	</div>
							</div>
						</div>

						<div class="right-col col-md-4">
							<div class="adv-block">
								<img src="template/images/14501954_662513930563076_2130053427_n.png" alt="adv">
							</div>

							<div class="search-form">
								<form class="form-inline" method="POST" action="" name="search">
									<div class="form-group input-serach">
				                        <input type="text" placeholder="Keyword here..." value="" name="">
				                    </div>
									<button type="submit" class="pull-right btn-search"></button>
								</form>
							</div>

							<div class="rating">
								<div class="panel panel-primary">
									<p class="h3 panel-heading">Danh sách đóng góp</p>
									<div class="panel-body">
										<ul class="list-unstyled">
											<li><a href="#" class="col-md-7">Nguyễn Văn A</a> <span class="col-md-5 text-primary ">13k</span><div class="clearfix"></div></li>
											<li><a href="#" class="col-md-7">Nguyễn Văn A</a> <span class="col-md-5 text-primary">13k</span><div class="clearfix"></div></li>
											<li><a href="#" class="col-md-7">Nguyễn Văn A</a> <span class="col-md-5 text-primary">13k</span><div class="clearfix"></div></li>
											<li><a href="#" class="col-md-7">Nguyễn Văn A</a> <span class="col-md-5 text-primary">13k</span><div class="clearfix"></div></li>
											<li><a href="#" class="col-md-7">Nguyễn Văn A</a> <span class="col-md-5 text-primary">13k</span><div class="clearfix"></div></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="list">
								<div class="week-list">
									<a class="btn btn-block btn-primary" href="#">
										<i class="fa fa-gift"></i>
										Danh sách nhận thưởng hàng tuần
									</a>
								</div>
								<div class="month-list">
									<a class="btn btn-block btn-warning" href="#">
										<i class="fa fa-gift"></i>
										Danh sách nhận thưởng hàng tháng
									</a>
								</div>
							</div>

							<div class="adv-block">
								<img src="template/images/zuize.jpg" alt="adv">
							</div>

							<div class="news">
								<div class="box box-primary box-news">
									<div class="box-header width-border">
										<h3 class="box-title">
											<a href="#">Tin tức - Sự kiện</a>
										</h3>
										<div class="box-tools pull-right news-tools">
											<button class="btn btn-box-tool">
												<i class="fa fa-minus icon-news"></i>
											</button>
										</div>
									</div>

									<div class="box-body">
										<ul class="products-list product-list-in-box">
											<li class="item">
												<div class="product-img">
													<img src="template/images/10.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Dự thảo thi THPT quốc gia 2017: Chỉ có 30 phút để làm mỗi môn trong bài thi tổ hợp</a>
													<span class="product-description">Với môn tổ hợp là kết hợp của 3 môn thi, thí sinh sẽ có thời gian ước chừng là 30 phút để làm phần thi của mỗi môn.</span>
												</div>
											</li>
											<li class="item">
												<div class="product-img">
													<img src="template/images/19.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Danh sách thành viên tích cực tuần từ 12/09 đến 19/09</a>
													<span class="product-description">Danh sách thành viên tích cực tuần từ 12/09 đến 19/09.</span>
												</div>
											</li>
											<li class="item">
												<div class="product-img">
													<img src="template/images/29.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Danh sách thành viên tích cực tuần từ 05/09 đến 12/09</a>
													<span class="product-description">Danh sách thành viên tích cực tuần từ 15/09 đến 22/09.</span>
												</div>
											</li>
											<li class="item">
												<div class="product-img">
													<img src="template/images/30.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Danh sách cộng tác viên hoc24 đợt 1</a>
													<span class="product-description">Sau 1 tuần nhận đăng ký tuyển cộng tác viên đợt 1, ban quản trị HOC24 quyết định lựa chọn những bạn có đủ tiêu chí sau sẽ được làm CTV của HOC24: Tổng điểm các môn là 250GP hoặc điểm mỗi môn là 150GP</span>
												</div>
											</li>
											<li class="item">
												<div class="product-img">
													<img src="template/images/77a07a0f60f110ad458b7800d4293112.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Danh sách thành viên tích cực tuần từ 29/08 đến 05/09</a>
													<span class="product-description">Danh sách thành viên tích cực tuần từ 29/08 đến 05/09</span>
												</div>
											</li>
											<li class="item">
												<div class="product-img">
													<img src="template/images/55055206.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Tuyển cộng tác viên cho hoc24</a>
													<span class="product-description">Hoc24.vn cần tìm kiếm các bạn học sinh giỏi làm cộng tác viên (CTV). Nhiệm vụ của cộng tác viên là giúp đỡ các bạn khác trong chuyên mục hỏi đáp.</span>
												</div>
											</li>
											<li class="item">
												<div class="product-img">
													<img src="template/images/130622111121.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Danh sách thành viên tích cực tuần từ 22/08 đến 29/08</a>
													<span class="product-description">Danh sách thành viên tích cực tuần từ 22/08 đến 29/08</span>
												</div>
											</li>
											<li class="item">
												<div class="product-img">
													<img src="template/images/130622112926.jpg" alt="product-img">
												</div>
												<div class="product-info">
													<a class="product-title" href="#">Danh sách thành viên tích cực tuần từ 15/08 đến 22/08</a>
													<span class="product-description">Danh sách thành viên tích cực tuần từ 15/08 đến 22/08</span>
												</div>
											</li>
										</ul>
									</div>

									<div class="box-footer text-center">
										<a href="#">Xem tiếp</a>
									</div>
								</div>
							</div>

							<div class="fanpage">
								<div class="box box-primary box-fanpage">
									<div class="box-header width-border">
										<h3 class="box-title">
											<a href="#">Kết nối</a>
										</h3>
										<div class="box-tools pull-right fan-tools">
											<button class="btn btn-box-tool">
												<i class="fa fa-minus icon-fanpage"></i>
											</button>
										</div>
									</div>
									<div class="box-body box-body-fanpage">
										<img src="template/images/fan-page.png" class="img-responsive" alt="adv">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer">
					<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-6">
						<ul class="dropdown list-unstyled">
							<li><a href="#">Trang chủ</a></li>
							<li><a href="#">Khoa học cơ bản</a></li>
							<li><a href="#">Xã hội</a></li>
							<li><a href="#">Hỏi đáp</a></li>
							<li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Liên hệ</a></li>
						</ul>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-6">
						<ul class="dropdown list-unstyled">
							<li><a href="#">Trang chủ</a></li>
							<li><a href="#">Khoa học cơ bản</a></li>
							<li><a href="#">Xã hội</a></li>
							<li><a href="#">Hỏi đáp</a></li>
							<li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Liên hệ</a></li>
						</ul>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-6">
						<ul class="dropdown list-unstyled">
							<li><a href="#">Trang chủ</a></li>
							<li><a href="#">Khoa học cơ bản</a></li>
							<li><a href="#">Xã hội</a></li>
							<li><a href="#">Hỏi đáp</a></li>
							<li><a href="#">Giới thiệu</a></li>
							<li><a href="#">Liên hệ</a></li>
						</ul>
					</div>
					<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-6">
						<ul class="dropdown list-unstyled">
							<li><a href="#">Liên hệ: Minh khai- Bắc Từ Liêm, Hà Nội</a></li>
							<li><a href="#">Số điện thoại: 0987654321</a></li>
							<li><a href="#">email:abc@gmail.com</a></li>
							<li><a href="#">Thời gian: 7- 23h các ngày trong tuần</a></li>
					</div>
					<div class="license">
						<p class="text-center">Bản quyền thuộc về NLQ</p>
						<p class="text-center">Design by: nglongit95@gmail.com</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</body>
</html>