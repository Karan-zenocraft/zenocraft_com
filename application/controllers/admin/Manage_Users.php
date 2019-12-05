<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Manage_Users extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adid')) {
            redirect('admin/login');
        }

    }

    public function index()
    {
        $this->load->model('ManageUsers_Model');
        $user = $this->ManageUsers_Model->getusersdetails();
        $this->load->view('admin/manage_users', ['userdetails' => $user]);
    }

    public function adduserdetail()
    {
        if ($this->input->post('userSubmit')) {
            $this->load->model('ManageUsers_Model');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('firstName', 'firstName', 'required');
            $this->form_validation->set_rules('lastName', 'lastName', 'required');
            $this->form_validation->set_rules('emailId', 'emailId', 'required|valid_email');
            $this->form_validation->set_rules('userPassword', 'userPassword', 'required');
            $this->form_validation->set_rules('mobileNumber', 'mobileNumber', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $data = array(
                    'firstName' => $formData['firstName'],
                    'lastName' => $formData['lastName'],
                    'emailId' => $formData['emailId'],
                    'userPassword' => $formData['userPassword'],
                    'mobileNumber' => $formData['mobileNumber'],
                    'isActive' => 1,

                );
                $udetail = $this->ManageUsers_Model->adduserdetail($data);
                if ($udetail) {
                    redirect('admin/Manage_Users');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/adduserdetail', $postData);
                }

            }
        }
        $this->load->view('admin/adduserdetail');

    }

// For particular Record
    public function getuserdetail($uid)
    {
        $this->load->model('ManageUsers_Model');
        $udetail = $this->ManageUsers_Model->getuserdetail($uid);
        if ($this->input->post('userSubmit')) {
            $this->load->model('ManageUsers_Model');
            $formData = $this->input->post();
            // Form field validation rules
            $this->form_validation->set_rules('firstName', 'firstName', 'required');
            $this->form_validation->set_rules('lastName', 'lastName', 'required');
            $this->form_validation->set_rules('emailId', 'emailId', 'required|valid_email');
            $this->form_validation->set_rules('mobileNumber', 'mobileNumber', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $data = array(
                    'firstName' => $formData['firstName'],
                    'lastName' => $formData['lastName'],
                    'emailId' => $formData['emailId'],
                    'mobileNumber' => $formData['mobileNumber'],
                    'isActive' => 1,

                );
                $udetail = $this->ManageUsers_Model->updateuserdetail($data, $uid);
                if ($udetail) {
                    redirect('admin/Manage_Users');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/getuserdetails', ['ud' => $udetail, 'postData' => $postData]);
                }

            }
        }
        $this->load->view('admin/getuserdetails', ['ud' => $udetail]);
    }

    public function deleteuser($uid)
    {
        $this->load->model('ManageUsers_Model');
        $this->ManageUsers_Model->deleteuser($uid);
        $this->session->set_flashdata('success', 'User data deleted');
        redirect('admin/Manage_Users');
    }

}
