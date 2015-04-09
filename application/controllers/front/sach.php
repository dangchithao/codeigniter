<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Sach extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
    }
    public function index()
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
        // localhost/home(1)/sach(2)/...
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
    }// End index()
}// End class Sach