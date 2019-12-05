<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Portfolio extends Admin_Controller
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
        $this->load->model('Portfolio_Model');

        $portfolio = $this->Portfolio_Model->getPortfolioDetails();
        $this->load->view('admin/portfolio/index', ['portfolio' => $portfolio]);
    }

    public function create()
    {
        $this->load->model('Category_Model');
        $categoryList = $this->Category_Model->get_category_list();
        if ($this->input->post('portfolioSubmit')) {
            $this->load->model('Portfolio_Model');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('category', 'category', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            $this->form_validation->set_rules('skill', 'skill', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                if ($_FILES) {
                    $ext = explode('.', $_FILES['image']['name']); // Explode the string
                    $filename = $_FILES['image']['name'];
                    $newfilename = md5(date('Y-m-d H:i:s:u')) . "_" . $filename;
                    if (!file_exists(FCPATH . "assets/uploads/" . $newfilename)) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], FCPATH . "assets/uploads/" . $newfilename);
                    }
                }
                $data = array(
                    'title' => $formData['title'],
                    'category' => $formData['category'],
                    'description' => $formData['description'],
                    'image' => $newfilename,
                    'skill' => $formData['skill'],
                );
                $udetail = $this->Portfolio_Model->addDetails($data);
                if ($udetail) {
                    redirect('admin/Portfolio');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/portfolio/create', ["postData" => $postData, 'categoryList' => $categoryList]);
                }

            }
        }
        $this->load->view('admin/portfolio/create', ['categoryList' => $categoryList]);

    }

// For particular Record
    public function update($uid)
    {
        $this->load->model('Portfolio_Model');
        $this->load->model('Category_Model');
        $categoryList = $this->Category_Model->get_category_list();
        $pdetail = $this->Portfolio_Model->getDetailsById($uid);
        $oldfile = $pdetail->image;
        if ($this->input->post('portfolioSubmit')) {
            $this->load->model('Portfolio_Model');
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('category', 'category', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            $this->form_validation->set_rules('skill', 'skill', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                if ($_FILES) {
                    $ext = explode('.', $_FILES['image']['name']); // Explode the string
                    $filename = $_FILES['image']['name'];
                    $newfilename = md5(date('Y-m-d H:i:s:u')) . "_" . $filename;
                    if (!file_exists(FCPATH . "assets/uploads/" . $newfilename)) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], FCPATH . "assets/uploads/" . $newfilename);
                        if (file_exists(FCPATH . "assets/uploads/" . $oldfile)) {
                            unlink(FCPATH . "assets/uploads/" . $oldfile);
                        }
                    }
                }
                $data = array(
                    'title' => $formData['title'],
                    'category' => $formData['category'],
                    'description' => $formData['description'],
                    'image' => $newfilename,
                    'skill' => $formData['skill'],
                );
                $udetail = $this->Portfolio_Model->updatePortfolioDetail($data, $uid);
                if ($udetail) {
                    redirect('admin/Portfolio');
                } else {
                    $postData = $formData;
                    $this->load->view('admin/portfolio/update', $postData);
                }

            }
        }
        $this->load->view('admin/portfolio/update', ['portfolio' => $pdetail, 'categoryList' => $categoryList]);
    }

    public function delete($uid)
    {
        $this->load->model('Portfolio_Model');
        $this->Portfolio_Model->delete($uid);
        $this->session->set_flashdata('success', 'Portfolio deleted successfully.');
        redirect('admin/Portfolio');
    }

}
