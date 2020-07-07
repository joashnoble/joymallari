<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Patient_billing_model');
        $this->load->model('Patient_Info_model');
        $this->validate_session();

    }


    /*public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
       
        $this->load->view('patient_prescription_view',$data);

    }
*/
    
    function getlayout($txn = null) {
        switch ($txn) {
            case 'css':
                echo "";
                break;     
        }

    }


}
