<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends Admin_Controller
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
        $this->load->model('Category_Model');
        $category = $this->Category_Model->getCategoryDetails();
        $this->load->view('admin/category/index', ['category' => $category]);
    }

    public function create()
    {
        if ($this->input->post('categorySubmit')) {
            $this->load->model('Category_Model');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('title', 'title', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $data = array(
                    'title' => $formData['title'],
                );
                $udetail = $this->Category_Model->addDetails($data);
                if ($udetail) {
                    redirect('admin/Category');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/category/create', $postData);
                }

            }
        }
        $this->load->view('admin/category/create');

    }

// For particular Record
    public function update($uid)
    {
        $this->load->model('Category_Model');
        $pdetail = $this->Category_Model->getDetailsById($uid);
        if ($this->input->post('categorySubmit')) {
            $this->load->model('Category_Model');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('title', 'title', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $data = array(
                    'title' => $formData['title'],
                );
                $udetail = $this->Category_Model->updatecategoryDetail($data, $uid);
                if ($udetail) {
                    redirect('admin/Category');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/category/update', $postData);
                }

            }
        }
        $this->load->view('admin/category/update', ['category' => $pdetail]);
    }

    public function delete($uid)
    {
        $this->load->model('Category_Model');
        $this->Category_Model->delete($uid);
        $this->session->set_flashdata('success', 'Category deleted successfully.');
        redirect('admin/Category');
    }

}
