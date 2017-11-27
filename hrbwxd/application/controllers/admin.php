<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this -> load -> model('admin_model');
        $this -> load -> model('article_type_model');
        $this -> load -> model('article_model');
        $this -> load -> model('img_news_model');
        $this -> load -> model('download_model');
        $this -> load -> model('upload_model');

    }

    public function login(){
        $this -> load -> view('admin/admin_login');
    }

    public function admin_index(){
        $this -> load -> view('admin/admin_index');
    }
    public function check_login()
    {
        /*接收数据*/
        $username = $this -> input -> post('admin_username');
        $password = $this -> input -> post('admin_password');

//        /*连接数据库*/
//        $this -> load -> model('admin_model');

        /*调用数据库方法*/
        $result = $this -> admin_model -> get_by_user($username,$password);


        /*跳转页面 传递数据*/
        if($result)
        {
            /*将数据库返回的结果 转化成php数组*/
            $data = array(
                'adminInfo' => $result
            );

            /*将admin信息存入session 记录当然admin的登录状态 跳转至admin-index页面*/
            $this -> session -> set_userdata($data);
            //$this -> load -> view('admin/admin-index');
            redirect('admin/admin_index');

        }else{
            //$this -> load -> view('admin/login');
            redirect('admin/login');
        }
    }
    public function logout()
    {
        /*将当前admin用户信息从session里面删除 删除当前用户的会话 实现登出功能*/
        $this -> session -> unset_userdata('adminInfo');
        /*跳转至登录页面*/
        redirect('admin/login');
    }



    //文章类型管理开始
    public function article_type_mgr(){
        $type = $this -> article_type_model -> get_all();
        $this -> load -> view('admin/article_type', array(
            'types' => $type
        ));
    }

    public function add_article_type(){
        $this -> load -> view('admin/article_type_add');

    }

    public function edit_article_type($type_id){
        $type_id = $this -> article_type_model -> get_by_id($type_id);
        $this -> load -> view('admin/article_type_edit',array(
            'type' => $type_id
        ));

    }
    public function update_article_type(){
        $type_id = $this -> input -> post('type_id');
        $type_name = $this -> input -> post('type_name');
        $rows = $this -> article_type_model -> update($type_id,$type_name);
        if($rows > 0){
            redirect('admin/article_type_mgr');
        }else{
            echo '添加类型失败!';
        }
    }

    public function save_article_type(){
        $type_name = $this -> input -> post('type_name');
        $rows = $this -> article_type_model -> save($type_name);
        if($rows > 0){
//            $this -> load -> view('admin/article_type');
            redirect('admin/article_type_mgr');
        }else{
            echo '添加类型失败!';
        }
    }


    public function delete_article_type(){
        $type_id = $this -> input -> get('typeId');
        $rows = $this -> article_type_model -> delete($type_id);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }

    public function delete_selected_type(){
        $type_ids = $this -> input -> get('typeIdStr');
        $rows = $this -> article_type_model -> delete_selected($type_ids);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    //文章类型管理结束


    //文章管理开始
    public function article_mgr($type_id=0, $offset=0){
        $title = $this -> input -> get('title');
        $total_rows = $this -> article_model -> get_all_count($type_id, $title);

        /*分页配置信息开始*/
        $this->load->library('pagination');

        $config['base_url'] = 'admin/article_mgr/'.$type_id.'/';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;

        $this->pagination->initialize($config);

        /*分页配置信息结束*/

        $this -> load -> model('article_type_model');
        $types = $this -> article_type_model -> get_all();
        $articles = $this -> article_model -> get_by_page($type_id, $title, $config['per_page'], $offset);
        $this -> load -> view('admin/article', array(
            'types' => $types,
            'articles' => $articles
        ));

    }

    public function add_article(){
        $types = $this -> article_type_model -> get_all();

        $this -> load -> view('admin/article_add', array(
            'types' => $types,
        ));
    }

    public function edit_article($article_id){
        $article_id = $this -> article_model -> get_by_id($article_id);
        $types = $this -> article_type_model -> get_all();

        $this -> load -> view('admin/article_edit',array(
            'types' => $types,
            'article' => $article_id
        ));

    }
    public function update_article(){
        $article_id = $this -> input -> post('article_id');
        $title = $this -> input -> post('title');
        $type_id = $this -> input -> post('typeId');
        $clicked = $this -> input -> post('clicked');
        $content = $this -> input -> post('content');
        $rows = $this -> article_model -> update($article_id,$title, $type_id, $clicked, $content);
        if($rows > 0){
            redirect('admin/article_mgr');
        }else{
            echo '添加类型失败!';
        }
    }

    public function save_article(){
        $title = $this -> input -> post('title');
        $type_id = $this -> input -> post('typeId');
        $clicked = $this -> input -> post('clicked');
        $content = $this -> input -> post('content');

        $rows = $this -> article_model -> save($title, $type_id, $clicked, $content);
        if($rows > 0){
            redirect('admin/article_mgr');
        }else{
            echo '发表文章失败';
        }

    }
    public function delete_article(){
        $article_id = $this -> input -> get('articleId');
        $rows = $this -> article_model -> delete($article_id);
        if($rows > 0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }


    public function delete_selected_article(){
        $article_ids = $this -> input -> get('articleId');
        $rows = $this -> article_model -> delete_selected($article_ids);
        if($rows > 0){
            redirect('admin/article_mgr');
        }
    }

    //文章管理结束


    //文件上传管理开始

    public function download_mgr($type,$offset=0){
//        $files = $this -> download_model -> get_by_type($type);
        $total_rows = $this -> download_model -> get_all_count($type);

        /*分页配置信息开始*/
        $this->load->library('pagination');

        $config['base_url'] = 'admin/download_mgr/'.$type.'/';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;

        $this->pagination->initialize($config);

        /*分页配置信息结束*/

        $files = $this -> download_model -> get_by_page($type,$config['per_page'], $offset);
        $this -> load -> view('admin/download', array(
            'files' => $files
        ));
    }

    public function file_upload($type){
        $files = $this -> download_model -> get_by_type($type);

        $this -> load -> view('admin/file_upload', array(
            'files' => $files
        ));

    }
    public function post_file(){


        $config['upload_path'] = './downloads/';
        $config['allowed_types'] = 'pdf|xls|txt|doc|docx';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);


        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file'))
        {
            $file_title = htmlspecialchars($this -> input -> post('title'));
            $type = $this -> input -> post('type');
            $order_no = $this -> input -> post('order_no');
//            $file_src = $this -> input -> post('file');

            $upload_data = $this -> upload -> data();

            $file_src = 'downloads/'.$upload_data['raw_name']   . $upload_data['file_ext'];



            $rows = $this -> download_model -> save($file_title, $type, $file_src, $order_no);
            if($rows > 0){
                redirect('admin/download_mgr/'.$type);
            }else{
                echo '发表文章失败';
            }
        }else{
            var_dump($this->upload->display_errors());
            echo '文件上传失败!';
        }


    }

    public function delete_download(){
        $down_id = $this -> input -> get('downId');
        $type_id = $this -> input -> get('typeId');

        $rows = $this -> download_model -> delete($down_id);
        if($rows > 0){
//            echo 'success';
            redirect('admin/download_mgr/'.$type_id);
        }
    }


    public function delete_selected_download(){
        $download_ids = $this -> input -> get('downId');
        $rows = $this -> download_model -> delete_selected($download_ids);
        if($rows > 0){
            redirect('admin/download_mgr');
        }
    }

    //文件上传管理结束

    //文件接收管理开始

    public function upload_mgr($down_id=0,$offset=0){
//        $files = $this -> upload_model -> get_all();
//        $this -> load -> view('admin/upload', array(
//            'files' => $files
//        ));
//        $down_id = $this -> input -> get('downId');

//        $files = $this -> upload_model -> get_by_down($down_id);
        $total_rows = $this -> upload_model -> get_all_count($down_id);

        /*分页配置信息开始*/
        $this->load->library('pagination');

        $config['base_url'] = 'admin/upload_mgr/'.$down_id.'/';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;

        $this->pagination->initialize($config);

        /*分页配置信息结束*/

        $files = $this -> upload_model -> get_by_page($down_id,$config['per_page'], $offset);
        $this -> load -> view('admin/upload', array(
            'files' => $files
        ));
    }

    public function delete_upload(){
        $up_id = $this -> input -> get('upId');

        $rows = $this -> upload_model -> delete($up_id);
        if($rows > 0){
            redirect('admin/upload_mgr');
        }
    }

    public function delete_selected_upload(){
        $upload_ids = $this -> input -> get('upId');
        $rows = $this -> upload_model -> delete_selected($upload_ids);
        if($rows > 0){
            redirect('admin/upload_mgr');
        }
    }

    public function get_by_down($down_id){
        $files = $this -> upload_model -> get_by_adown($down_id);
        $this -> load -> view('admin/upload', array(
            'files' => $files
        ));
    }


    //文件接收管理结束

    //图片新闻管理开始
    public function img_news_mgr()
    {
        $news = $this -> img_news_model -> get_all();

        $this->load -> view('admin/img_news',array(
            'news' => $news
        ));
    }

    public function add_img_news(){
        $this -> load -> view('admin/img_news_add');

    }

    public function save_img_news()
    {
        $title = $this -> input -> post('news_title');
        $content = $this -> input -> post('news_content');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);
        $this -> load -> library('upload', $config);
        $this -> upload -> do_upload('news_photo');
        $upload_data = $this -> upload -> data();
        $photo_url = 'uploads/'.$upload_data['file_name'];

        $row = $this -> img_news_model -> save_news_by_all($title,$content,$photo_url);
        if( $row > 0)
        {
            redirect('admin/img_news_mgr');
        }else{
            redirect('admin/save_img_news');
        }

    }
    public function edit_img_news()
    {
        $id = $this -> input -> get('news_id');
        $row = $this -> img_news_model -> get_by_id($id);

        if($row)
        {
            $data = array(
                'news' => $row
            );

            $this -> load -> view('admin/img_news_edit',$data);
        }
    }

    public function update_img_news()
    {
        $id = $this -> input -> post('news_id');
        $title = $this -> input -> post('news_title');
        $content = $this -> input -> post('news_content');
        $photo_old_url = $this -> input -> post('photo_old_url');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3072';
        $config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);
        $this -> load -> library('upload', $config);
        $this -> upload -> do_upload('news_photo');
        $upload_data = $this -> upload -> data();
        $photo_url = 'uploads/'.$upload_data['file_name'];

        if ( $upload_data['file_size'] > 0 ) {
            //数据库中存photo的路径
            $photo_url = 'uploads/'.$upload_data['file_name'];
        }else{
            //如果不上传图片,则使用默认图片
            $photo_url = $photo_old_url;
        }

        $row = $this -> img_news_model -> update_news_by_all($id,$title,$content,$photo_url);
        if( $row > 0)
        {
            redirect('admin/img_news_mgr');
        }else{
            echo "<script>location.href='edit_img_news?news_id='+$id;</script>";
        }

    }

    public function delete_img_news()
    {
        $id = $this -> uri -> segment(3);
        $row = $this -> img_news_model -> delete_by_id($id);
        if($row > 0)
        {
            redirect('admin/img_news_mgr');
        }
    }

    //图片新闻管理结束


}
