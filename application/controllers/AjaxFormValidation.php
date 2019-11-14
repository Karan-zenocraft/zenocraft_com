<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AjaxFormValidation extends CI_Controller
{

    /**

     * Get All Data from this method.

     *

     * @return Response

     */

    public function __construct()
    {

        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('ContactModel');

    }

    /**

     * Create from display on this method.

     *

     * @return Response

     */

    public function index()
    {

        $this->load->view('ajax_form_validation');

    }

    /**

     * Validate and store the form data.

     *

     * @return Response

     */

    public function validationForm()
    {

        $this->form_validation->set_rules('name', 'Name', 'required');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'required');
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

    public function sendEmail($mailData)
    {
        // Load the email library
        $this->load->library('email');

        // Mail config
        $to = 'inquiry@zenosys.com';
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
        $config['smtp_pass'] = 'Zenocraft@123';
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

}
