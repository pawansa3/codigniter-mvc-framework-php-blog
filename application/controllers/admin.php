<?php

class Admin extends MY_Controller {
	
	public function dashboard()
	{

		$this->load->model('articlemodel','articles');

		$this->load->library('pagination');
		$config = [
					'base_url'		=>	base_url('admin/dashboard'),
					'per_page'		=>	5,
					'total_rows'	=>	$this->articles->num_rows(),
					'full_tag_open' =>	'<ul class="pagination">',
					'full_tag_close'=>	'</ul>',
					'first_tag_open'=>	'<li>',
					'first_tag_close'=>	'</li>',
					'last_tag_open'	=>	'<li>',
					'lasr_tag_close'=>	'</li>',
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

		$articles = $this->articles->article_list($config['per_page'],$this->uri->segment(3));

		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}

	public function add_article()
	{
		$this->load->view('admin/add_article');

	}

	public function store_article()
	{
		$config = [
					'upload_path'	=>	'./uploads',
					'allowed_types'	=>	'png|jpg|jpeg'
					];

		$this->load->library('upload',$config);
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="tooltiptext">','</div>');
		if($this->form_validation->run('add_article') && $this->upload->do_upload('image'))
		{
			$post = $this->input->post();
			unset($post['lsubmit']);
			$data = $this->upload->data();
			$image_path = base_url('uploads/'.$data['file_name']);
			//echo $image_path;exit;
			$post['image_path'] = $image_path;
			$this->load->model('articlemodel','articles');
			if($this->articles->add_article($post))
			{
				$this->session->set_flashdata('feedback','Article added successfully.');
				$this->session->set_flashdata('feedback_class','alert-success');
				//echo "Insert successful";
			}
			else
			{
				$this->session->set_flashdata('feedback','Article failed to add.');
				$this->session->set_flashdata('feedback_class','alert-danger');
				//echo "Insert failed";
			}
			return redirect('admin/dashboard');
		}
		else
		{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/add_article',compact('upload_error'));
		}
	}


	public function edit_article($article_id=1)
	{
		//echo $article_id;
		$this->load->model('articlemodel','articles');
		$article = $this->articles->find_article($article_id);
		//print_r($article); exit;

		$this->load->view('admin/edit_article',['article'=>$article]);
	}

	public function update_article($article_id)
	{


		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="tooltiptext">','</div>');
		if($this->form_validation->run('add_article'))
		{
			$post = $this->input->post();
			unset($post['lsubmit']);
			$this->load->model('articlemodel','articles');


			if($this->articles->update_article($article_id,$post))
			{
				$this->session->set_flashdata('feedback','Article updated successfully.');
				$this->session->set_flashdata('feedback_class','alert-success');
				//echo "Insert successful";
			}
			else
			{
				$this->session->set_flashdata('feedback','Article failed to update.');
				$this->session->set_flashdata('feedback_class','alert-danger');
				//echo "Insert failed";
			}
			return redirect('admin/dashboard');
		}
		else
		{
			$this->load->model('articlemodel','articles');		
			$article = $this->articles->find_article($article_id);
			$this->load->view('admin/edit_article',['article'=>$article]);
			//$this->load->view('admin/edit_article');
			//return redirect("admin/edit_article/{$article_id}");
		}
	}
	public function delete_article($article_id)
	{
		$this->load->model('articlemodel','articles');
		if($this->articles->delete_article($article_id))
		{
			$this->session->set_flashdata('feedback','Article has been deleted');
			$this->session->set_flashdata('feedback_class','alert-success');
			//echo "deleted successfully";
		}
		else
		{
			$this->session->set_flashdata('feedback','Article failed to delete');
			$this->session->set_flashdata('feedback_class','alert-danger');
			//echo "failed to delete";
		}
		return redirect('admin/dashboard');

	}

	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('user_id')) {
			return redirect('login');
		}
	}
}

?>