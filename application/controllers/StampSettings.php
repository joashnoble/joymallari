<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StampSettings extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Users_model');
        $this->load->model('Stamp_settings_model');
        $this->load->model('Header_settings_model');
    }

    public function index() {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data_1['active'] = 8;
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation',$data_1,TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);

        $data['stamp']=$this->Stamp_settings_model->get_list()[0];
        $data['header']=$this->Header_settings_model->get_list()[0];
        $data['_title']='General Information Settings';

        $this->load->view('stamp_settings_view', $data);
    }

    function transaction($txn = null,$filter_value = null) {

        switch($txn){
            case 'list':
                $m_header=$this->Header_settings_model;
                $response['data'] = $m_header->get_list()[0];
                echo json_encode($response);
                break;
           
            case 'update':
                $m_stamp=$this->Stamp_settings_model;
                $m_header=$this->Header_settings_model;

                $stamp_id=$this->input->post('stamp_id',TRUE);
                $header_id=$this->input->post('header_id',TRUE);

                // Update Stamp
                $m_stamp->stamp_title = $this->input->post('stamp_title', TRUE);
                $m_stamp->stamp_info = $this->input->post('stamp_info', TRUE);
                $m_stamp->prc_lic_no = $this->input->post('prc_lic_no', TRUE);
                $m_stamp->phic_accre_no = $this->input->post('phic_accre_no', TRUE);
                $m_stamp->ptr_no = $this->input->post('ptr_no', TRUE);
                $m_stamp->s2_no = $this->input->post('s2_no', TRUE);
                $m_stamp->is_show_print = intval($this->input->post('is_show_print', TRUE));
                $m_stamp->modify($stamp_id);

                // Update Header

                $m_header->header_title = $this->input->post('header_title', TRUE);
                $m_header->header_info = $this->input->post('header_info', TRUE);
                $m_header->logo_1_path = $this->input->post('logo_1_path', TRUE);
                $m_header->logo_2_path = $this->input->post('logo_2_path', TRUE);
                $m_header->logo_1_is_show = intval($this->input->post('logo_1_is_show', TRUE));
                $m_header->logo_2_is_show = intval($this->input->post('logo_2_is_show', TRUE));
                $m_header->checkbox_report = intval($this->input->post('checkbox_report', TRUE));
                $m_header->modify($header_id);


                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='General Settings information successfully updated.';
                $response['row_updated'] = $this->Stamp_settings_model->get_list($stamp_id);
                echo json_encode($response);

                break;
          
            case 'upload':
                $allowed = array('png', 'jpg', 'jpeg','bmp');

                $data=array();
                $files=array();
                $directory='assets/img/logo/';

                foreach($_FILES as $file){

                    $server_file_name=uniqid('');
                    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
                    $file_path=$directory.$server_file_name.'.'.$extension;
                    $orig_file_name=$file['name'];

                    if(!in_array(strtolower($extension), $allowed)){
                        $response['title']='Invalid!';
                        $response['stat']='error';
                        $response['msg']='Image is invalid. Please select a valid photo!';
                        die(json_encode($response));
                    }

                    if(move_uploaded_file($file['tmp_name'],$file_path)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Image successfully uploaded.';
                        $response['photo_path']=$file_path;
                        echo json_encode($response);
                    }
                }
                
                break;

        }
    }
}
