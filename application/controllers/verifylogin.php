<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyLogin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $msg['message'] = "Invalid Username Or Password";
            $this->session->set_userdata($msg);
            redirect('notificamos', 'refresh');
        } else {
            //Go to private area
            echo $admin_id = $this->session->userdata('admin_id');
            redirect('admin', 'refresh');
        }
    }

    function check_database()
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //query the database
        $result = $this->user->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'user_type_id' => $row->user_type_id,
                    'username' => $row->username,
                    'status' => $row->status,
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
//        session_destroy();
        redirect('notificamos', 'refresh');
    }
	
	 public function start_merchant()
    {
       //echo 1;
	   $query = $this->db->get_where(
			'users', array(
			'username' => $this->input->post('username')
		))->result_array();
		
        if(count($query) <=0){
		
        $inputelement = array();
       
        $inputelement['contact_person'] = $this->input->post('contact_person');
        $inputelement['company_name'] = $this->input->post('company_name');
        $inputelement['website'] = $this->input->post('website');
        $inputelement['email'] = $this->input->post('email');
	    $inputelement['contact_number'] = $this->input->post('contact_number');
        $inputelement['status'] = 0;
		$inputelement['created_at'] = date("Y-m-d h:i:s", time());
		$this->db->insert('merchants',$inputelement);
		$merchant_id = $this->db->insert_id();
		
		$inputelement_two = array();
		 $inputelement_two['username'] = $this->input->post('username');
		
        $inputelement_two['password'] = md5($this->input->post('password'));
		$inputelement_two['merchant_id'] = $merchant_id;
		$inputelement_two['user_type_id'] = 4;
		$inputelement_two['status'] = 0;
		$inputelement_two['created_at'] = date("Y-m-d h:i:s", time());
		$this->db->insert('users',$inputelement_two);
		
        
       redirect('notificamos', 'refresh');
		}
		else{
		//echo $this->input->post('username')." Username Already Exist!";
		 redirect('notificamos', 'refresh');
		}
    }

}

?>