<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
class Home extends MX_Controller
{
    function error()
    {
        $data['title'] = "Page Not Found | Trusted Electronics Distributor Network";
        $data['description'] = "Oops! The page you’re looking for doesn’t exist. Go back to our distributor network and explore leading electronics brands, product installations, and customer support options.";
        $data['keywords'] = "electronics distributor error, 404 page, distributor not found, electronics supply network, home appliances distributor support";

        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }

    function index()
    {
        $data['title'] = "India’s Leading Electronics Distributor | Multi-Brand Product Supply, Demo & Installation Support";
        $data['description'] = "We are a trusted multi-brand electronics distributor in India, connecting top brands with customers. Explore a wide range of LED TVs, home appliances, and smart products. Get demos, installations, and after-sales support—all in one place.";
        $data['keywords'] = "electronics distributor India, LED TV wholesaler, home appliance distributor, multi-brand electronics supplier, demo and installation service, electronics dealer network, after-sales support India, B2B and B2C electronics supply";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    function dealership()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('f_name', 'Firm Name', 'required|trim');
        $this->form_validation->set_rules('p_name', 'Proprietor / Partnership', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim');
        $this->form_validation->set_rules('p_no', 'Mobile Number', 'required|trim');
        $this->form_validation->set_rules('pan', 'Pan Number', 'trim');
        $this->form_validation->set_rules('gst', 'Gst Number', 'trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('home_mdl');
            $check = $this->home_mdl->complaint();
            if ($check == true) {
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger' style='color:white;'>" . validation_errors() . "</div>";
        }
    }

    public function oldurl_to_newurl()
    {
        // Example: Redirect old URLs to new ones (SEO-friendly redirection)
        // if (@$this->uri->segment(1) == "old-electronics-page") {
        //     redirect("electronics-distributor", 'location', 301);
        // }
    }
}
?>
