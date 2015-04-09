<?php
/* 
 * Object comments_sach()
 */

class Comments_sach extends DataMapper
{
    var $has_many = array("sach");
    public function Comments_sach()
    {
        parent::DataMapper();
    }

    // add_comment_sach
    public function add_comment_sach($sach_id, $comment_id)
    {
        $cs = new Comments_sach();
        $cs->sach_id = $sach_id;
        $cs->comment_id = $comment_id;
        return $cs->save();
    }// End add_comment_sach()
}
