<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="www.nhocthamlam.coo.me" />
    <script language="javascript" src="http://ajax.Googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="icon" href="<?php echo base_url("web/photos/icon.png");?>" type="image/png"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/css/style.css");?>"/>
   
    <!--css slider-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/slider/css/nivo-slider.css");?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/slider/css/nivo-style.css");?>"/>
    <!--End css slider-->
    
    <!--Js slider-->
    <script language="javascript" src="<?php echo base_url("web/slider/js/nivoslider.js");?>"></script>
    <!--End Js slider-->
    
    <script language="javascript" src="<?php echo base_url("web/js/home.js");?>"></script>
    <title>Vitbay.vn | Laptop, Dienthoai, Thoitrang, sach</title>
    <style type="text/css">
        
        
        #slider {
            background: url(<?php echo base_url("web/slider/images/loading.gif");?>)no-repeat 50% 50%;
        }
        .nivo-controlNav a {
            background: url(<?php echo base_url("web/slider/images/bullets.png");?>)no-repeat;
        }
        .nivo-directionNav a {
            background: url(<?php echo base_url("web/slider/images/arrows.png");?>)no-repeat;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#slider').nivoSlider({
                effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
                slices: 8,
                directionNav: true, //Next & Prev
                directionNavHide: true, //Only show on hover
                controlNav: true, //1,2,3...
                keyboardNav: true //Use left & right arrows
            });
        });
    </script>
</head>

<body>
<!--    <div id="top">
                Hà Nội: <b style="color: #0062B7; font-size: 15px;">01675.390.105</b> - Tp.Hồ Chí Minh: <b style="color: #0062B7; font-size: 15px;">01266.079.875</b>
            </div>-->
    <div class="banner">
    <div id="ja-banner">
            <div id="logo">
                <a href="<?php echo site_url("index");?>"><img src="<?php echo base_url("web/photos/logo_main3.png");?>"/></a>
            </div>
            
            <div id="ja-form">
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
                </div><!-- End class form_to_cart-->
            </div><!-- End #ja-form -->
        </div><!--End #ja-banner-->
    </div>
    <div id="wrapper"> 
        
        <div id="topnav">
            <ul id="menu">
                <li id="first"><a href="<?php echo site_url("front/index");?>" title="TRANG CHỦ"></a></li>
                <li><a href="<?php echo site_url("front/book");?>" title="SÁCH">SÁCH</a></li>
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
                <li><a href="" title="Máy tính giảm giá">Nội thất giảm giá</a></li>
                <li><a href="" title="Máy tính giảm giá">Chương trình khuyến mãi</a></li>
            </ul>
        </div>
        
        <div id="container">
            <div class="maincontent">
                <div id="sidebar">
                    <h3>Danh Mục</h3>
                    <!--Sach-->
                    <ul>
                        <li><h4>Sách tin học</h4></li>
                        <li><a href="#tinhoc" title="Tin Học">Tin học văn phòng</a></li>
                        <li><a href="<?php echo site_url("book/danhcho/Lap-Trinh");?>" title="Lập trình">Lập trình</a></li>
                        <li><a href="#tinhoc" title="Tin Học">Đồ họa</a></li>
                        <li><a href="#tinhoc" title="Tin Học">Mạng máy tính</a></li>
                        <li><a href="#tinhoc" title="Tin Học">Thủ thuật máy tính</a></li>
                        <li><h4>Sách văn học</h4></li>
                        <li><a href="#tinhoc" title="Tin Học">Tin Học</a></li>
                        <li><a href="#vanhoc" title="Văn Học">Văn Học</a></li>
                        <li><a href="#tinhcam" title="Tình Cảm">Tình Cảm</a></li>
                        <li><a href="#tienganh" title="Tiếng Anh">Tiếng Anh</a></li>
                        <li><a href="#kinhte" title="Kinh Tế">Kinh Tế</a></li>
                    </ul>
                    <!--Thoi trang-->
                    <ul>
                        <li><h4>Thời trang</h4></li>
                        <li><a href="" title="Áo">Áo</a></li>
                        <li><a href="" title="Quần">Quần</a></li>
                        <li><a href="" title="Giầy dép">Giầy dép</a></li>
                        <li><a href="" title="Balo - Túi xách">Balo - Túi xách</a></li>
                        <li><a href="" title="Mỹ phẩm">Mỹ phẩm</a></li>
                    </ul>
                    <!--May tinh -->
                    <ul>
                        <li><h4>Máy tính</h4></li>
                        <li><a href="">Laptop</a></li>
                        <li><a href="">Desktop</a></li>
                    </ul>
                    <!--Dien thoai-->
                    <ul>
                        <li><h4>Điện thoại</h4></li>
                        <li><a href="">Nokia</a></li>
                        <li><a href="">Samsung</a></li>
                        <li><a href="">Apple</a></li>
                        <li><a href="">HTC</a></li>
                        <li><a href="">Blackberry</a></li>
                    </ul>
                </div><!--End sidebar-->
                
                <div class="content">
                    <div id="j-img">
                        <!--<img src="<?php //echo base_url("web/photos/iphone5.jpg");?>" width="780px" height="300px"/>-->
                        <div id="slider" class="nivoSlider">
                            <a href="#"><img src="<?php echo base_url("web/slider/photos/nivo1.jpg");?>" alt="" title="Sau một thời gian bị gián đoạn do bận làm lại giao diện cho trang web."/></a>
                            <a href="#"><img src="<?php echo base_url("web/slider/photos/nivo2.jpg");?>" alt="" title="Lorem ipsum dolor sit a met"/></a>
                            <img src="<?php echo base_url("web/slider/photos/nivo3.jpg");?>" alt="" title="This is Sparta!!!" />
                            <img src="<?php echo base_url("web/slider/photos/nivo4.jpg");?>" alt="" title="how about one more for luck" />
                            <img src="<?php echo base_url("web/slider/photos/nivo5.jpg");?>" alt="" title="#caption"/>
                            
                        </div>
                    </div>
                    <div id="jmg-con">
                        <img src=""/>
                    </div>
                    
                    <div class="spquantam">
                        <div id="dm_title"><a name="tinhoc">Danh mục được quan tâm nhiều nhất</a></div>
                        <div id="listsp">
                            <div>
                                <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                                <h5>Điện thoại</h5>
                            </div>
                            <div>
                                <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                                <h5>Điện thoại</h5>
                            </div>
                            <div>
                                <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                                <h5>Điện thoại</h5>
                            </div>
                        </div> <!--End #listsp-->
                    </div><!--End .spquantam-->
                </div><!--End content-->
            </div><!--maincontent-->
            <div style="border-bottom: 0.1em solid #cecece; width: 990px; clear: both;">
                <h3 style="text-align: left; color: #f7640d;">Danh mục</h3>
            </div>
            
            <div id="danhmuc">
                <ul>
                    <li>
                        <a href="<?php echo site_url("book");?>">
                            <img src="<?php echo base_url("web/images/sach.jpg");?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url("web/images/maytinh.jpg");?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url("web/images/thoitrang.jpg");?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url("web/images/dienthoai.jpg");?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url("web/images/noithat.jpg");?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url("web/images/giadung.jpg");?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url("web/images/phukiendientu.jpg");?>"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url("web/images/thietbiso.jpg");?>"/>
                        </a>
                    </li>
                </ul>
            </div> <!--End #listsp-->
            
            <div style="border-bottom: 0.1em solid #cecece; width: 990px; clear: both;">
                <h3 style="text-align: left; color: #f7640d;">Có thể bạn quan tâm sản phẩm này</h3>
            </div>
            <div id="listsp" style="margin-bottom: 20px;">
                <div>
                    <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                    <h5>Điện thoại</h5>
                </div>
                <div>
                    <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                    <h5>Điện thoại</h5>
                </div>
                <div>
                    <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                    <h5>Điện thoại</h5>
                </div>
                <div>
                    <img src="<?php echo base_url("web/photos/s3.jpg");?>"/>
                    <h5>Điện thoại</h5>
                </div>
            </div> <!--End #listsp-->
            
        </div><!--End container-->
    </div><!--End wrapper-->
    <div id="footer">
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
        </div><!--End div02 -->
   </div><!--End footer-->

</body>
</html>