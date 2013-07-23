<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	
	public function test() {
		/*$this->load->library('email');
		$config['protocol'] = "smtp";
		
		$config['mailpath'] = "\"D:\xampp\sendmail\sendmail.exe\" -t";
		$config['smtp_host'] = "smtp.gmail.com";
		$config['smtp_user'] = "amuliawan93@gmail.com";
		$config['smtp_pass'] = "anghiemulia";
		$config['smtp_port'] = 465;

		//$config['mailpath'] = '/usr/sbin/smtp';
		$config['charset'] = "iso-8859-1";

		$config['crlf'] = "\r\n";
		$config['newline'] = "\r\n";  
*/
		$config = Array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => '465',
			'smtp_user' => 'amuliawan93@gmail.com',
			'smtp_pass' => 'anghiemulia',
			'mailtype'  => 'text',
			'newline'   => "\r\n"
		);
		//$this->email->initialize($config);
		$this->load->library('email', $config);
		
		$this->email->clear();
		//$this->email->from('ExternalProject@binus.edu', 'External Project');
		//$this->email->to('Andrew.Ongko@gmail.com');
		//$this->email->send();
		
		$this->email->from('amuliawan93@gmail.com', 'Angela');
		$this->email->to('andrew.ongko@gmail.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->send();
		/*
		if($this->email->send()){
			
			echo "sukses";
		}
		else {
			echo "gagal";
		}
		*/
		echo $this->email->print_debugger();
		
	}
	
	/*
	public function upload(){
		
		$data['error'] = "";
		$this->load->view('upload_view', $data);
	}
	
	public function validation()
	{
		
		$config['upload_path'] = './files/upload/';
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
			redirect('welcome/index');
		}
	}*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
