<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download_model extends CI_Model {

    public function get_all(){
        $this -> db -> order_by('order_no', 'asc');//排序规则
        return $this -> db -> get('t_download') -> result();
    }
    public function get_by_type($type){
        return $this -> db -> get_where('t_download',array('type' => $type)) -> result();
    }
    public function get_all_count($type){
        $this->db->from('t_download');
        $this -> db -> where('type',$type);
        return $this->db->count_all_results();
    }
    public function get_by_page($type,$limit=10, $offset=0){
//        $this -> db -> select('article.*, type.type_name');
//        $this -> db -> from('t_article article');
//        $this -> db -> join('t_article_type type', 'article.type_id=type.type_id');
//        $this -> db -> where('type.is_delete', 0);
//        if($type_id != 0){
//            $this -> db -> where('type.type_id', $type_id);
//        }
//        if($title){
//            $this -> db -> like('article.title', $title);
//        }
        $this -> db -> order_by('order_no', 'asc');
        $this -> db -> limit($limit, $offset);
        return $this -> db -> get_where('t_download',array('type' => $type)) -> result();

    }

    public function save($file_title, $type, $file_src, $order_no){
        $this -> db -> insert('t_download', array(
            'file_title' => $file_title,
            'type' => $type,
            'file_src' => $file_src,
            'order_no' => $order_no
        ));
        return $this -> db -> affected_rows();
    }
    public function delete($down_id){
        $this -> db -> delete('t_download', array(
            'down_id' =>  $down_id
        ));
        return $this -> db -> affected_rows();
    }

    public function delete_selected($down_ids_str){ //"1,2"
        $down_ids = explode(',', $down_ids_str);//[1,2]
        $this -> db -> where_in('down_id', $down_ids);
        $this -> db -> delete('t_download');
        return $this -> db -> affected_rows();
    }
}
