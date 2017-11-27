<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model {


    public function get_all(){
        $this -> db -> order_by('add_time', 'desc');//排序规则
        return $this -> db -> get('t_article') -> result();
    }

    public function get_by_type($type_id, $limit=0){
        $this -> db -> order_by('add_time', 'desc');//排序规则
        if($limit > 0){$this -> db -> limit($limit);//限制查询的条数
        }
        return $this -> db -> get_where('t_article', array('type_id' => $type_id)) -> result();
    }

    public function  get_by_id($article_id){
        //return $this -> db -> get_where('t_article', array('article_id'=>$article_id)) -> row();
        $this -> db -> where('article_id', $article_id);
        $this->db->set('clicked', 'clicked+1', FALSE);
        $this->db->update('t_article');

        $this -> db -> select('article.*, type.type_name');
        $this -> db -> from('t_article article');
        $this -> db -> join('t_article_type type', 'article.type_id=type.type_id');
        $this -> db -> where('article.article_id', $article_id);
        return $this -> db -> get() -> row();
        /*$query = $this -> db -> query('select article.*, type.type_name from t_article article, t_article_type type where article.type_id=type.type_id and article.article_id='.$article_id);
        return $query -> row();*/
    }

    public function  get_prev_next($article_id, $type_id){

        $query_next = "select article_id,title from t_article where article_id<$article_id and type_id=$type_id order by article_id desc limit 0,1";
        $query_prev = "select article_id,title from t_article where article_id>$article_id and type_id=$type_id order by article_id asc limit 0,1";

        return array(
            'next' => $this -> db -> query($query_next) -> row(),
            'prev' => $this -> db -> query($query_prev) -> row()
        );
    }

    public function get_by_page($type_id, $title, $limit=10, $offset=0){
        $this -> db -> select('article.*, type.type_name');
        $this -> db -> from('t_article article');
        $this -> db -> join('t_article_type type', 'article.type_id=type.type_id');
        $this -> db -> where('type.is_delete', 0);
        if($type_id != 0){
            $this -> db -> where('type.type_id', $type_id);
        }
        if($title){
            $this -> db -> like('article.title', $title);
        }
        $this -> db -> order_by('article.article_id', 'desc');
        $this -> db -> limit($limit, $offset);
        return $this -> db -> get() -> result();
    }
    public function get_all_count($type_id, $title){
        $this -> db -> select('article.*, type.type_name');
        $this -> db -> from('t_article article');
        $this -> db -> join('t_article_type type', 'article.type_id=type.type_id');
        $this -> db -> where('type.is_delete', 0);
        if($type_id != 0){
            $this -> db -> where('type.type_id', $type_id);
        }
        if($title){
            $this -> db -> like('article.title', $title);
        }
        return $this->db->count_all_results();
    }

    public function update($article_id, $title, $type_id, $clicked, $content){
        $this -> db -> where('article_id', $article_id);
        $this -> db -> update('t_article', array(
            'title' => $title,
            'type_id' => $type_id,
            'clicked' => $clicked,
            'content' => $content,
        ));
        return $this -> db -> affected_rows();
    }

    public function save($title, $type_id, $clicked, $content){
        $this -> db -> insert('t_article', array(
            'title' => $title,
            'type_id' => $type_id,
            'clicked' => $clicked,
            'content' => $content,
        ));
        return $this -> db -> affected_rows();
    }
    public function delete($article_id){
        $this -> db -> delete('t_article', array(
            'article_id' => $article_id
        ));
        //update t_article_article set is_delete=1 where article_id=4
        return $this -> db -> affected_rows();
    }

    public function delete_selected($article_ids_str){ //"1,2"
        $article_ids = explode(',', $article_ids_str);//[1,2]
        $this -> db -> where_in('article_id', $article_ids);
        $this -> db -> delete('t_article');
        //update t_article_article set is_delete=1 where article_id=4
        return $this -> db -> affected_rows();
    }
}
