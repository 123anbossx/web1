<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model {

    public function get_all(){
        $this -> db -> order_by('add_time', 'desc');//排序规则
        return $this -> db -> get('t_upload') -> result();
    }

    public function get_by_down($down_id){
        return $this -> db -> get_where('t_upload',array('down_id' => $down_id)) -> result();
    }

    public function get_all_count($down_id){
        if($down_id){
            $this->db->from('t_upload');
            $this -> db -> where('down_id',$down_id);
            return $this->db->count_all_results();
        }else{
            return $this -> db -> count_all('t_upload');

        }

    }
    public function delete($up_id){
        $this -> db -> delete('t_upload', array(
            'up_id' => $up_id
        ));
        //update t_article_type set is_delete=1 where type_id=4
        return $this -> db -> affected_rows();
    }

    public function get_by_page($down_id,$limit=10, $offset=0){
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
        $this -> db -> order_by('add_time', 'desc');
        $this -> db -> limit($limit, $offset);
        if($down_id){
            $this -> db -> where('down_id',$down_id);
        }
        return $this -> db -> get('t_upload') -> result();

//        return $this -> db -> get() -> result();
    }

    public function delete_selected($up_ids_str){ //"1,2"
        $up_ids = explode(',', $up_ids_str);//[1,2]
        $this -> db -> where_in('up_id', $up_ids);
        $this -> db -> delete('t_upload');
        return $this -> db -> affected_rows();
    }
    public function save($file_title, $down_id, $file_src){
        $this -> db -> insert('t_upload', array(
            'file_title' => $file_title,
            'down_id' => $down_id,
            'file_src' => $file_src
        ));
        return $this -> db -> affected_rows();
    }
}
