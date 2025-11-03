<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Complaints extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_complaints');
    }

    function index()
    {
        $this->load->view('data');
    }

    function save_data()
    {
        // print_r($_POST);
        // die();
        $this->load->library('form_validation');

        // Validation rules
        $this->form_validation->set_rules("c_name", "Name", "required|trim");
        $this->form_validation->set_rules("f_name", "Firm Name", "required|trim");
        $this->form_validation->set_rules("city", "City", "required|trim");
        $this->form_validation->set_rules("product", "Product", "required|trim");
        $this->form_validation->set_rules("qty", "Quantity", "required|trim");
        $this->form_validation->set_rules("c_no", "Complaint Number", "required|trim");
        $this->form_validation->set_rules("c_date", "Date", "required|trim");

        if ($this->form_validation->run() == TRUE) {
            $data['c_name'] = trim($_POST['c_name']);
            $data['f_name'] = trim($_POST['f_name']);
            $data['city'] = trim($_POST['city']);
            $data['product'] = trim($_POST['product']);
            $data['qty'] = trim($_POST['qty']);
            $data['c_no'] = trim($_POST['c_no']);  
            $data['c_date'] = trim($_POST['c_date']);

            // Check for update or insert
            if (!empty($_POST['c_id'])) {
                $where['c_id'] = $_POST['c_id'];
                echo $this->mdl_complaints->update_data($where, $data);
            } else {
                echo $this->mdl_complaints->add_data($data);
            }
        } else {
            echo validation_errors();
        }
    }


    function view_data()
    {
        $where = null;
        if (isset($_GET['c_id']))
            $where['c_id'] = $_GET['c_id'];

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_complaints->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['c_id']) && $_GET['c_id']) {

            $where['c_id'] = $_GET['c_id'];
            echo $this->mdl_complaints->delete_data($where);
        } else
            echo "Not Deleted";
    }


}