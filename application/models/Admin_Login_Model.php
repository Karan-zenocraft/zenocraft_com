<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_Login_Model extends CI_Model
{

    public function validatelogin($username, $password)
    {

        $query = $this->db->where(['userName' => $username, 'password' => $password]);
        $account = $this->db->get('tbladmin')->row();
        if ($account != null) {

            return $account->id;
        }
        return null;
    }
}
