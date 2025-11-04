<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    function index()
    {
        $data['title'] = "Contact Us | Electronics Distributor & Customer Support Center";
        $data['description'] = "Get in touch with our team for bulk orders, product inquiries, service support, or dealership opportunities. We're here to connect you with top electronics brands and ensure quick assistance.";
        $data['keywords'] = "electronics distributor contact, customer support, product inquiry, bulk order assistance, electronics service center, B2B electronics contact India";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }

    function complaint()
    {
        $data['title'] = "Register a Complaint | Product Service & Warranty Support";
        $data['description'] = "Facing an issue with your product? Register your complaint here for fast and reliable service support. Our team will resolve your concern with authorized brand partners.";
        $data['keywords'] = "electronics complaint form, warranty support, product service complaint, customer care electronics, after-sales service India, distributor complaint registration";
        $data['module'] = "contacts";
        $data['view_file'] = "complaint";
        echo Modules::run('template/layout2', $data);
    }

    // Example backend process for complaint form submission
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
?>
