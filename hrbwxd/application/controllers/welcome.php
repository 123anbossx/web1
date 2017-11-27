<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this -> load -> model('admin_model');
        $this -> load -> model('article_type_model');
        $this -> load -> model('article_model');
		$this -> load -> model('img_news_model');
		$this -> load -> model('download_model');
        $this -> load -> model('upload_model');
	}

	public function index()
	{
		$uploads = $this -> upload_model -> get_all();
    	$downloads = $this -> download_model -> get_all();
		$articles = $this -> article_model -> get_all();
		$types = $this -> article_type_model -> get_all();
		$news = $this -> img_news_model -> get_all(5);

		$data = array(
			'types' => $types,
			'articles' => $articles,
			'newz' => $news,
			'downloads' => $downloads,
			'uploads' => $uploads
		);

		$this -> load -> view('index',$data);

	}
	public function article($article_id)
	{
		$types = $this -> article_type_model -> get_all();
		foreach($types as $type){
			$type -> articles = $this -> article_model -> get_by_type($type -> type_id, 11);
		}

		$article = $this -> article_model -> get_by_id($article_id);

		$prev_next = $this -> article_model -> get_prev_next($article_id, $article -> type_id);


		$this -> load -> view('article', array(
				'types' => $types,
				'article_desc' => $article,
				'prev' => $prev_next['prev'],
				'next' => $prev_next['next']
		));

	}


	public function img_news($id)
	{
		$types = $this -> article_type_model -> get_all();
		foreach($types as $type){
			$type -> articles = $this -> article_model -> get_by_type($type -> type_id, 11);
		}
		$news = $this -> img_news_model -> get_by_id($id);

		$this -> load -> view('img_news', array(
				'types' => $types,
				'news' => $news
		));

	}
	public function lists($type_id,$offset=0)
	{
		$types = $this -> article_type_model -> get_all();
		foreach($types as $type){
			$type -> articles = $this -> article_model -> get_by_type($type -> type_id, 11);
		}

//		$articles = $this -> article_model -> get_by_type($type_id);

		$total_rows = $this -> article_model -> get_all_count($type_id, $title=0);

		/*分页配置信息开始*/
		$this->load->library('pagination');

		$config['base_url'] = 'welcome/lists/'.$type_id;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;

		$config['prev_link'] = '«';
		$config['next_link'] = '»';


		$this->pagination->initialize($config);

		/*分页配置信息结束*/

		$articles = $this -> article_model -> get_by_page($type_id, $title, $config['per_page'], $offset);
//		$this -> load -> view('admin/article', array(
//				'types' => $types,
//				'articles' => $articles
//		));

		$this -> load -> view('lists', array(
				'types' => $types,
				'articles' => $articles,
				'type_id' => $type_id
		));

	}
    public function download()
    {
		$types = $this -> article_type_model -> get_all();
		foreach($types as $type){
			$type -> articles = $this -> article_model -> get_by_type($type -> type_id, 11);
		}
		$downloads = $this -> download_model ->  get_all();
        $this -> load -> view('download', array(
				'types' => $types,
				'downloads' => $downloads

		));

    }
	public function post_file(){


		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|xls|txt|doc|docx';
		$config['file_name'] = date("YmdHis") . '_' . rand(10000, 99999);


		$this->load->library('upload', $config);

		if ($this->upload->do_upload('uploadFile'))
		{
			$file_title = htmlspecialchars($this -> input -> post('title'));
			$down_id = $this -> input -> post('downId');
//            $file_src = $this -> input -> post('file');

			$upload_data = $this -> upload -> data();

			$file_src = 'uploads/'.$upload_data['raw_name']   . $upload_data['file_ext'];



			$rows = $this -> upload_model -> save($file_title,$down_id, $file_src);
			if($rows > 0){
				echo '<div style="width: 50%; margin: 50px auto; text-align: center;">上传文件成功</div>';
//				redirect('admin/download_mgr/'.$type);
			}else{
				echo '上传文件失败';
			}
		}else{
			var_dump($this->upload->display_errors());
			echo '文件上传失败!';
		}


	}
	public function contact (){
		$types = $this -> article_type_model -> get_all();
		foreach($types as $type){
			$type -> articles = $this -> article_model -> get_by_type($type -> type_id, 11);
		}
		$this -> load -> view('contact', array(
				'types' => $types,
		));

	}

	public function upload(){
		$this -> load -> view('upload.html');
	}
}
