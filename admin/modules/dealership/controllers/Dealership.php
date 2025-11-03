<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Dealership extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_dealership');
    }

    function index()
    {
        $this->load->view('data');
    }

    function view_data()
    {
        $where = null;
        if (isset($_GET['d_id']))
            $where['d_id'] = $_GET['d_id'];

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_dealership->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['d_id']) && $_GET['d_id']) {

            $where['d_id'] = $_GET['d_id'];
            echo $this->mdl_dealership->delete_data($where);
        } else
            echo "Not Deleted";
    }


}