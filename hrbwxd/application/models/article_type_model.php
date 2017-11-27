<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_type_model extends CI_Model {


    public function get_all(){
        //return $this -> db -> get('t_article_type') -> result();
        $query = $this -> db -> query('select type.*, (select count(*) from t_article article where article.type_id=type.type_id) as article_count from t_article_type type where type.is_delete=0');
        return $query -> result();
    }

    public function get_by_id($type_id)
    {
        return $this -> db -> get_where('t_article_type',array('type_id' => $type_id)) -> row();
    }

    public function update($type_id,$type_name){
        $this -> db -> where('type_id', $type_id);
        $this -> db -> update('t_article_type', array(
            'type_name' => $type_name
        ));
        return $this -> db -> affected_rows();
    }

    public function save($type_name){
        $this -> db -> insert('t_article_type', array(
            'type_name' => $type_name
        ));
        return $this -> db -> affected_rows();
    }
    public function delete($type_id){
        $this -> db -> where('type_id', $type_id);
        $this -> db -> update('t_article_type', array(
            'is_delete' => '1'
        ));
        //update t_article_type set is_delete=1 where type_id=4
        return $this -> db -> affected_rows();
    }

    public function delete_selected($type_ids_str){ //"1,2"
        $type_ids = explode(',', $type_ids_str);//[1,2]
        $this -> db -> where_in('type_id', $type_ids);
        $this -> db -> update('t_article_type', array(
            'is_delete' => '1'
        ));
        //update t_article_type set is_delete=1 where type_id=4
        return $this -> db -> affected_rows();
    }
}
