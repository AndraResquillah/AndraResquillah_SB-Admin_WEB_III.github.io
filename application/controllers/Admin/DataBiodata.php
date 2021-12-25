
<?php

class DataBiodata extends CI_Controller{
    

    public function index()
    {
        $data['title'] = "Data Biodata";
        $data['biodata'] = 
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataBiodata');
        $this->load->view('templates_admin/footer');
    }
}

    ?>