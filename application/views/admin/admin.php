<!DOCTYPE html>
<html lang="vi">
	<head>
        <base href="<?php echo baseUrl; ?>">
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="template/font-awesome-4.6.3/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="template/css/admin/admin.css">
        <?php if($template == 'admin/quantri'){ ?>
            <link type="text/css" rel="stylesheet" href="template/css/admin/home.css">
        <?php } ?>
        <?php if($template == 'admin/article/edit'){ ?>
            <link type="text/css" rel="stylesheet" href="template/css/admin/edit_article.css">
        <?php } ?>

        <script type="text/javascript" src="template/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="template/js/admin.js"></script>
        <?php if($template == 'admin/article/edit'){ ?>
            <script language="javascript" type="text/javascript" src="template/ckeditor/ckeditor.js"></script>
        <?php } ?>
	</head>

    <body>
        <div id="wrapper">
            <div id="header">
                <div class="top">
                    <div class="navbar-top-links">
                        <a href="#" class="first-item">
                            <i class="fa fa-phone"></i>
                            <span>00-62-658-658 - </span>
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span>Contact us today to get our support!</span>
                        </a>
                    </div>
                    
                    <div id="user-info">
                        <p>Xin chào <span><?php echo $this->session->userdata('user_name') ?></span> đã đăng nhập vào hệ thống</p>
                        <p><a href="./logout">Đăng xuất</a></p>
                    </div>
                </div>

                <div id="banner">
                    <div id="logo"><a href="#"><img src="template/images/logo.png" /></a></div>
                </div>

                <div id="navbar">
                    <ul>
                        <li class="active"><a href="./admin">home</a></li>
                        <li><a href="./admin/user">thành viên</a></li>
                        <li><a href="./admin/category">chuyên ngành</a></li>
                        <li><a href="./admin/subject">môn học</a></li>
                        <li><a href="./admin/article">bài đăng</a></li>
                        <li><a href="./admin/adv">quảng cáo</a></li>
                        <li><a target="_blank" href=".">xem website</a></li>
                    </ul>
                </div>
            </div>

            <div id="body">
                <?php $this->load->view($template); ?>
            </div>

            <div id="footer">
                <div id="footer-info">
                    <h4>trung tâm hỗ trợ và giảng dạy trực tuyến NLQ</h4>
                    <p><span>Địa chỉ:</span> Tầng 5, Tòa nhà A4, Ngõ 120 Hoàng Quốc Việt - Cầu Giấy - Hà Nội | <span>Phone</span> (04) 3537 6697</p>
                    <p><span>Trụ sở 2:</span> Số 25/178/71 Tây Sơn - Đống Đa - Hà Nội | <span>Hotline</span> 0968 511 155</p>
                    <p>Bản quyền thuộc NLQ</p>
                </div>
            </div>
        </div>
    </body>
</html>