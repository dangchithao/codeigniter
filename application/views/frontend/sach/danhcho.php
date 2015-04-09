﻿<!--Design by Đặng Chí Thảo - cố gắng viết code HTML sạch-->
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

        <!-- Menu -->
        <div id="topnav">
            <ul id="menu" style="background: url(<?php echo base_url("web/photos/menu2_copy.jpg");?>)repeat-x;">
                <li id="first"><a href="<?php echo site_url("index");?>" title="index"></a></li>
                <li><a href="<?php echo site_url("index/sach");?>" title="SÁCH">SÁCH</a></li>
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
                <li><a href="<?php echo site_url("index/view_sach_duoc_qt");?>">Sách được quan tâm nhiều nhất</a></li>
            </ul>
        </div>
        <!-- End Menu -->
        
        <div id="container">
            <div class="maincontent">
                <div id="sidebar">
                    <h3>Sách</h3>
                    <!--Sach-->
                    <ul>
                        <li><a href="#tinhoc" title="Tin Học">Tin Học</a></li>
                        <li><a href="#vanhoc" title="Văn Học">Văn Học</a></li>
                        <li><a href="#tinhcam" title="Tình Cảm">Tình Cảm</a></li>
                        <li><a href="#tienganh" title="Tiếng Anh">Tiếng Anh</a></li>
                        <li><a href="#kinhte" title="Kinh Tế">Kinh Tế</a></li>
                    </ul>
                    <!--Nhà xuất bản-->
                    <ul>
                        <li><b style="color:#143270;">Nhà Xuất bản</b></li>
                        <?php
                        for($i=0; $i<count($NXB); $i++)
                        {
                            echo "<li><a href='' title='".$NXB[$i]."'>".$NXB[$i]."</a></li>";
                        }
                        ?>
                    </ul>
                    <!--Tác giả-->
                    <ul>
                        <li><b style="color:#143270;">Dành cho Teen</b></li>
                    </ul>
                    <!--Sach hot-->
                    <ul>
                        <li><b style="color:#143270;">Sách đang rất "HOT"</b></li>
                    </ul>
                    <?php
                    for($i=0; $i<count($total); $i++)
                    {
                        echo "
                            <ul>
                                <li>
                                    <img src='".base_url("web/photos/php_phk.jpg")."' width='150px' height='200px'/>
                                </li>
                                <li><a href=''>".$ten[$i]."</a> - <i>".$tacgia[$i]."</i></li>
                            </ul>";
                    }// end for
                    ?>
                    <!--
                    <ul>
                        <li>
                            <img src="<?//php echo base_url("web/photos/php_phk.jpg");?>" width="150px" height="200px"/>
                        </li>
                        <li><a href="">Lập Trình PHP - Lập trình cơ bản(có CD kèm theo sách)</a> - <i>Phạm Hữu Khang</i></li>
                    </ul>
                    -->
                </div><!--End sidebar-->

                <div class="content">
                    <!--
                    <div id="j-img">
                        <img src="<?php echo base_url("web/photos/chi_oi_anh_yeu_em.png");?>" width="780px" height="300px"/>
                    </div>
                    
                    <div id="jmg-con">
                        <img src=""/>
                    </div>
                    -->
                    <!-- San pham quan tam -->
                    <div class="spquantam">
                        <div id="dm_title"><a name=""><?php echo $danhcho;?></a></div>
                        <div id="listsp">
                            <?php
                            if(count($id)>0){
                            for($i=0; $i<count($id); $i++)
                            {
                                $url_ten = site_url("book/view_info_sach/".$id[$i]);
                                $url_tacgia = site_url("book/view_sach_tacgia/".$id[$i]."/".$str_tg[$i]);
                                echo "
                                    <div>
                                        <ul style='list-style: none;'>
                                            <a href='".$url_ten."'>
                                                <li><img src='".base_url("web/photos/".$picture[$i])."' title='Tác giả ".$tacgia[$i]."'/><li>
                                                <li>".$ten[$i]."</li>
                                            </a>
                                            <li>Giá: <b style='font-size: 15px; text-decoration: underline; font-weight: bold; color: #a4080e;'>".$gia[$i]."</b>VNĐ</li>
                                            <li><h4>".$tacgia[$i]."</h4></li>
                                            <li><a href='".$url_tacgia."'>&gt;&gt;Xem tất cả sách của tác giả</a></li>
                                        </ul>
                                    </div>
                                    ";
                            }}
                            ?>
                        </div>
                    </div>
                </div><!--End content-->
            </div><!--maincontent-->
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
            <p>Website: <a href="http://www.tzwebz.zymichost.com">tzwebz.zymichost.com</a> hoặc <a href="http://www.nhocthamlam.coo.me">nhocthamlam.coo.me</a></p>
        </div><!--End div01-->

        <div id="div02">
            <p>&copy;Copyright 2011 <a href="http://www.tzwebz.zymichost.com">tzwebz.zymichost.com</a>, All rights reserved</p>
            <p>Designed and Powered by Đặng Chí Thảo</p>
        </div><!--End div02-->
    </div><!--End footer-->

</body>
</html>
