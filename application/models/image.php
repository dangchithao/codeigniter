<?php
/*
 * Model image
 */
class Image extends DataMapper
{
    var $has_one = array("sach");
    public function Image()
    {
        parent::DataMapper();
    }
}// End class image
