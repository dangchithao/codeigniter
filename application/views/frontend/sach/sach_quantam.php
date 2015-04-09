<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="author" content="www.nhocthamlam.coo.me" />
    <link rel="icon" href="<?php echo base_url("web/photos/icon.png");?>" type="image/png"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/css/style.css");?>"/>
    <script language="javascript" src="http://ajax.Googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script language="javascript" src="<?php echo base_url("web/js/home.js");?>"></script>
    <title>Sách | Vitbay.vn</title>
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
                <li><a href="<?php echo site_url("book");?>" title="SÁCH">SÁCH</a></li>
                <li><a href="<?php echo site_url("index/maytinh");?>" title="MÁY TÍNH">MÁY TÍNH</a></li>
                <li><a href="<?php echo site_url("index/thoitrang");?>" title="THỜI TRANG">THỜI TRANG</a></li>
                <li><a href="<?php echo site_url("index/dienthoai");?>" title="ĐIỆN THOẠI">ĐIỆN THOẠI</a></li>
                <li><a href="<?php echo site_url("index/noithat");?>" title="NỘI THẤT">NỘI THẤT</a></li>
                <li><a href="<?php echo site_url("index/phukiendientu");?>" title="PHỤ KIỆN ĐIỆN TỬ">PHỤ KIỆN ĐIỆN TỬ</a></li>
                <li><a href="<?php echo site_url("index/thietbiso");?>" title="THIẾT BỊ SỐ">THIẾT BỊ SỐ</a></li>
                <!--<li><a title="THẺ ĐIỆN THOẠI">THẺ ĐIỆN THOẠI</a></li>-->
            </ul>
        </div><!--End #topnav-->
        <div id="ja-content">
            <ul>
                <li><a href="">Sách giảm giá</a></li>
                <li><a href="">Sách bán chạy nhất</a></li>
                <li><a href="">Sách mới về</a></li>
                <li><a href="<?php echo site_url("book/view_sach_duoc_qt");?>">Sách được quan tâm nhiều nhất</a></li>
            </ul>
        </div>

        <div id="container">
            <div class="maincontent">
                <div id="sidebar">
                    <h3>Danh Mục</h3>
                    <!--Sach-->
                    <ul>
                        <li><h4>Sách</h4></li>
                        <li><a href="#tinhoc" title="Tin Học">Tin Học</a></li>
                        <li><a href="#vanhoc" title="Văn Học">Văn Học</a></li>
                        <li><a href="#tinhcam" title="Tình Cảm">Tình Cảm</a></li>
                        <li><a href="#tienganh" title="Tiếng Anh">Tiếng Anh</a></li>
                        <li><a href="#kinhte" title="Kinh Tế">Kinh Tế</a></li>
                    </ul>

                    <ul>
                        <li><b style="color:#143270;">Sách bán chạy nhất trong tuần</b></li>
                    </ul>
                    <ul>
                        <li>
                            <img src="<?php echo base_url("web/photos/php_phk.jpg");?>" width="150px" height="200px"/>
                        </li>
                        <li><a href="">Lập Trình PHP - Lập trình cơ bản(có CD kèm theo sách)</a> - <i>Phạm Hữu Khang</i></li>
                    </ul>
                    <ul>
                        <li>
                            <img src="<?php echo base_url("web/photos/php_phk.jpg");?>" width="150px" height="200px"/>
                        </li>
                        <li><a href="">Lập Trình PHP - Lập trình cơ bản(có CD kèm theo sách)</a> - <i>Phạm Hữu Khang</i></li>
                    </ul>
                    <ul>
                        <li>
                            <img src="<?php echo base_url("web/photos/php_phk.jpg");?>" width="150px" height="200px"/>
                        </li>
                        <li><a href="">Lập Trình PHP - Lập trình cơ bản(có CD kèm theo sách)</a> - <i>Phạm Hữu Khang</i></li>
                    </ul>

                    <ul>
                        <li>
                            <img src="<?php echo base_url("web/photos/php_phk.jpg");?>" width="150px" height="200px"/>
                        </li>
                        <li><a href="">Lập Trình PHP - Lập trình cơ bản(có CD kèm theo sách)</a> - <i>Phạm Hữu Khang</i></li>
                    </ul>
                    
                </div>
                <div class="content">
                    <div id="title">
                        <b>Danh mục Sách được quan tâm nhiều nhất</b>
                    </div>
                    <div id="p_sach">
                        <?php
                        for($i=0; $i<count($total); $i++)
                        {
                            $url = site_url("book/view_info_sach/".$total[$i]);
                            echo "
                                <div id='image'>
                                    <img src='".base_url("web/photos/".$pic[$i])."'/>
                                </div>
                                <div id='p_info'>
                                    <div><a href='".$url."'>".$ten[$i]."</a></div>
                                    <p>Tác giả: ".$tacgia[$i]."</p>
                                    <p>Thể loại: ".$theloai[$i]."</p>
                                    <p>NXB: ".$nxb[$i]."</p>
                                    <p>Năm XB: ".$namxb[$i]."</p>
                                    <p>Giá: <b style='font-size: 15px; text-decoration: underline; font-weight: bold; color: #a4080e;'>".$giaban[$i]."</b>VNĐ</p>
                                    <p>
                                        ".$mota[$i]."
                                    </p>
                                </div>
                                <div id='stt'>".($i+1)."</div>
                                ";
                        }
                        
                        ?>
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
