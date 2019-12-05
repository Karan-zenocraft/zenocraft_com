<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Careers extends Admin_Controller
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
        $this->load->model('CareersModel');

        $career = $this->CareersModel->getCareerDetails();
        $this->load->view('admin/careers/index', ['career' => $career]);
    }

    public function create()
    {
        if ($this->input->post('careerSubmit')) {
            $this->load->model('CareersModel');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('job_id', 'job_id', 'required');
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('location', 'location', 'required');
            $this->form_validation->set_rules('type', 'type', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $data = array(
                    'title' => $formData['title'],
                    'job_id' => $formData['job_id'],
                    'description' => $formData['description'],
                    'location' => $formData['location'],
                    'type' => $formData['type'],
                );
                $udetail = $this->CareersModel->addDetails($data);
                if ($udetail) {
                    redirect('admin/Careers');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/careers/create', ["postData" => $postData, 'categoryList' => $categoryList]);
                }

            }
        }
        $this->load->view('admin/careers/create');

    }

// For particular Record
    public function update($uid)
    {
        $this->load->model('CareersModel');
        $pdetail = $this->CareersModel->getDetailsById($uid);
        if ($this->input->post('careerSubmit')) {
            $this->load->model('CareersModel');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('job_id', 'job_id', 'required');
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('location', 'location', 'required');
            $this->form_validation->set_rules('type', 'type', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {
                $data = array(
                    'title' => $formData['title'],
                    'job_id' => $formData['job_id'],
                    'description' => $formData['description'],
                    'location' => $formData['location'],
                    'type' => $formData['type'],
                );
                $udetail = $this->CareersModel->updateCareerDetail($data, $uid);
                if ($udetail) {
                    redirect('admin/Careers');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/careers/update', $postData);
                }

            }
        }
        $this->load->view('admin/careers/update', ['careers' => $pdetail]);
    }

    public function delete($uid)
    {
        $this->load->model('CareersModel');
        $this->CareersModel->delete($uid);
        $this->session->set_flashdata('success', 'C deleted successfully.');
        redirect('admin/Careers');
    }

}
