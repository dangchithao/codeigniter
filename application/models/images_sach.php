<?php
/*
 * images_sach
 */
class Images_sach extends DataMapper
{
    var $has_many = array("sach");
    public function Images_sach()
    {
        parent::DataMapper(); 
    }
}
