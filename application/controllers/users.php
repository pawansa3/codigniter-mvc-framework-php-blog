<?php

class Users extends MY_Controller {
	
	public function index()
	{
		$this->load->model('articlemodel','articles');

		$this->load->library('pagination');
		$config = [
					'base_url'		=>	base_url('users/index'),
					'per_page'		=>	5,
					'total_rows'	=>	$this->articles->count_all_rows(),
					'full_tag_open' =>	'<ul class="pagination">',
					'full_tag_close'=>	'</ul>',
					'first_tag_open'=>	'<li>',
					'first_tag_close'=>	'</li>',
					'last_tag_open'	=>	'<li>',
					'last_tag_close'=>	'</li>',
					'next_tag_open' =>	'<li>',
					'next_tag_close'=>	'</li>',
					'prev_tag_open' =>	'<li>',
					'prev_tag_close'=>	'</li>',
					'num_tag_open'	=>	'<li>',
					'num_tag_close'	=>	'</li>',
					'cur_tag_open'	=>	'<li class="active"><a>',
					'cur_tag_close'	=>	'</a></li>'
				];
		$this->pagination->initialize($config);


		$articles = $this->articles->all_article_list($config['per_page'],$this->uri->segment(3));

		$this->load->view('public/articles_list',compact('articles'));
	}
	public function about()
	{
		$this->load->view('public/about');
	}
	public function contact()
	{
		$this->load->view('public/contact');
	}

	public function search_article()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('search_query','Search','required|alpha');

		$this->form_validation->set_error_delimiters('<div class="alert alert-dismissible alert-danger">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>','</div>');

		if(!$this->form_validation->run())
		{
			return $this->index();
		}	
		else{
	
			$query = $this->input->post('search_query');			
			return redirect("users/search_results_page/$query");

		}
		
	}

	public function search_results_page($query=null)
	{
		if(empty($query))
		{
			exit('404 page not found');
		}
		$this->load->model('articlemodel','articles');

		$this->load->library('pagination');
		$config = [
					'base_url'		=>	base_url("users/search_results_page/$query"),
					'per_page'		=>	5,
					'total_rows'	=>	$this->articles->search_result_count($query),
					'full_tag_open' =>	'<ul class="pagination">',
					'full_tag_close'=>	'</ul>',
					'first_tag_open'=>	'<li>',
					'first_tag_close'=>	'</li>',
					'last_tag_open'	=>	'<li>',
					'last_tag_close'=>	'</li>',
					'uri_segment'	=>	4,
					'next_tag_open' =>	'<li>',
					'next_tag_close'=>	'</li>',
					'prev_tag_open' =>	'<li>',
					'prev_tag_close'=>	'</li>',
					'num_tag_open'	=>	'<li>',
					'num_tag_close'	=>	'</li>',
					'cur_tag_open'	=>	'<li class="active"><a>',
					'cur_tag_close'	=>	'</a></li>'
				];

		$this->pagination->initialize($config);
		$articles = $this->articles->search_article($query,$config['per_page'],$this->uri->segment(4));
		$this->load->view('public/search_article',compact('articles'));

	}

	public function article_find($id=null)
	{
		if(empty($id))
		{
			exit('404 page not found');
		}

		$this->load->model('articlemodel','articles');
		$article = $this->articles->find($id);
		if(!empty($article))
			$this->load->view('public/article_detail',['article'=>$article]);
		else
			exit('404 page not found');	
	}

}


?>