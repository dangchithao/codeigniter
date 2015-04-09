<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="www.nhocthamlam.coo.me" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/css/style.css");?>"/>
    <script language="javascript" src="http://ajax.Googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script language="javascript" src="<?php echo base_url("web/js/home.js");?>"></script>
    <title>Phụ Kiện Điện Tử | Vitbay.vn</title>
    <style type="text/css">
        ul#menu li#first:hover{
            background: url(<?php echo base_url("web/photos/menu3_copy.jpg");?>)repeat-x;
        }
        ul#menu li:hover{
            background: url(<?php echo base_url("web/photos/nav1_copy.jpg");?>)repeat-x;
        }
        div#logo:hover{
            background: url(<?php echo base_url("web/photos/logo_main_hover2.png");?>);
        }
        div#ico_cart{
            background: url(<?php echo base_url("web/photos/ico-cart3.png");?>)no-repeat;
        }
    </style>
</head>

<body>
    <div id="wrapper" align="center">
        <div id="ja-banner">
            <div id="logo">
                <a href="<?php echo site_url("index");?>"><img src="<?php echo base_url("web/photos/logo_main3.png");?>"/></a>
            </div>
            <div id="ja-form">
                <div id="top">
                    Hà Nội: <b style="color: #0062B7; font-size: 15px;">01675.390.105</b> - Tp.Hồ Chí Minh: <b style="color: #0062B7; font-size: 15px;">01266.079.875</b>
                </div>
                <div class="form_to_cart">
                    <div id="form" style="background: url(<?php echo base_url("web/photos/background_find.jpg");?>)repeat-x;">
                        <form name="form" action="" method="post">
                            <div id="keyword">
                                <input type="text" name="keyword" size="90" style="border: #ffffff;" value="Tìm là thấy..."
                                       onfocus="if(this.value=='Tìm là thấy...'){this.value='';}" 
                                       onblur="if(this.value==''){this.value='Tìm là thấy...'}"/>
                            </div>
                            <div id="find">
                                <a href="#"></a>
                            </div>
                        </form>
                    </div><!--End class form-->
                    <div id="ico_cart">
                        <span>0</span>
                    </div>
                </div>
            </div><!-- End #ja-form -->
        </div><!--End #ja-banner-->

        <div id="topnav">
            <ul id="menu" style="background: url(<?php echo base_url("web/photos/menu2_copy.jpg");?>)repeat-x;">
                <li id="first"><a href="<?php echo site_url("index");?>" title="index"></a></li>
                <li><a href="<?php echo site_url("index/sach");?>" title="SÁCH">SÁCH</a></li>
                <li><a href="<?php echo site_url("index/maytinh");?>" title="MÁY TÍNH">MÁY TÍNH</a></li>
                <li><a href="<?php echo site_url("index/thoitrang");?>" title="THỜI TRANG">THỜI TRANG</a></li>
                <li><a href="<?php echo site_url("index/dienthoai");?>" title="ĐIỆN THOẠI">ĐIỆN THOẠI</a></li>
                <li><a href="<?php echo site_url("index/noithat");?>" title="NỘI THẤT">NỘI THẤT</a></li>
                <li><a href="<?php echo site_url("index/dogiadung");?>" title="ĐỒ GIA DỤNG">ĐỒ GIA DỤNG</a></li>
                <li><a href="<?php echo site_url("index/phukiendientu");?>" title="PHỤ KIỆN ĐIỆN TỬ">PHỤ KIỆN ĐIỆN TỬ</a></li>
                <li id="last"><a href="<?php echo site_url("index/thietbiso");?>" title="THIẾT BỊ SỐ">THIẾT BỊ SỐ</a></li>
            </ul>
        </div><!--End #topnav-->
        <div id="ja-content">
            <ul>
                <li><a href="" title="Sách giảm giá">Sách giảm giá</a></li>
                <li><a href="" title="Thời trang giảm giá">Thời trang giảm giá</a></li>
                <li><a href="" title="Điện thoại giảm giá">Điện thoại giảm giá</a></li>
                <li><a href="" title="Máy tính giảm giá">Máy tính giảm giá</a></li>
            </ul>
        </div>

        <div id="container">
            <div class="maincontent">
                <div id="sidebar">
                    <h3>Điện Thoại</h3>
                    <!--Dien thoai-->
                    <ul>
                        <li><a href="" title="Nokia">Nokia</a></li>
                        <li><a href="" title="Samsung">Samsung</a></li>
                        <li><a href="" title="Apple">Apple</a></li>
                        <li><a href="" title="HTC">HTC</a></li>
                        <li><a href="" title="Blackberry">Blackberry</a></li>
                    </ul>
                </div><!--End sidebar-->

                <div class="content">
                    <div id="j-img">
                        <img src="<?php echo base_url("web/photos/iphone5.jpg");?>" width="780px" height="300px"/>
                    </div>
                    <div id="jmg-con">
                        <img src=""/>
                    </div>
                </div><!--End content-->
            </div><!--maincontent-->

            <!---->
            <div class="spquantam">
                <p id="dm" align="left" style="color:#f7640d; font-size: 20px; font-weight: bold;">Danh mục được quan tâm nhiều nhất</p>
                <div id="listsp">
                    <div>
                        <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                        <h5>Dien thoai</h5>
                    </div>
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
