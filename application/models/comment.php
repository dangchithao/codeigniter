<?php
/*
 * Comment
 */
class Comment extends DataMapper
{
    var $has_one = array("sach");
    public function Comment()
    {
        parent::DataMapper();
    }

    // add_comment
    public function add_comment($name, $email, $date, $content)
    {
        $c = new Comment();
        $c->name = $name;
        $c->email = $email;
        $c->date = $date;
        $c->content = $content;
        if($c->save())
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }// End function add_comment()

    // get_by_name_comment()
    public function get_by_name_comment($date)
    {
        $c = new Comment();
        $c->where("date", $date)->get();
        return $c->id;
    }
    
}
