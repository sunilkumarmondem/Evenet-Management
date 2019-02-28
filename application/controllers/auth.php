<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends CI_Controller {

	
	public function login()
	{
		$this->load->library('form_validation');
		if(isset($_POST['login'])){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			if($this->form_validation->run()==TRUE){
				$username=$_POST['username'];
				$password=md5($_POST['password']);
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where(array('username'=>$username,'password'=>$password));
				$query=$this->db->get();
				$user=$query->row();
				if($user->email){
					$this->session->set_flashdata('msg','Your are logged in');
					return redirect('');
					/*$_SESSION['user_logged']=TRUE;
					$_SESSION['username']=$user->username;
					return redirect('');*/

				}else{
					$this->session->set_flashdata('msg','your username or password is wrong');
				}
				
				return redirect('auth/login');
				
			}
		}
		$this->load->view('login');
	}

	public function register(){
		$this->load->library('form_validation');
		if(isset($_POST['register'])){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('password2','Confirm Password','required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone','PhoneNumber','required|min_length[8]');

			if($this->form_validation->run()==TRUE){
				
				$data=array(
					'username'=> $_POST['username'],
					'email'=> $_POST['email'],
					'password'=>md5($_POST['password']) ,
					'gender'=> $_POST['gender'],
					'phone'=> $_POST['phone'],
					'created_date'=> date('Y-m-d')
				);
				$this->load->model('queries');
				if($this->queries->add_user($data)){
				$this->session->set_flashdata('msg','Your account has registered successfully');
				
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
				return redirect('auth/register');
				
			}
		}
		$this->load->view('register');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */