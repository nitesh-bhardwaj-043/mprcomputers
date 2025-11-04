<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    // public function bookings()
    // {
    //     $name = $this->input->post('name');
    //     $email = $this->input->post('email');
    //     $phone = $this->input->post('phone');
    //     $mfrom = $this->input->post('mfrom');
    //     $mto = $this->input->post('mto');
    //     $msg = $this->input->post('message');

    //     $inserted = $this->db->insert('bookings', array(
    //         "name" => $name,
    //         "email" => $email,
    //         "phone" => $phone,
    //         "mfrom" => $mfrom,
    //         "mto" => $mto,
    //         "msg" => $msg
    //     ));


    //     if ($inserted)
    //         return true;
    // }

   
}
