<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['error'] = "";
		$this->load->view('upload_view', $data);
	}
	
	public function validation()
	{
		
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '0';
		$config['overwrite'] = TRUE;
		$config['file_name'] = $_POST['fileName'];
		
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_view', $error);
		
		}
		else
		{
			$data = array('data'=>$this->upload->data());
			$this->load->view('success_upload_view', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
