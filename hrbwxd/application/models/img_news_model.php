<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Img_news_model extends CI_Model {

    public function get_all($limit=0)
    {
        //$sql = "select * from t_faq";
        if($limit>0){

            $this -> db -> limit($limit);//限制查询的条数
        }
        $query = $this->db->get('t_img_news');



        return $query->result();

    }

    public function get_by_id($id)
    {
        $this -> db -> where('img_id', $id);
        $this->db->set('clicked', 'clicked+1', FALSE);
        $this->db->update('t_img_news');
        return $this -> db -> get_where('t_img_news',array('img_id' => $id)) -> row();
    }


//    public function get_news_count()
//    {
//        return $this -> db -> count_all('t_img_news');
//    }



//    public function get_news_by_page($limit,$offset)
//    {
//        $this -> db -> order_by('add_time','desc');
//        $query = $this -> db -> get('t_img_news',$limit,$offset);
//        return $query->result();
//    }

    public function save_news_by_all($title,$content,$photo_url)
    {
        $data = array(
            'img_title' => $title,
            'img_content' => $content,
            'img_src' => $photo_url
        );
        $this -> db -> insert('t_img_news',$data);
        return $this -> db -> affected_rows();
    }

    public function delete_by_id($id)
    {

        $this -> db -> delete('t_img_news', array('img_id' => $id));
        return $this -> db -> affected_rows();
    }




    public function update_news_by_all($id,$title,$content,$photo_url)
    {

        $this -> db -> where('img_id', $id);
        $this -> db -> update('t_img_news', array(
            'img_title' => $title,
            'img_content' => $content,
            'img_src' => $photo_url,
        ));
        return $this -> db -> affected_rows();

    }











}