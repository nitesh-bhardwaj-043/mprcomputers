<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Home_mdl extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function dealership()
    {
        $f_name = $this->input->post('f_name');
        $p_name = $this->input->post('p_name');
        $address = $this->input->post('address');
        $pincode = $this->input->post('pincode');
        $p_no = $this->input->post('p_no');
        $pan = $this->input->post('pan');
        $gst = $this->input->post('gst');

        $inserted = $this->db->insert('dealership', array(
            "f_name" => $f_name,
            "p_name" => $p_name,
            "address" => $address,
            "pincode" => $pincode,
            "p_no" => $p_no,
            "pan" => $pan,
            "gst" => $gst
        ));

        if ($inserted)
            return true;
    }
}
