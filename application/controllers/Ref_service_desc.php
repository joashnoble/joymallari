<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref_service_desc extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Ref_service_desc_model');


    }


    public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title']='Service Description Reference';
        $this->load->view('ref_service_desc_view',$data);

    }

    
    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->Ref_service_desc_model->get_list(
                    array('ref_service_desc.is_deleted'=>FALSE),
                    'ref_service_desc.*'
                       /*array(
                            array('Service Description_prescription','Service Description_prescription.Service Description_info_id=Service Description_prescription.Service Description_info_id','left'),
                        )*/
                    );
                echo json_encode($response);
                break;
            

                case 'create':
                $m_ref_service_desc = $this->Ref_service_desc_model;
                /*$date = $this->input->post('date', TRUE);*/
                date_default_timezone_set("Asia/Manila");
                $date_created = date("Y-m-d");
                

                $m_ref_service_desc->service_desc = $this->input->post('service_desc', TRUE);
                $m_ref_service_desc->remarks = $this->input->post('remarks', TRUE);
                $m_ref_service_desc->date_created = $date_created;
                $m_ref_service_desc->created_by = $this->session->user_id;

                
                $m_ref_service_desc->save();

                $ref_service_desc_id = $m_ref_service_desc->last_insert_id();
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Service Description Reference Successfully Created.';
                $response['row_added'] = $this->Ref_service_desc_model->get_list($ref_service_desc_id,
                    'ref_service_desc.*'
                    );
                echo json_encode($response);

                
                break; 

                case 'delete':
                    $m_ref_service_desc = $this->Ref_service_desc_model;

                    $ref_service_desc_id = $this->input->post('ref_service_desc_id', TRUE);
                    
                    $m_ref_service_desc->is_deleted=1;
                    if($m_ref_service_desc ->modify($ref_service_desc_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Service Description Reference Successfully deleted.';

                        echo json_encode($response);
                }

                break;

                case 'update':
                $m_ref_service_desc = $this->Ref_service_desc_model;
                date_default_timezone_set("Asia/Manila");
                $date_created = date("Y-m-d");
                $ref_service_desc_id = $this->input->post('ref_service_desc_id', TRUE);
                $m_ref_service_desc->service_desc = $this->input->post('service_desc', TRUE);
                $m_ref_service_desc->remarks = $this->input->post('remarks', TRUE);
                $m_ref_service_desc->date_modified = $date_created;
                $m_ref_service_desc->modified_by = $this->session->user_id;
                $m_ref_service_desc->modify($ref_service_desc_id);
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Service Description Reference Successfully Updated.';
                $response['row_updated'] = $this->Ref_service_desc_model->get_list($ref_service_desc_id,
                    'ref_service_desc.*'
                    );

                echo json_encode($response);

                break;     
        }

    }


}
