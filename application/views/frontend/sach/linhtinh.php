<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="www.nhocthamlam.coo.me" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/css/style.css");?>"/>
    <script language="javascript" src="http://ajax.Googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script language="javascript" src="<?php echo base_url("web/js/home.js");?>"></script>
    <title>Sach | Vitbay.vn</title>
</head>

<body>
    <div id="wrapper" align="center">
        <div id="top">
            <div id="ja-banner" align="left">
                <div id="logo">
                    <h1 style="color: #fe105c;">Vitbay.vn</h1>
                </div>
                <div id="ja-form">
                    <div id="">
                        HN:<b style="color: #12a6ce; font-size: 15px;">01675.390.105</b> - HCM: <b style="color: #12a6ce; font-size: 15px;">01266079875</b>
                    </div>
                    <div class="form">
                        <form name="form" action="" method="post">
                            <p>
                                <input type="text" name="keyword" size="25" value="Tim la thay..."/>
                                <button type="submit" name="find">Tim kiem</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div><!--End ja-banner-->

            <div id="topnav">
                <a href="<?php echo site_url("home");?>" title="home"><img src="<?php echo base_url("web/photos/ico-home.png")?>" width="25px" height="25px"/></a> |
                <a href="<?php echo site_url("home/sach");?>" title="Sach">SÁCH</a> |
                <a href="<?php echo site_url("home/maytinh");?>" title="May Tinh">MÁY TÍNH</a> |
                <a href="<?php echo site_url("home/thoitrang");?>" title="Thoi Trang">THỜI TRANG</a> |
                <a href="<?php echo site_url("home/dienthoai");?>" title="Dien Thoai">ĐIỆN THOẠI</a>
            </div><!--End #topnav-->
        </div><!--End #top-->

        <div id="container">
            <div class="ja-content" align="left">
                <ul>
                    <li><a href="">Sách giảm giá</a></li>
                    <li><a href="">Sách bán chạy nhất</a></li>
                    <li><a href="">Sách mới về</a></li>
                    <li><a href="<?php echo site_url("home/view_sach_duoc_qt");?>">Sách được quan tâm nhiều nhất</a></li>
                </ul>
            </div>
            <div class="maincontent">
                <div id="">
                    <?php echo count($id);?>
                    <table style="float: left;">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Ten Sach</td>
                                <td>Thoi gian</td>
                            </tr>
                        </thead>
                        <?php
                        for($i=0; $i<count($id); $i++)
                        {
                            echo "
                                <tbody>
                                    <tr>
                                        <td>".$id[$i]."</td>
                                        <td>".$ten[$i]."</td>
                                        <td>".$namxb[$i]."</td>
                                    </tr>
                                </tbody
                                ";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div><!--End container-->
    </div><!--End wrapper-->
    <div id="footer">
        <div>

        </div>
        <div id="div01">
            <h4>CÔNG TY CP TRUYỀN THÔNG BÔN BA</h4>
            <p>Địa chỉ giao dịch: Khu nhà C - FIT - HNUE - 136 Xuân Thủy - Cầu Giấy - HN</p>
            <p>Trụ sở chính: Ngõ 197 - Yên Hòa - Cầu Giấy - HN</p>
            <p>Tel: 04. 09 666 888 hoặc 04. 03 111 333</p>
            <p>Hotline: 01675.390.105</p>
            <p>Email: nhocyeuphp@gmail.com hoặc nhocyeuphp@hotmai.com</p>
            <p>Website: http://www.tzwebz.zymichost.com hoặc http://www.nhocthamlam.coo.me</p>
        </div><!--End div01-->

        <div id="div02">
            <p>&copy;Copyright 2011 tzwebz.zymichost.com, All rights reserved</p>
            <p>Designed and Powered by Đặng Chí Thảo</p>
        </div><!--End div02-->
    </div><!--End footer-->

</body>
</html>
