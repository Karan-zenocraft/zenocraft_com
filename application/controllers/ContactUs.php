<?php

class ContactUs extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ContactModel');
    }

    public function index()
    {
        $data = $formData = array();

        // If contact request is submitted
        if ($this->input->post('contactSubmit')) {

            // Get the form data
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            $this->form_validation->set_rules('captcha', 'Captcha', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $mailData = array(
                    'name' => $formData['name'],
                    'email' => $formData['email'],
                    'subject' => $formData['subject'],
                    'message' => $formData['message'],
                );
                // Send an email to the site admin
                $send = $this->sendEmail($mailData);

                // Check email sending status
                if ($send) {
                    $this->ContactModel->insert($formData['name'], $formData['email'], $formData['subject'], $formData['message']);
                    // Unset form data
                    $formData = array();

                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => 'Your contact request has been submitted successfully.',
                    );
                } else {
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again.',
                    );
                }
            }
        }

        // Pass POST data to view
        $data['postData'] = $formData;
        $this->load->view('contact-us/contact', $data);
    }

    private function sendEmail($mailData)
    {
        // Load the email library
        $this->load->library('email');

        // Mail config
        $to = 'rutusha1212joshi@gmail.com';
        $from = 'chiefsrsmail@gmail.com';
        $fromName = 'Zenosys';
        $mailSubject = 'Contact Request Submitted by ' . $mailData['name'];

        // Mail content
        $mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>Name: </b>' . $mailData['name'] . '</p>
            <p><b>Email: </b>' . $mailData['email'] . '</p>
            <p><b>Subject: </b>' . $mailData['subject'] . '</p>
            <p><b>Message: </b>' . $mailData['message'] . '</p>
        ';

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'chiefsrsmail@gmail.com';
        $config['smtp_pass'] = 'chiefsrs@123';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = true;

        $this->email->initialize($config);
        $this->email->from($from, $fromName);
        $this->email->to($to);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);

        // Send email & return status
        return $this->email->send() ? true : false;
    }
    public function contact()
    {
        $data = $formData = array();

        // If contact request is submitted
        $data = "";
        if ($this->input->post('contactSubmit')) {

            // Get the form data
            $formData = $this->input->post();
            // Define email data
            $mailData = array(
                'name' => $formData['name'],
                'email' => $formData['email'],
                'subject' => $formData['subject'],
                'message' => $formData['message'],
            );
            // Send an email to the site admin
            $send = $this->sendEmail($mailData);

            // Check email sending status
            if ($send) {
                $this->ContactModel->insert($formData['name'], $formData['email'], $formData['subject'], $formData['message']);
                // Unset form data
                $formData = array();

                $data = "success";
                return $data;
            } else {
                $data = "error";
                return $data;
            }
            //}
        }

    }
    public function validationForm()
    {

        $this->form_validation->set_rules('name', 'Name', 'required');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == false) {

            $errors = validation_errors();

            echo json_encode(['error' => $errors]);

        } else {
            if ($_POST) {

                // Get the form data
                $formData = $this->input->post();
                // Define email data
                $mailData = array(
                    'name' => $formData['name'],
                    'email' => $formData['email'],
                    'subject' => $formData['subject'],
                    'message' => $formData['message'],
                );
                // Send an email to the site admin
                $send = $this->sendEmail($mailData);

                // Check email sending status
                if ($send) {
                    $this->ContactModel->insert($formData['name'], $formData['email'], $formData['subject'], $formData['message']);
                    // Unset form data
                    $formData = array();

                    echo json_encode(['success' => 'Form submitted successfully.']);
                } else {
                    echo json_encode(['error' => 'Something went wrong please try again later']);
                }
                //}
            }

        }

    }

}
