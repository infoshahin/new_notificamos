<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('crud_model');
        $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] == NULL) {
            redirect('notificamos', 'refresh');
        }
    }

    public function index()
    {
        $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] != NULL) {

            $data = array();
            $data['maincontent'] = $this->load->view('backend/home_body', $data, TRUE);
            $this->load->view('backend/home', $data);
        } else {
            redirect('notificamos', 'refresh');
        }
    }

    public function campaigns()
    {
        $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] != NULL) {

            $data = array();
            $data['campaigns'] = $this->db->get('campaigns')->result_array();
            $data['maincontent'] = $this->load->view('backend/campaigns_view_page', $data, TRUE);
            $this->load->view('backend/home', $data);
        } else {
            redirect('notificamos', 'refresh');
        }
    }

    function campaigns_information($param1 = '', $param2 = '')
    {
        $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] == NULL)
            redirect('notificamos', 'refresh');
        $data = array();
        if ($param1 == 'create') {
            $this->load->library('file_processing');
            $inputelement = array();
            $inputelement['title'] = $this->input->post('title');
            $inputelement['short_description'] = $this->input->post('short_description');
            $inputelement['detail'] = $this->input->post('detail');
            $inputelement['image_full'] = $this->file_processing->image_upload('userfile', './images/campaigns/', 'size[512,512|512,512]');
            $inputelement['image_thumb'] = $this->file_processing->image_upload('userfile', './images/campaigns/image_thumb', 'size[150,150|150,150]');
            $inputelement['weblink'] = $this->input->post('weblink');
            $inputelement['coverage_id'] = 2;
            $inputelement['time_from'] = $this->input->post('time_from');
            $inputelement['time_to'] = $this->input->post('time_to');
            $inputelement['created_at'] = date("Y-m-d h:i:s", time());
            $this->db->insert('campaigns', $inputelement);

            $data['status'] = 'Success';
            $this->session->set_flashdata('add_status', "Success");
            //echo '<pre>';
            //	 print_r($inputelement);
            // echo '</pre>';
            // exit;
        }
        $data['maincontent'] = $this->load->view('backend/campaigns_add', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function edit_compaign($param2 = '')
    {
        $data = array();
        $data['param2'] = $param2;
        $data['maincontent'] = $this->load->view('backend/campaigns_edit', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function view_compaign($param2 = '')
    {
        $data = array();
        $data['param2'] = $param2;
        $data['maincontent'] = $this->load->view('backend/campaigns_view', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function update_compaign($param1 = '')
    {
       //echo 1;
        $data = array();
        $this->load->library('file_processing');
        $inputelement = array();
        $inputelement['title'] = $this->input->post('title');
        $inputelement['short_description'] = $this->input->post('short_description');
        $inputelement['detail'] = $this->input->post('detail');
        if (!empty($_FILES['userfile']['name'])) {
            $inputelement['image_full'] = $this->file_processing->image_upload('userfile', './images/campaigns/', 'size[512,512|512,512]');
            $inputelement['image_thumb'] = $this->file_processing->image_upload('userfile', './images/campaigns/image_thumb', 'size[150,150|150,150]');

        }
        $inputelement['weblink'] = $this->input->post('weblink');
        $inputelement['coverage_id'] = 2;
        if (!empty($this->input->post('time_from'))) {
            $inputelement['time_from'] = $this->input->post('time_from');
        }
        if (!empty($this->input->post('time_to'))) {
            $inputelement['time_to'] = $this->input->post('time_to');
        }
        $this->db->where('id', $param1);
        $this->db->update('campaigns', $inputelement);
        $data['param2'] = $param1;
        $data['status'] = 'Success';
        $this->session->set_flashdata('add_status', "Success");
        redirect(base_url() . 'admin/campaigns/', 'refresh');
    }

    public function cmp_del($param1 = '')
    {
        $this->db->where('id', $param1);
        $this->db->delete('campaigns');
        redirect(base_url() . 'admin/campaigns/', 'refresh');
    }

    public function cetagory()
    {
        $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] != NULL) {
            $data = array();
            $data['categories'] = $this->db->get('categories')->result_array();
            $data['maincontent'] = $this->load->view('backend/cetagory_view_page', $data, TRUE);
            $this->load->view('backend/home', $data);
        } else {
            redirect('notificamos', 'refresh');
        }
    }

    function categories_information($param1 = '', $param2 = '')
    {
        $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] == NULL)
            redirect('notificamos', 'refresh');
        $data = array();
        if ($param1 == 'create') {

            $inputelement = array();
            $inputelement['title'] = $this->input->post('title');
            $inputelement['status'] = 1;
            $inputelement['parent_id'] = $this->input->post('parent_id');
            $inputelement['created_at'] = date("Y-m-d h:i:s", time());
            $this->db->insert('categories', $inputelement);
            $data['status'] = 'Success';
            $this->session->set_flashdata('add_status', "Success");
            //echo '<pre>';
            //	 print_r($inputelement);
            // echo '</pre>';
            // exit;
        }
        $data['maincontent'] = $this->load->view('backend/categories_add', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function edit_categories($param2 = '')
    {
        $data = array();
        $data['param2'] = $param2;
        $data['maincontent'] = $this->load->view('backend/categories_edit', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function update_categories($param1 = '')
    {
       //echo 1;
        $data = array();

        $inputelement = array();
        $inputelement['title'] = $this->input->post('title');
        $inputelement['parent_id'] = $this->input->post('parent_id');
        $this->db->where('id', $param1);
        $this->db->update('categories', $inputelement);
        $data['param2'] = $param1;
        $data['status'] = 'Success';
        $this->session->set_flashdata('add_status', "Success");
        redirect(base_url() . 'admin/cetagory/', 'refresh');
    }

    public function categories_del($param1 = '')
    {
        $this->db->where('id', $param1);
        $this->db->delete('categories');
        redirect(base_url() . 'admin/cetagory/', 'refresh');
    }

    public function coverage()
    {
       $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] != NULL) {
            $data = array();
            $data['coverage'] = $this->db->get('coverage')->result_array();
            $data['maincontent'] = $this->load->view('backend/coverage_view_page', $data, TRUE);
            $this->load->view('backend/home', $data);
        } else {
            redirect('notificamos', 'refresh');
        }
    }


    function coverage_information($param1 = '', $param2 = '')
    {
        $admin_id = $this->session->userdata('logged_in');
        if ($admin_id['id'] == NULL)
            redirect('notificamos', 'refresh');
        $data = array();
        if ($param1 == 'create') {
            $inputelement = array();
            $inputelement['title'] = $this->input->post('title');
            $inputelement['address_id'] = $this->input->post('address_id');
            $inputelement['coordinates'] = $this->input->post('coordinates');
            $inputelement['status'] = 1;
            $inputelement['created_at'] = date("Y-m-d h:i:s", time());
            $this->db->insert('coverage', $inputelement);
            $data['status'] = 'Success';
            $this->session->set_flashdata('add_status', "Success");
            //echo '<pre>';
            //	 print_r($inputelement);
            // echo '</pre>';
            // exit;
        }
        $data['maincontent'] = $this->load->view('backend/coverage_add', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function view_coverage($param2 = '')
    {
        $data = array();
        $data['param2'] = $param2;
        $data['maincontent'] = $this->load->view('backend/view_coverage', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function edit_coverage($param2 = '')
    {
        $data = array();
        $data['param2'] = $param2;
        $data['maincontent'] = $this->load->view('backend/edit_coverage', $data, TRUE);
        $this->load->view('backend/home', $data);
    }

    public function update_coverage($param1 = '')
    {
       //echo 1;
        $data = array();
        $inputelement = array();
        $inputelement['title'] = $this->input->post('title');
        $inputelement['address_id'] = $this->input->post('address_id');
        $inputelement['coordinates'] = $this->input->post('coordinates');
        $this->db->where('id', $param1);
        $this->db->update('coverage', $inputelement);
        $data['param2'] = $param1;
        $data['status'] = 'Success';
        $this->session->set_flashdata('add_status', "Success");
        redirect(base_url() . 'admin/coverage/', 'refresh');

    }

//shahin
    public function coverage_del($param1 = '')
    {
        $this->db->where('id', $param1);
        $this->db->delete('coverage');
        redirect(base_url() . 'admin/coverage/', 'refresh');
    }
	
}

?>