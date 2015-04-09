<!--Design by Đặng Chí Thảo - cố gắng viết code HTML sạch-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="author" content="www.nhocthamlam.coo.me" />

        <title>Sách | Vitbay.vn</title>

        <link rel="icon" href="<?php echo base_url("web/photos/icon.png"); ?>" type="image/png"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/css/bootstrap.css"); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/css/bootstrap-theme.css"); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/css/style.css"); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("web/js/fancybox/jquery.fancybox-1.3.4.css"); ?>"/>

        <!--<script language="javascript" src="http://ajax.Googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
        <script language="javascript" src="<?php echo base_url("web/js/home.js"); ?>"></script>
        <script language="javascript" src="<?php echo base_url("web/js/jquery-1.8.2.min.js"); ?>"></script>
        <script language="javascript" src="<?php echo base_url("web/js/bootstrap.js"); ?>"></script>
        <script language="javascript" src="<?php echo base_url("web/js/fancybox/jquery.fancybox-1.3.4.js"); ?>"></script>
        <script language="javascript" src="<?php echo base_url("web/js/lazyload/jquery.lazyload.js"); ?>"></script>
        <script type="text/javascript">
            var componentPanel = {
                doAnyThing: function() {
                    componentPanel.sliderCarousel(2000);
                    componentPanel.fancyboxImage();
                    componentPanel.imageLazyLoad();
                },
                sliderCarousel: function(seconds) {
                    $('.carousel').carousel({
                        interval: seconds
                    });
                },
                fancyboxImage: function() {
                    $(".fancybox").fancybox();
                },
                imageLazyLoad: function() {
                    $('img.lazy').lazyload();
                }
            };

            $('document').ready(componentPanel.doAnyThing());
        </script>
        <style type="text/css">
            ul#menu li#first:hover{
                background: url(<?php echo base_url("web/photos/menu3_copy.jpg"); ?>)repeat-x;
            }
            /*            ul#menu li:hover{
                            background: url(<?php echo base_url("web/photos/nav1_copy.jpg"); ?>)repeat-x;
                        }*/
            div#logo:hover{
                background: url(<?php echo base_url("web/photos/logo_main_hover2.png"); ?>);
            }
            div#ico_cart{
                background: url(<?php echo base_url("web/photos/ico-cart3.png"); ?>)no-repeat;
            }
        </style>
    </head>

    <body>
        
        
        <div class="navbar navbar-default" role="navigation">
            <div id="menu-border-top"></div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" id="active-menu">AT System</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url("index"); ?>">TRANG CHỦ</a></li>
                        <li><a href="<?php echo site_url("book"); ?>" title="SÁCH">SÁCH</a></li>
                        <li><a href="<?php echo site_url("index/maytinh"); ?>" title="MÁY TÍNH">MÁY TÍNH</a></li>
                        <li><a href="<?php echo site_url("index/thoitrang"); ?>" title="THỜI TRANG">THỜI TRANG</a></li>
                        <li><a href="<?php echo site_url("index/dienthoai"); ?>" title="ĐIỆN THOẠI">ĐIỆN THOẠI</a></li>
                        <li><a href="<?php echo site_url("index/noithat"); ?>" title="NỘI THẤT">NỘI THẤT</a></li>
                        <li><a href="<?php echo site_url("index/dogiadung"); ?>" title="ĐỒ GIA DỤNG">ĐỒ GIA DỤNG</a></li>
                        <li><a href="<?php echo site_url("index/phukiendientu"); ?>" title="PHỤ KIỆN ĐIỆN TỬ">PHỤ KIỆN ĐIỆN TỬ</a></li>
                        <li id="last"><a href="<?php echo site_url("index/thietbiso"); ?>" title="THIẾT BỊ SỐ">THIẾT BỊ SỐ</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
        <div class="container">
            <div class="col-md-3 col-xs-3">
                <div id="logo">
                    <a href="<?php echo site_url("index"); ?>"><img src="<?php echo base_url("web/photos/logo_main3.png"); ?>"/></a>
                </div>
            </div>
            <div class="col-md-9 col-xs-9">
                <div id="ja-form">
                    <div id="top">
                        Hà Nội: <b style="color: #0062B7; font-size: 15px;">01675.390.105</b> - Tp.Hồ Chí Minh: <b style="color: #0062B7; font-size: 15px;">01266.079.875</b>
                    </div>
                    <div class="form_to_cart">
                        <div id="form" style="background: url(<?php echo base_url("web/photos/background_find.jpg"); ?>)repeat-x;">
                            <form name="form" action="" method="post">
                                <div id="keyword">
                                    <input type="text" name="keyword" size="90" style="border: none; width: 100%; outline: none;"
                                           value="Tìm là thấy..."
                                           onfocus="if (this.value == 'Tìm là thấy...') {this.value = '';}"
                                           onblur="if (this.value == '') {this.value = 'Tìm là thấy...'}"/>
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
            </div>
        </div>

        <div class="navbar navbar-default" role="navigation" style="margin-top: 10px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topnav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div id="topnav">
                <div id="menu-border-top"></div>
                <ul id="menu">
                    <li id="active-menu"><a href="<?php echo site_url("index"); ?>">TRANG CHỦ</a></li>
                    <li><a href="<?php echo site_url("book"); ?>" title="SÁCH">SÁCH</a></li>
                    <li><a href="<?php echo site_url("index/maytinh"); ?>" title="MÁY TÍNH">MÁY TÍNH</a></li>
                    <li><a href="<?php echo site_url("index/thoitrang"); ?>" title="THỜI TRANG">THỜI TRANG</a></li>
                    <li><a href="<?php echo site_url("index/dienthoai"); ?>" title="ĐIỆN THOẠI">ĐIỆN THOẠI</a></li>
                    <li><a href="<?php echo site_url("index/noithat"); ?>" title="NỘI THẤT">NỘI THẤT</a></li>
                    <li><a href="<?php echo site_url("index/dogiadung"); ?>" title="ĐỒ GIA DỤNG">ĐỒ GIA DỤNG</a></li>
                    <li><a href="<?php echo site_url("index/phukiendientu"); ?>" title="PHỤ KIỆN ĐIỆN TỬ">PHỤ KIỆN ĐIỆN TỬ</a></li>
                    <li id="last"><a href="<?php echo site_url("index/thietbiso"); ?>" title="THIẾT BỊ SỐ">THIẾT BỊ SỐ</a></li>
                </ul>
            </div><!--End #topnav-->
        </div>


        <div class="container">
            <div class="row-fluid" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!--<img class="lazy" src="images/icon/ajax-loader.gif" data-original="images/slider_1.png" alt="why?">-->
                                <img src="<?php echo base_url("web/photos/images/slider_1.png"); ?>" alt="why?">
                                    <div class="carousel-caption">
                                        <h3>Caption</h3>
                                        <p>Description</p>
                                    </div>
                            </div>
                            <div class="item">
                                <!--<img class="lazy" src="images/icon/ajax-loader.gif" data-original="images/slider_2.png" alt="why?">-->
                                <img src="<?php echo base_url("web/photos/images/slider_2.png"); ?>" alt="why?">
                                    <div class="carousel-caption">
                                        <h3>Caption</h3>
                                        <p>Description</p>
                                    </div>
                            </div>
                            <div class="item">
                                <!--<img class="lazy" src="images/icon/ajax-loader.gif" data-original="images/slider_3.png" alt="why?">-->
                                <img src="<?php echo base_url("web/photos/images/slider_3.png"); ?>" alt="why?">
                                    <div class="carousel-caption slide">
                                        <h3>Caption</h3>
                                        <p>Description</p>
                                    </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b style="color: #ff0066;">Top new cakes</b></div>
                        <div class="panel-body">
                            <div class="row">
                                <?php for ($i = 1; $i <= 4; $i++): ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img class="fancybox lazy" href="<?php echo base_url("web/photos/images/cake_$i.jpg"); ?>" data-original="<?php echo base_url("web/photos/images/cake_$i.jpg"); ?>" alt="Cake" src="<?php echo base_url("web/photos/images/cake_$i.jpg"); ?>">
                                        <div class="caption">
                                            <a href="?id=<?php echo $i;?>"><h3>Thumbnail label</h3></a>
                                            <p>Bruce Lee (born Lee Jun-fan; 27 November 1940 – 20 July 1973) was a Hong Kong American martial artist.</p>
                                            <p>Price: <b style="color: #a4080e;">50.000 VND</b></p>
                                            <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-info" role="button">View</a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="panel-footer"><a href="#">View more...</a></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><b style="color: #ff0066;">Top best selling cakes</b></div>
                        <div class="panel-body">
                            <div class="row">
                                <?php for ($i = 5; $i <= 8; $i++): ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img class="fancybox lazy" href="images/cake_' + i + '.jpg" data-original="images/cake_' + i + '.jpg" alt="Cake" src="<?php echo base_url("web/photos/images/cake_$i.jpg"); ?>">
                                        <div class="caption">
                                            <a href="?id=<?php echo $i;?>"><h3>Thumbnail label</h3></a>
                                            <p>Bruce Lee (born Lee Jun-fan; 27 November 1940 – 20 July 1973) was a Hong Kong American martial artist.</p>
                                            <p>Price: <b style="color: #a4080e;">65.000 VND</b></p>
                                            <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-info" role="button">View</a></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="panel-footer"><a href="#">View more...</a></div>
                    </div>
                </div>
            </div>
        </div>


        <div id="wrapper" align="center"> 
            <div id="ja-content">
                <ul>
                    <li><a href="">Sách giảm giá</a></li>
                    <li><a href="">Sách bán chạy nhất</a></li>
                    <li><a href="">Sách mới về</a></li>
                    <li><a href="<?php echo site_url("index/view_sach_duoc_qt"); ?>">Sách được quan tâm nhiều nhất</a></li>
                </ul>
            </div><!-- End #ja-content-->

            <div id="container">
                <div class="maincontent">
                    <div id="sidebar">
                        <h3>Sách</h3>
                        <!--Sach-->
                        <ul>
                            <li><h4>Sách tin học</h4></li>
                            <li><a href="#tinhoc" title="Tin Học">Tin học văn phòng</a></li>
                            <li><a href="<?php echo site_url("book/danhcho/Lap-Trinh"); ?>" title="Lập trình">Lập trình</a></li>
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
                        <!--Nhà xuất bản-->
                        <ul>
                            <li><b style="color:#143270;">Nhà Xuất bản</b></li>
<?php
for ($i = 0; $i < count($NXB); $i++) {
    echo "<li><a href='' title='" . $NXB[$i] . "'>" . $NXB[$i] . "</a></li>";
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
for ($i = 0; $i < count($total); $i++) {
    echo "
                            <ul>
                                <li>
                                    <img src='" . base_url("web/photos/php_phk.jpg") . "' width='150px' height='200px'/>
                                </li>
                                <li><a href=''>" . $ten[$i] . "</a> - <i>" . $tacgia[$i] . "</i></li>
                            </ul>";
}// end for
?>
                        <!--
                        <ul>
                            <li>
                                <img src="<? //php echo base_url("web/photos/php_phk.jpg");     ?>" width="150px" height="200px"/>
                            </li>
                            <li><a href="">Lập Trình PHP - Lập trình cơ bản(có CD kèm theo sách)</a> - <i>Phạm Hữu Khang</i></li>
                        </ul>
                        -->
                    </div><!--End sidebar-->

                    <div class="content">
                        <div id="j-img">
                            <img src="<?php echo base_url("web/photos/chi_oi_anh_yeu_em.png"); ?>" width="780px" height="300px"/>
                        </div>
                        <div id="jmg-con">
                            <img src=""/>
                        </div>
                        <!--Sach tin hoc-->
                        <div class="spquantam">
                            <div id="dm_title"><a name="tinhoc">Tin Học</a></div>
                            <div id="listsp">

                                <div>
                                    <ul style='list-style: none;'>
                                        <li><a href='"'>
                                                <img src="<?php echo base_url("web/photos/sach_tinhocvp.jpg"); ?>"/>
                                                <h3>TIN HỌC VĂN PHÒNG</h3></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul style='list-style: none;'>
                                        <li><a href="<?php echo site_url("book/danhcho/MẠNG-MÁY-TÍNH"); ?>">
                                                <img src="<?php echo base_url("web/photos/sach_mangmt.jpg"); ?>"/>
                                                <h3>MẠNG MÁY TÍNH</h3></a></li>
                                    </ul>
                                </div>
                                <div>

                                    <ul style='list-style: none;'>
                                        <li><a href="<?php echo site_url("book/danhcho/Lap-Trinh"); ?>">
                                                <img src="<?php echo base_url("web/photos/sach_laptrinh.jpg"); ?>"/>
                                                <h3>LẬP TRÌNH</h3></a></li>
                                    </ul>
                                </div>
                                <div>

                                    <ul style='list-style: none;'>
                                        <li><a href="<?php echo site_url("index/sach/Đồ-Họa"); ?>">
                                                <img src="<?php echo base_url("web/photos/sach_dohoa.jpg"); ?>"/>
                                                <h3>ĐỒ HỌA</h3></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul style='list-style: none;'>
                                        <li><a href="<?php echo site_url("index/sach/THU-THUAT-MAY-TINH"); ?>">
                                                <img src="<?php echo base_url("web/photos/sach_thuthuatmaytinh.jpeg"); ?>"/>
                                                <h3>THỦ THUẬT MÁY TÍNH</h3></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Sach van hoc-->
                        <div class="spquantam">
                            <div id="dm_title"><a name="vanhoc">Văn Học</a></div>
                            <div id="listsp">
<?php
for ($i = 0; $i < count($v_id); $i++) {
    $url_ten = site_url("index/view_info_sach/" . $v_id[$i]);
    $url_tacgia = site_url("index/view_sach_tacgia/" . $v_id[$i] . "/" . $v_str_tg[$i]);
    echo "
                                    <div>
                                        <img src='" . base_url("web/photos/ltc++.jpg") . "' title='Tác giả " . $v_tacgia[$i] . "'/>
                                        <h4>" . $v_tacgia[$i] . "</h4>
                                        <ul style='list-style: none;'>
                                            <li><a href='" . $url_ten . "'>" . $v_ten[$i] . "</a></li>
                                            <li><a href='" . $url_tacgia . "'>&gt;&gt;Xem tất cả sách của tác giả</a></li>
                                        </ul>
                                    </div>
                                    ";
}
?>
                            </div>
                        </div>
                        <!--Tinh Cam-->
                        <div class="spquantam">
                            <div id="dm_title"><a name="tinhcam">Tình Cảm</a></div>
                            <div id="listsp">
<?php
for ($i = 0; $i < count($tc_id); $i++) {
    $url_ten = site_url("index/view_info_sach/" . $tc_id[$i]);
    $url_tacgia = site_url("index/view_sach_tacgia/" . $tc_id[$i] . "/" . $tc_str_tg[$i]);
    echo "
                                    <div>
                                        <img src='" . base_url("web/photos/chi_oi_anh_yeu_em.jpg") . "' title='Tác giả " . $tc_tacgia[$i] . "'/>
                                        <h4>" . $tc_tacgia[$i] . "</h4>
                                        <ul style='list-style: none;'>
                                            <li><a href='" . $url_ten . "'>" . $tc_ten[$i] . "</a></li>
                                            <li><a href='" . $url_tacgia . "'>&gt;&gt;Xem tất cả sách của tác giả</a></li>
                                        </ul>
                                    </div>
                                    ";
}
?>
                            </div>
                        </div>
                        <!--Tieng Anh-->
                        <div class="spquantam">
                            <div id="dm_title"><a name="tienganh">Tiếng Anh</a></div>
                            <div id="listsp">
<?php
for ($i = 0; $i < count($ta_id); $i++) {
    $url_ten = site_url("index/view_info_sach/" . $ta_id[$i]);
    $url_tacgia = site_url("index/view_sach_tacgia/" . $ta_id[$i] . "/" . $ta_str_tg[$i]);
    echo "
                                    <div>
                                        <img src='" . base_url("web/photos/hoi.jpeg") . "' title='Tác giả " . $ta_tacgia[$i] . "'/>
                                        <h4>" . $ta_tacgia[$i] . "</h4>
                                        <ul style='list-style: none;'>
                                            <li><a href='" . $url_ten . "'>" . $ta_ten[$i] . "</a></li>
                                            <li><a href='" . $url_tacgia . "'>&gt;&gt;Xem tất cả sách của tác giả</a></li>
                                        </ul>
                                    </div>
                                    ";
}
?>
                            </div>
                        </div>
                        <!--Kinh Tế-->
                        <div class="spquantam">
                            <div id="dm_title"><a name="kinhte">Kinh Tế</a></div>
                            <div id="listsp">
<?php
for ($i = 0; $i < count($kt_id); $i++) {
    $url_ten = site_url("index/view_info_sach/" . $kt_id[$i]);
    $url_tacgia = site_url("index/view_sach_tacgia/" . $kt_id[$i] . "/" . $kt_str_tg[$i]);
    echo "
                                    <div>
                                        <img src='" . base_url("web/photos/hieu-kinh-te-qua-mot-bai-hoc.jpg") . "' title='Tác giả " . $kt_tacgia[$i] . "'/>
                                        <h4>" . $kt_tacgia[$i] . "</h4>
                                        <ul style='list-style: none;'>
                                            <li><a href='" . $url_ten . "'>" . $kt_ten[$i] . "</a></li>
                                            <li><a href='" . $url_tacgia . "'>&gt;&gt;Xem tất cả sách của tác giả</a></li>
                                        </ul>
                                    </div>
                                    ";
}
?>
                            </div><!--End listsp-->
                        </div><!--End #spquantam-->
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
