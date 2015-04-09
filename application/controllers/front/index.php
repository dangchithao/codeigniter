<?php
/*
 * code by Dang Chi Thao
 * Index | view all
 * cố gắng code php sạch
 */
class Index extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }
    //plugin loai dau tieng viet
    public function stripUnicode($str)
    {
        if(!$str) return false;
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'A'=>'Ấ',
            'd'=>'đ',
            'D'=>'Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str;
    }// End stripUnicode()

    // index
    public function index()
    {
        $this->load->view("frontend/index");

    }// End index()
   
    /*
     ***************************************** cac muc lien quan toi sach*********************************
     */
    // sach
    public function sach()
    {
        $s = new Sach();
        $name = $this->uri->segment(3);
        /*
        if($abc=$this->input->post("keyword"))
        {
            redirect("timkiem/keyword/".$abc);
        }
         * 
         */
        // localhost/Index(1)/sach(2)/...
        if(isset($name)&& $name!="")
        {
            // chuoi name se co dang abc-zyz
            // dong code sau se chuyen thanh "abc xyz" de truy van phu hop voi database
            $dcho = preg_replace("/-/", " ", $name/*$this->stripUnicode($name)*/);
            $s->group_by("tacgia");
            $s->having("danhcho", $dcho);
            //$s->like("danhcho", $dcho, "after");
            // khoi tao mang cac gia tri
            $id = array(); $ten = array(); $gia = array(); $tacgia = array(); $str_tacgia = array(); $picture = array();
            $nxb = array();
            foreach($s->get()->all as $ts)
            {
                $id[] = $ts->id;
                $ten[] = $ts->tensach;
                $gia[] = $ts->gia;
                $tacgia[] = $ts->tacgia;
                $picture[] = $ts->picture;
                //$nxb[] = $ts->nxb;
                $str_tacgia[] = preg_replace("/ /", "-", $this->stripUnicode($ts->tacgia));
            }

            $data = array('id'=>$id, 'ten'=>$ten, 'gia'=>$gia, 'tacgia'=>$tacgia, 'str_tg'=>$str_tacgia, 
                'danhcho'=>$dcho, 'picture'=>$picture);
            
            // menu nha xuat ban
            $s->group_by("nxb");
            $s->having("danhcho", $dcho);
            foreach($s->get()->all as $ms)
            {
                $nxb[] = $ms->nxb;
            }
            $data["NXB"] = $nxb;
            //$data = array('name'=>$name, 'danhcho'=>$dcho);
            $this->load->view("frontend/sach/danhcho", $data);
        }
        else
        {
            $s->group_by("tacgia");
            $s->having("loaisach", "tinhoc");
            // sach tin hoc
            //$s->where("loaisach", "tinhoc");
            $id = array(); $ten = array(); $gia = array(); $tacgia = array(); $str_tacgia = array(); $picture = array();
            foreach($s->get()->all as $ts)
            {
                $id[] = $ts->id;
                $ten[] = $ts->tensach;
                $gia[] = $ts->gia;
                $tacgia[] = $ts->tacgia;
                $picture[] = $ts->picture;
                $str_tacgia[] = preg_replace("/ /", "-", $this->stripUnicode($ts->tacgia));
            }

            $t_data = array('t_id'=>$id, 't_ten'=>$ten, 't_gia'=>$gia, 't_tacgia'=>$tacgia, 't_str_tg'=>$str_tacgia, 'picture'=>$picture);

            // sach van hoc
            $s->group_by("tacgia");
            $s->having("loaisach", "vanhoc");

            $id = array(); $ten = array(); $gia = array(); $tacgia = array(); $str_tacgia = array();
            foreach($s->get()->all as $ts)
            {
                $id[] = $ts->id;
                $ten[] = $ts->tensach;
                $gia[] = $ts->gia;
                $tacgia[] = $ts->tacgia;
                $str_tacgia[] = preg_replace("/ /", "-", $this->stripUnicode($ts->tacgia));
            }
            $v_data = array('v_id'=>$id, 'v_ten'=>$ten, 'v_gia'=>$gia, 'v_tacgia'=>$tacgia, 'v_str_tg'=>$str_tacgia);

            // tinh cảm
            $s->group_by("tacgia");
            $s->having("loaisach", "tinhcam");
            $id = array(); $ten = array(); $gia = array(); $tacgia = array(); $str_tacgia = array();
            foreach($s->get()->all as $ts)
            {
                $id[] = $ts->id;
                $ten[] = $ts->tensach;
                $gia[] = $ts->gia;
                $tacgia[] = $ts->tacgia;
                $str_tacgia[] = preg_replace("/ /", "-", $this->stripUnicode($ts->tacgia));
            }
            $tc_data = array('tc_id'=>$id, 'tc_ten'=>$ten, 'tc_gia'=>$gia, 'tc_tacgia'=>$tacgia, 'tc_str_tg'=>$str_tacgia);

            // tieng anh
            $s->group_by("tacgia");
            $s->having("loaisach", "tienganh");
            $id = array(); $ten = array(); $gia = array(); $tacgia = array(); $str_tacgia = array();
            foreach($s->get()->all as $ts)
            {
                $id[] = $ts->id;
                $ten[] = $ts->tensach;
                $gia[] = $ts->gia;
                $tacgia[] = $ts->tacgia;
                $str_tacgia[] = preg_replace("/ /", "-", $this->stripUnicode($ts->tacgia));
            }
            $ta_data = array('ta_id'=>$id, 'ta_ten'=>$ten, 'ta_gia'=>$gia, 'ta_tacgia'=>$tacgia, 'ta_str_tg'=>$str_tacgia);

            // Kinh te
            $s->group_by("tacgia");
            $s->having("loaisach", "kinhte");
            $id = array(); $ten = array(); $gia = array(); $tacgia = array(); $str_tacgia = array();
            foreach($s->get()->all as $ts)
            {
                $id[] = $ts->id;
                $ten[] = $ts->tensach;
                $gia[] = $ts->gia;
                $tacgia[] = $ts->tacgia;
                $str_tacgia[] = preg_replace("/ /", "-", $this->stripUnicode($ts->tacgia));
            }
            $kt_data = array('kt_id'=>$id, 'kt_ten'=>$ten, 'kt_gia'=>$gia, 'kt_tacgia'=>$tacgia, 'kt_str_tg'=>$str_tacgia);

            // menu nha xuat ban
            $s->group_by("nxb")->get();
            // create a array new
            $nxb = array(); 
            foreach($s->all as $b)
            {
                $nxb[] = $b->nxb;
            }// end for
            $nxb_data = array('NXB'=>$nxb);


            // Sach dang HOT
            $s->where("status", 1)->get();
            $total = array(); $ten = array(); $tacgia = array(); $theloai = array(); $nxb = array();
            $namxb = array(); $mota = array();
            foreach($s->all as $ts)
            {
                $total[] = $ts->id;
                $ten[] = $ts->tensach;
                $tacgia[] = $ts->tacgia;
                $nxb[] = $ts->nxb;
                $theloai[] = $ts->loaisach;
                $namxb[] = $ts->namxb;
                $mota[] = $ts->mota;
            }
            $bhot_data = array('total'=>$total, 'ten'=>$ten, 'tacgia'=>$tacgia, 'nxb'=>$nxb, 'theloai'=>$theloai,
                    'namxb'=>$namxb, 'mota'=>$mota);
            // Ham noi tat ca cac array: array_merge()
            $this->load->view("frontend/sach/index", array_merge($t_data, $v_data, $tc_data, $ta_data, $kt_data, 
                    $nxb_data, $bhot_data));
        }// end else
    }// End sach()

    // view_info_sach()
    public function view_info_sach()
    {
        $s = new Sach();
        // id sach
        $id = $this->uri->segment(3);
        // lien quan toi comment
        if(isset($_POST['cmt']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $content = $_POST['content'];
            $date = date("l, d F Y, H:i:s A");
            // them mot comment moi
            $s->comment->name = $name;
            $s->comment->email = $email;
            $s->comment->date = $date;
            $s->comment->content = $content;
            $s->comment->save();
            // lay id trong table comments cua comment moi them
            $s->comment->where("date", $date)->get();
            $comment_id = $s->comment->id;
            // them vao table comments_saches voi id_sach, id_commet
            $s->comments_sach->sach_id = $id;
            $s->comments_sach->comment_id = $comment_id;
            $s->comments_sach->save();
        }// End if
        
        // tinh so comment cho san pham có id là $id sau khi da add comment
        $s->comment->where('id', $id);
        $s->comment->get_iterated();
        $total_cmt = array();
        foreach($s->comment as $c)
        {
            $total_cmt[] = $c->id;
        }
        // tra ve tong so comment
        $total_comment = count($total_cmt);
        
        // update tong so comment cua tung product 
        $s->where("id", $id);
        $s->update("totalcmt", $total_comment);
        
        //$s->update_total_cmt($id);
        // update status cho tung product
        $flag = 0;
        if($total_comment>=5)// nếu tổng số cmt >=5 thì được liệt kê vào sản phẩm được quan tâm nhiều nhất
        {
            $flag = 1;
        }
        $s->update('status', $flag);
        //$s->update_status_cmt($id);
        
        // View info book with ID 
        $s->where("id", $id)->get();
        foreach($s->all as $ts)
        {
            // $url_author dung de truyen len trinh duyet
            $url_author = preg_replace("/ /", "-", $this->stripUnicode($ts->tacgia));
            $url_danhcho = preg_replace("/ /", "-", $this->stripUnicode($ts->danhcho));
            // array info
            $data = array('id'=>$ts->id, 'ten'=>$ts->tensach, 'gia'=>$ts->gia, 'giaban'=>$ts->giaban,
                'tacgia'=>$ts->tacgia, 'url_tg'=>$url_author, 'nxb'=>$ts->nxb, 'theloai'=>$ts->loaisach,
                'danhcho'=>$ts->danhcho, 'url_dc'=>$url_danhcho,'namxb'=>$ts->namxb, 'mota'=>$ts->mota, 'picture'=>$ts->picture);
        }
        
        // tim nhung comment cho san pham nay
        $s->comment->get_iterated();
        $total_cmt = array(); $name = array(); $email = array(); $content = array();
        foreach($s->comment as $c)
        {
            $total_cmt[] = $c->id;
            $name[] = $c->name;
            $content[] = $c->content;
        }
        $data['total_cmt'] = $total_cmt; $data['name'] = $name; $data['content'] = $content;
        
        // Sach cung loai
        $loaisach = $data['theloai'];
        $s->where("danhcho", $data['danhcho']);
        $s->where("id !=", $id)->get();
        //$s->limit(5)->get();
        /*
        $s->group_by("tacgia");
        $s->having("loaisach", "tinhoc")->get();
         */
        $total = array(); $ten = array(); $tacgia = array(); $theloai = array(); $nxb = array();
        $namxb = array(); $mota = array(); $nbook = array(); $picture = array();
        foreach($s->all as $ts)
        {
            $total[] = $ts->id;
            $ten[] = $ts->tensach;
            $tacgia[] = $ts->tacgia;
            $nxb[] = $ts->nxb;
            $theloai[] = $ts->loaisach;
            $namxb[] = $ts->namxb;
            $mota[] = $ts->mota;
            $picture[] = $ts->picture;
            // ten sach tren url se dang nhu sau abc-cdh-xyz
            $nbook[] = preg_replace("/ /", "-", $this->stripUnicode($ts->tensach));
        }
        $data1 = array('total'=>$total, 'ten1'=>$ten, 'tacgia1'=>$tacgia, 'nxb1'=>$nxb, 'theloai1'=>$theloai,
                'namxb1'=>$namxb, 'mota1'=>$mota, 'nbook'=>$nbook, 'pic'=>$picture);
        
        //
        // tim nhung pic cho san pham nay
        /*
        $s->image->get_iterated();
        $pic_avatar = array(); $pic_name = array();
        foreach($s->image as $p)
        {
            $pic_avatar[] = $p->id;
            $pic_name[] = $p->name_image;
        }// End foreach
        $data["pic_avatar"] = $pic_avatar; $data["pic_name"] = $pic_name;
        */
        
        // neu nguoi dung nhap id tren url khong dung no se tu dong chuyen trang
        if(is_numeric($id))
        {
            $this->load->view("frontend/sach/viewone", array_merge($data, $data1));
        }
        else
        {
            redirect("index");
        }
    }// End view_info_sach()
    
    // view_sach_tacgia()
    public function view_sach_tacgia()
    {
        $s = new Sach();
        $id = $this->uri->segment(3);
        $s->where('id', $id)->get();
        $author = $s->tacgia;
        $s->where('tacgia', $author)->get();
        $total = array(); $ten = array(); $theloai = array(); $nxb = array();
        $namxb = array(); $mota = array(); $picture = array(); $giaban = array();
        foreach($s->all as $ts)
        {
            $total[] = $ts->id;
            $ten[] = $ts->tensach;
            $nxb[] = $ts->nxb;
            $theloai[] = $ts->loaisach;
            $namxb[] = $ts->namxb;
            $mota[] = $ts->mota;
            $giaban[] = $ts->giaban;
            $picture[] = $ts->picture;
        }
        // menu nha xuat ban
        $s->group_by("nxb")->get();
        // create a array new
        $nxb1 = array(); 
        foreach($s->all as $b)
        {
            $nxb1[] = $b->nxb;
        }// end for
        $nxb_data = array('NXB'=>$nxb1);
        /*
        // Sach dang HOT
        $s->where("status", 1)->get();
        $total = array(); $ten = array(); $tacgia = array(); $theloai = array(); $nxb = array();
        $namxb = array(); $mota = array();
        foreach($s->all as $ts)
        {
            $total[] = $ts->id;
            $ten[] = $ts->tensach;
            $tacgia[] = $ts->tacgia;
            $nxb[] = $ts->nxb;
            $theloai[] = $ts->loaisach;
            $namxb[] = $ts->namxb;
            $mota[] = $ts->mota;
        }
        $bhot_data = array('total'=>$total, 'ten'=>$ten, 'tacgia'=>$tacgia, 'nxb'=>$nxb, 'theloai'=>$theloai,
                'namxb'=>$namxb, 'mota'=>$mota);
        */
        //$author = preg_replace("/ /", "-", $this->stripUnicode($author));
        $data = array('total'=>$total, 'ten'=>$ten, 'nxb'=>$nxb, 'theloai'=>$theloai,
                'namxb'=>$namxb, 'mota'=>$mota, 'author'=>$author, 'giaban'=>$giaban,'picture'=>$picture);
        $this->load->view("frontend/sach/view_sach_tacgia", array_merge($data, $nxb_data));
    }// End view_sach_tacgia()

    //view_sach_duoc_qt()
    public function view_sach_duoc_qt()
    {
        $s = new Sach();
        // nhung sach co status = 1
        $s->where("status", 1)->get();
        $total = array(); $ten = array(); $tacgia = array(); $theloai = array(); $giaban = array(); $nxb = array();
        $namxb = array(); $mota = array(); $picture = array(); 
        foreach($s->all as $ts)
        {
            $total[] = $ts->id;
            $ten[] = $ts->tensach;
            $tacgia[] = $ts->tacgia;
            $nxb[] = $ts->nxb;
            $theloai[] = $ts->loaisach;
            $giaban[] = $ts->giaban;
            $namxb[] = $ts->namxb;
            $mota[] = $ts->mota;
            $picture[] = $ts->picture;
        }
        $data = array('total'=>$total, 'ten'=>$ten, 'tacgia'=>$tacgia, 'nxb'=>$nxb, 'theloai'=>$theloai, 'giaban'=>$giaban,
                'namxb'=>$namxb, 'mota'=>$mota, 'pic'=>$picture);
        $this->load->view("frontend/sach/sach_quantam", $data);
    }

    /*
     * **************************************Cac muc lien quan toi thoi trang*****************************
     */
    // thoitrang
    public function thoitrang()
    {
        $this->load->view("frontend/thoitrang/index");
    }// End thoitrang()

    // maytinh
    public function maytinh()
    {
        $this->load->view("frontend/maytinh/index");
    }// End maytinh()

    // dienthoai()
    public function dienthoai()
    {
        $this->load->view("frontend/dienthoai/index");
    }// End dienthoai()
    
    // Nội thất
    public function noithat()
    {
        $this->load->view("frontend/noithat/index");
    }// End Nội thất
    
    // Đồ gia dụng
    public function dogiadung()
    {
        $this->load->view("frontend/noithat/index");
    }// End Đồ gia dụng

    // Phụ kiện điện tử
    public function phukiendientu()
    {
        $this->load->view("frontend/phukiendientu/index");
    }
    
    // Thiết bị số
    public function thietbiso()
    {
        $this->load->view("frontend/thietbiso/index");
    }
    public function sach_comment($id)
    {
        $s = new Sach();
        $s->where("id", $id)->get();
        $s->comment->get_iterated();
        echo "<table border='1' width='750px' style='border-collapse: collapse;'>
                <tr style='color: blue;'>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Content</td>
                </tr>";
        $arr = array();
        
        foreach($s->comment as $u)
        {
            $arr[] = $u->id;
            echo "
                    <tr style='color: #669;'>
                            <td>$u->id</td>
                            <td>$u->name</td>
                            <td>$u->email</td>
                            <td>$u->content</td>
                    </tr>";
        }
        echo "</table>";
        echo "Co tat ca <b style='color: red;'>".  count($arr). "</b> Comment";
    }

    public function add_cmt()
    {
        $c = new Sach();
        if($c->comment->add_comment())
        {
            echo "Them thanh cong !";
        }
        else
        {
            echo "Khong the them records";
        }
    }


    // view_error()
    public function view_error()
    {
        $this->load->view("frontend/error/index");
    }

    // linh tinh ve time
    public function tinh_tinh()
    {
        $s = new Sach();
        $this->load->view("frontend/sach/linhtinh", $s->get_product_inweek());
    }

    // san pham cu
    public function pro_desc()
    {
        $s = new Sach();
        $this->load->view("frontend/sach/cunhat", $s->get_pro_desc());
    }
}
