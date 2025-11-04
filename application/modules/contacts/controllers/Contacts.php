<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        //  $this->load->database();
    }
    function index()
    {
        $data['title'] = "Contact Us | Get in Touch with Packers & Movers";
        $data['description'] = "Reach out to us for queries, bookings, or support. Our team is ready to assist you with stress-free relocation solutions.";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }
    function complaint()
    {
        $data['title'] = "Contact Us | Get in Touch with Packers & Movers";
        $data['description'] = "Reach out to us for queries, bookings, or support. Our team is ready to assist you with stress-free relocation solutions.";
        $data['module'] = "contacts";
        $data['view_file'] = "complaint";
        echo Modules::run('template/layout2', $data);
    }


    // function complaint()
    // {
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
    //     if ($this->form_validation->run() == true) {
    //         $this->load->model('contacts_mdl');
    //         $check = $this->contacts_mdl->complaint();
    //         if ($check == true) {
    //             echo "1";
    //         }
    //     } else {
    //         echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
    //     }
    // }
}
