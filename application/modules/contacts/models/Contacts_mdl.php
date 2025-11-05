<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function complaint()
    {
        $c_name = $this->input->post('c_name');
        $f_name = $this->input->post('f_name');
        $product = $this->input->post('product');
        $qty = $this->input->post('qty');
        $c_no = $this->input->post('c_no');
        $c_date = $this->input->post('c_date');
        $city = $this->input->post('city');

        $inserted = $this->db->insert('complaints', array(
            "c_name" => $c_name,
            "f_name" => $f_name,
            "product" => $product,
            "qty" => $qty,
            "c_no" => $c_no,
            "city" => $city,
            "c_date" => $c_date
        ));


        if ($inserted)
            return true;
    }

   
}
