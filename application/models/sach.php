<?php
/*
 * code by Dang Chi Thao
 * Object sach
 */
class Sach extends DataMapper
{
    // with table comments
    var $has_many = array("comment");// image
    // with table comments_sachs
    var $has_one = array("comments_sach");// images_sach
    
    public function Sach()
    {
        parent::DataMapper();
    }
    // ham tien ich loai dau tieng viet
    public function stripUnicode($str)
    {
        if(!$str) return false;
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str;
    }// End stripUnicode()

    // get_book_tinhoc()
    public function get_book_tinhoc()
    {
        $s = new Sach();
       
        $s->group_by("tacgia");
        $s->having("loaisach", "tinhoc");
       
        //$s->where("loaisach", "tinhoc");
        $id = array(); $ten = array(); $gia = array(); $tacgia = array();
        foreach($s->get()->all as $ts)
        {
            $id[] = $ts->id;
            $ten[] = $ts->tensach;
            $gia[] = $ts->gia;
            $tacgia[] = $ts->tacgia;
        }
        $t_data = array('t_id'=>$id, 't_ten'=>$ten, 't_gia'=>$gia, 't_tacgia'=>$tacgia);
        // tra ve mang cac ket qua
        return $t_data;
    }
    // get_book_vanhoc()
    public function get_book_vanhoc()
    {
        $s = new Sach();
        $s->group_by("tacgia");
        $s->having("loaisach", "vanhoc");
         
        //$s->where("loaisach", "vanhoc");
        $id = array(); $ten = array(); $gia = array(); $tacgia = array();
        foreach($s->get()->all as $ts)
        {
            $id[] = $ts->id;
            $ten[] = $ts->tensach;
            $gia[] = $ts->gia;
            $tacgia[] = $ts->tacgia;
        }
        $v_data = array('v_id'=>$id, 'v_ten'=>$ten, 'v_gia'=>$gia, 'v_tacgia'=>$tacgia);
        // tra ve mang cac ket qua
        return $v_data;
    }// End get_book_vanhoc()

    // get_book_tinhcam()
    public function get_book_tinhcam()
    {
        $s = new Sach();
        $s->group_by("tacgia");
        $s->having("loaisach", "tinhcam");
        $id = array(); $ten = array(); $gia = array(); $tacgia = array();
        foreach($s->get()->all as $ts)
        {
            $id[] = $ts->id;
            $ten[] = $ts->tensach;
            $gia[] = $ts->gia;
            $tacgia[] = $ts->tacgia;
        }
        $tc_data = array('tc_id'=>$id, 'tc_ten'=>$ten, 'tc_gia'=>$gia, 'tc_tacgia'=>$tacgia);
        // tra ve mang cac ket qua
        return $tc_data;
    }// End get_book_tinhcam()

    // get_book_tinhcam()
    public function get_book_tienganh()
    {
        $s = new Sach();
        $s->group_by("tacgia");
        $s->having("loaisach", "tienganh");

        $id = array(); $ten = array(); $gia = array(); $tacgia = array();
        foreach($s->get()->all as $ts)
        {
            $id[] = $ts->id;
            $ten[] = $ts->tensach;
            $gia[] = $ts->gia;
            $tacgia[] = $ts->tacgia;
        }
        $ta_data = array('ta_id'=>$id, 'ta_ten'=>$ten, 'ta_gia'=>$gia, 'ta_tacgia'=>$tacgia);
        // tra ve mang cac ket qua
        return $ta_data;
    }// End get_book_tinhcam()

    // get_book_tinhcam()
    public function get_book_kinhte()
    {
        $s = new Sach();
        $s->group_by("tacgia");
        $s->having("loaisach", "kinhte");

        $id = array(); $ten = array(); $gia = array(); $tacgia = array();
        foreach($s->get()->all as $ts)
        {
            $id[] = $ts->id;
            $ten[] = $ts->tensach;
            $gia[] = $ts->gia;
            $tacgia[] = $ts->tacgia;
        }
        $kt_data = array('kt_id'=>$id, 'kt_ten'=>$ten, 'kt_gia'=>$gia, 'kt_tacgia'=>$tacgia);
        // tra ve mang cac ket qua
        return $kt_data;
    }// End get_book_tinhcam()
    
    // function get_author_group_by()
    public function get_nxb_group_by()
    {
        $s = new Sach();
        $s->group_by("nxb")->get();
        // create a array new
        $nxb = array(); 
        foreach($s->all as $b)
        {
            $nxb[] = $b->nxb;
        }// end for
        $data = array('NXB'=>$nxb);
        return $data;
    }// End function get_author_group_by()
    
    // function get_author_group_by()
    public function get_author_group_by()
    {
        $s = new Sach();
        $s->group_by("tacgia")->get();
        // create a array new
        foreach($s->all as $b)
        {
            // Author: abc-cdf-...-xyz
            $tacgia[] = preg_replace("/ /", "-", $this->stripUnicode($b->tacgia));
        }// end for
        $data = array('author'=>$tacgia);
        return $data;
    }// End function get_author_group_by()
    
    // get_all_book() - lay tat ca cac sach view ra trang index
    public function get_all_book()
    {
        // noi cac mang lai voi nhau
        return array_merge($this->get_book_tinhoc(), $this->get_book_vanhoc(), 
                $this->get_book_tinhcam(), $this->get_book_tienganh(), 
                $this->get_book_kinhte(), $this->get_nxb_group_by(), $this->get_author_group_by(), 
                $this->get_sach_quantam());
    }// End get_all_book()


    // get_book_tinhoc_example()
    public function get_book_tinhoc_example($loaisach, $id)
    {
        $s = new Sach();
        // nhung sach co status = 1
        $s->where("loaisach", $loaisach);
        $s->where("id !=", $id)->get();
        //$s->limit(5)->get();
        /*
        $s->group_by("tacgia");
        $s->having("loaisach", "tinhoc")->get();
         */
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
        $data1 = array('total'=>$total, 'ten1'=>$ten, 'tacgia1'=>$tacgia, 'nxb1'=>$nxb, 'theloai1'=>$theloai,
                'namxb1'=>$namxb, 'mota1'=>$mota);
        return $data1;
    }// End get_book_tinhoc_example()

    // get_by_id()
    public function get_by_id_sach($id)
    {
        $s = new Sach();
        $s->where("id", $id)->get();
        foreach($s->all as $ts)
        {
            $data = array('id'=>$ts->id, 'ten'=>$ts->tensach, 'gia'=>$ts->gia, 'giaban'=>$ts->giaban,
                'tacgia'=>$ts->tacgia, 'nxb'=>$ts->nxb, 'theloai'=>$ts->loaisach,
                'namxb'=>$ts->namxb, 'mota'=>$ts->mota);
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
        //
        // tim nhung pic cho san pham nay
        $s->image->get_iterated();
        $pic_avatar = array(); $pic_name = array();
        foreach($s->image as $p)
        {
            $pic_avatar[] = $p->id;
            $pic_name[] = $p->name_image;
        }// End foreach
        $data["pic_avatar"] = $pic_avatar; $data["pic_name"] = $pic_name;
        // neu ket qua khong tim thay - auto chuyen nguoi dung den trang can den
        if(count($data['id'])==0)
        {
            return redirect("home");
        }
        else// neu tim thay ket qua thi hien thi
        {
            return array_merge($data, $s->get_book_tinhoc_example($data['theloai'], $id));
        }
    }// End function get_by_id()
    
    
    // get_number_cmt()
    public function get_number_cmt($id)
    {
        $s = new Sach();
        $s->where("id", $id)->get();
        // voi id_sach nay thi co bao nhieu comment
        $s->comment->get_iterated();
        // mot mang luu tong so comment cho moi san pham
        $total_cmt = array();
        foreach($s->comment as $c)
        {
            $total_cmt[] = $c->id;
        }
        // tra ve tong so comment
        return count($total_cmt);
    }

    // update total comment
    public function update_total_cmt($id)
    {
        $s = new Sach();
        $total = $s->get_number_cmt($id);
        $s->where('id', $id);
        return $s->update('totalcmt', $total);
    }// End update total comment

    // update status total comment
    public function update_status_cmt($id)
    {
        $s = new Sach();
        // tong so comment cho sp co id_sach = $id
        $total = $s->get_number_cmt($id);
        $s->where('id', $id);
        $flag = 0;
        if($total>=5)
        {
            $flag = 1;
        }
        return $s->update('status', $flag);
    }// End update status

    // get_sach_quantam()
    public function get_sach_quantam()
    {
        $s = new Sach();
        // nhung sach co status = 1
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
        $data = array('total'=>$total, 'ten'=>$ten, 'tacgia'=>$tacgia, 'nxb'=>$nxb, 'theloai'=>$theloai,
                'namxb'=>$namxb, 'mota'=>$mota);
        return $data;
    }// End get_sach_quantam()

    // get_book_author()
    public function get_book_author($author)
    {
        $s = new Sach();
        $s->where('tacgia', $author)->get();
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
        $data = array('total'=>$total, 'ten'=>$ten, 'tacgia'=>$tacgia, 'nxb'=>$nxb, 'theloai'=>$theloai,
                'namxb'=>$namxb, 'mota'=>$mota, 'author'=>$author);
        return $data;
    }// End function get_book_author()


    /* san pham cu nhat con ton tai trong thang
     * = tong cac san pham con ton tai trong tuan dau tien cua thang
     */
    public function get_product_inweek()
    {
        $s = new Sach();
        $option = 'd';
        $object = date('Y-m-d');
        $object2 = "ngaynhap";

        $s->where(date_diff($object, $object2, $option), 5  );
        $total = array(); $ten = array(); $tacgia = array(); $theloai = array(); $namxb = array();
        foreach($s->get()->all as $t)
        {
            $total[] = $t->id;
            $ten[] = $t->tensach;
            $namxb[] = $t->namxb;
        }
        $data = array("id"=>$total, "ten"=>$ten, "namxb"=>$namxb);
        return $data;
    }

    /* Tong cac san pham cu nhat con ton tai trong quy
     * = tong cac san pham cu nhat con ton tai o moi thang cua quy do
     */

    // lay san pham cu nhat
    public function get_pro_desc()
    {
        $s = new Sach();
        $s->where("flag", 1)->get();
        $total = array(); $ten = array(); $tacgia = array(); $theloai = array(); $nxb = array();
        $namxb = array(); $mota = array(); $ngaynhap = array();
        foreach($s->all as $ts)
        {
            $total[] = $ts->id;
            $ten[] = $ts->tensach;
            $tacgia[] = $ts->tacgia;
            $nxb[] = $ts->nxb;
            $theloai[] = $ts->loaisach;
            $namxb[] = $ts->namxb;
            $mota[] = $ts->mota;
            $ngaynhap[] = $ts->ngaynhap;
        }
        $data = array('total'=>$total, 'ten'=>$ten, 'tacgia'=>$tacgia, 'nxb'=>$nxb, 'theloai'=>$theloai,
                'namxb'=>$namxb, 'ngaynhap'=>$ngaynhap, 'mota'=>$mota);
        return $data;
    }
}

