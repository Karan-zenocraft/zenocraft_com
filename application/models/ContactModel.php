<?php
class ContactModel extends CI_Model
{
    public function insert($name, $email, $subject, $message)
    {
        $query = "insert into contact_us values('','$name','$email','$subject','$message')";
        $this->db->query($query);
    }
}
