<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hire extends Admin_Controller
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
        $this->load->model('HireModel');

        $hire = $this->HireModel->getHireDetails();
        $this->load->view('admin/hire/index', ['hire' => $hire]);
    }

    public function create()
    {
        $this->load->model('HireModel');
        if ($this->input->post('hireSubmit')) {
            $this->load->model('HireModel');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('rate', 'rate', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                $data = array(
                    'rate' => $formData['rate'],
                    'description' => $formData['description'],
                );
                $udetail = $this->HireModel->addDetails($data);
                if ($udetail) {
                    redirect('admin/Hire');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/hire/create', ["postData" => $postData]);
                }

            }
        }
        $this->load->view('admin/hire/create');

    }

// For particular Record
    public function update($uid)
    {
        $this->load->model('HireModel');
        $pdetail = $this->HireModel->getDetailsById($uid);
        if ($this->input->post('hireSubmit')) {
            $this->load->model('HireModel');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('rate', 'rate', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                $data = array(
                    'rate' => $formData['rate'],
                    'description' => $formData['description'],
                );

                $udetail = $this->HireModel->updateHireDetail($data, $uid);
                if ($udetail) {
                    redirect('admin/Hire');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/hire/update', $postData);
                }

            }
        }
        $this->load->view('admin/hire/update', ['hire' => $pdetail]);
    }

    public function delete($uid)
    {
        $this->load->model('HireModel');
        $this->HireModel->delete($uid);
        $this->session->set_flashdata('success', 'Rate deleted successfully.');
        redirect('admin/Hire');
    }

}
