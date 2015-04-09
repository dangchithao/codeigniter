<?php
/*
 * Tìm kiếm - vitbay.vn
 */
class Timkiem extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
    }
    public function index()
    {
        $key = $this->input->post("keyword");
        redirect("timkiem/keyword/".$key);
    }
    public function keyword()
    {
        $key = $this->uri->segment(3);
        $this->load->view("book", array('key'=>$key));
    }
}
