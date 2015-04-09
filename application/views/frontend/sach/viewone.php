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
        div#imagecart img{
            background: url(<?php echo base_url("web/photos/cart_hover_01.jpg");?>);
        }        
        div#imagecart img:hover{
            background: url(<?php echo base_url("web/photos/cart_01.jpg");?>);
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
                <div id="viewimg">
                    <?php
                        $url = base_url("web/photos/".$picture);
                        echo '<img src="'.$url.'"/>';    
                    ?>
                </div>
                <div id="info_p">
                    <h2 align="left"><?php echo $ten;?></h2>
                    <p>
                        <a href="">Xem chi tiết sản phẩm</a>
                        <a href="#cmt">Phản hồi</a>
                    </p>
                    <div id="children_info">
                        <p>Tác giả: <a href="<?php echo site_url("book/view_sach_tacgia/".$id."/".$url_tg);?>"><?php echo $tacgia;?></a></p>
                        <p>Thể loại: <a href="<?php echo site_url("index/sach#".$theloai);?>"><?php echo $theloai;?></a></p>
                        <p>Dành cho: <a href="<?php echo site_url("book/danhcho/".$url_dc);?>"><?php echo $danhcho;?></a></p>
                        <p>NXB: <b><?php echo $nxb;?></b></p>
                        <p>Năm XB: <b><?php echo $namxb;?></b></p>
                        <p>
                            <?php echo $mota;?>
                        </p>
                    </div>
                    
                </div><!--End info_p-->

                <div id="creat_cart">
                    <div id="gia">
                        <p>Giá bìa: <s><b><?php echo $gia;?></b></s> VNĐ</p>
                        <p>
                            Giá tại <b style="color: #fe105c; font-size: 20px;">Vitbay</b>: <b style="font-size: 25px; font-weight: bold; color: #a4080e;"><u><?php echo $giaban;?></u></b> VNĐ
                        </p>
                        <p>Bạn đã tiết kiệm được: <b><?php echo ($gia - $giaban);?></b> VNĐ</p>
                    </div>
                    <div id="phi">
                        <a href="">Xem phí vận chuyển ?</a>
                    </div>
                    <div id="button_dat">
                        <p>
                            <form action="" method="post">
                                <div style="margin-top: 10px;">
                                    <div style="float: left;">
                                        Số lượng:
                                        <input type="text" size="4" maxlength="4" name="soluong" value="0"/>
                                    </div>
                                    <div style="width: 120px; height: 40px;" id="imagecart">
                                        <!--<button type="submit" name="mua">Mua</button>-->
                                        <a href=""><img src="<?php echo base_url("web/photos/cart1.png");?>" style="-moz-border-radius: 3px/*left-top*/ 3px/*right-top*/ 3px/*right-bottom*/ 3px/*left-bottom*/;
            -webkit-border-radius: 3px 3px 3px 3px;"/></a>
                                    </div>
                                </div>
                            </form>      
                        </p>
                    </div>
                </div><!--End creat_cart-->
            </div><!--End class maincontent-->

            <!--MỤC - Có thể bạn quan tâm-->
            <div class="cothebanquantam">
                <div id="tit-top">
                    Có thể bạn quan tâm
                </div>
                <div id="p-quantam">
                    <div>
                        <a href="#">
                            <img src="<?php echo base_url("web/photos/ky-thuat-lap-trinh-c.jpg");?>" width="130px" height="180px" border="0px"/>
                            <p>Lập Trình C</p>
                        </a>
                        <p id="p-gia">20.000d</p>
                        <p id="link-p"><a href="#">Xem qua...</a></p>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo base_url("web/photos/ky-thuat-lap-trinh-c.jpg");?>" width="130px" height="180px" border="0px"/>
                            <p>Lập Trình C</p>
                        </a>
                        <p id="p-gia">20.000d</p>
                        <p id="link-p"><a href="#">Xem qua...</a></p>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo base_url("web/photos/ky-thuat-lap-trinh-c.jpg");?>" width="130px" height="180px" border="0px"/>
                            <p>Lập Trình C</p>
                        </a>
                        <p id="p-gia">20.000d</p>
                        <p id="link-p"><a href="#">Xem qua...</a></p>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo base_url("web/photos/ky-thuat-lap-trinh-c.jpg");?>" width="130px" height="180px" border="0px"/>
                            <p>Lập Trình C</p>
                        </a>
                        <p id="p-gia">20.000d</p>
                        <p id="link-p"><a href="#">Xem qua...</a></p>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo base_url("web/photos/ky-thuat-lap-trinh-c.jpg");?>" width="130px" height="180px" border="0px"/>
                            <p>Lập Trình C</p>
                        </a>
                        <p id="p-gia">20.000d</p>
                        <p id="link-p"><a href="#">Xem qua...</a></p>
                    </div>
                </div><!-- End #p-quantam-->
                
            </div><!--End MUC - có thể bạn quan tâm-->
            
            <!--MUC - nội dung sản phẩm-->
            <div class="content-comment">
                <div id="p-content">
                    <h3><?php echo $ten;?></h3>
                    <?php echo $mota2;?>
                    <div>
                         <?php
                            $url = base_url("web/photos/".$picture);
                            echo '<img src="'.$url.'"/>';    
                        ?>
                    </div>
                </div><!-- End #p-content -->
                
                <!-- comment -->
                <div id="p-comment">
                    <div id="numbercmt">
                        <p><b><?php echo count($total_cmt);?></b> Ý kiến phản hồi <b style="float: right; color: #C11828; font-weight: arial;">Add comments</b></p>
                    </div>
                    <div id="view_cmt">
                    <?php
                    if(count($total_cmt)>=1)
                    {
                        for($i=0; $i<count($total_cmt); $i++)
                        {
                            echo "<div>
                                    <h5>$name[$i] says:</h5>
                                    <hr/>
                                    <p>$content[$i]</p>
                                  </div>
                                    ";
                        }// End for
                    }
                    ?>
                    </div>
                    <div id="cmt">
                        <form name="form" method="post">
                            <div>
                                <h5 align="left"><a name="cmt">Họ và tên:</a></h5>
                                <p align="left"><input type="text" name="name"/></p>
                                <h5 align="left">Email:</h5>
                                <p align="left"><input type="text" name="email"/></p>
                                <h5 align="left">Nội dung:</h5>
                                <p align="left"><textarea name="content" cols="50" rows="5"></textarea></p>
                                <p align="left" style="margin-top: 10px;">
                                    <button type="submit" name="cmt">Gửi</button>
                                    <button type="reset" name="res">Reset</button>
                                </p>
                            </div>
                        </form>
                    </div><!--End #cmt-->
                </div><!-- End #comment-->
                
            </div><!-- End class noidung-comment-->
            
            <!-- San pham ban chay nhat -->
            <div class="banchaynhat">
                <div id="title-banchaynhat">
                    Bán chạy nhất
                    <!--<a href="#" style="font-size: 12px; float: right;">xem tất cả...</a>-->
                </div>
                <div id="p-banchaynhat">
                    <?php
                    for($i=0; $i<count($total); $i++)
                    {
                        $url = site_url("book/view_info_sach/".$total[$i]."/".$nbook[$i]);
                        echo "
                            <div>
                                <a href='".$url."'>
                                    <img src='".base_url("web/photos/".$pic[$i])."' width='100px' height='150px'/>
                                    <p>".$ten1[$i]."</p>
                                </a>
                                <b style='font-size: 20px; font-weight: bold; color: #a4080e;'><u>".$giaban1[$i]."</u></b> VNĐ
                            </div>
                            ";
                    }
                    ?>
                    <p><a href="">Xem tất cả...</a></p>
                </div>
            </div><!-- End class banchaynhat -->

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
            <p>&copy;Copyright 2011 <a href="#">VITBAY.vn</a>, All rights reserved</p>
            <p>Designed and Powered by Đặng Chí Thảo</p>
        </div><!--End div02-->
    </div><!--End footer-->
</body>
</html>
