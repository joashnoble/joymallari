<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_medical_record extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_medical_record_model');
    }

    public function index() {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        /*$data['todo_list']=$this->Patient_medical_record_model->get_list(array('todo_list.is_deleted'=>FALSE));*/
        $data['_title']='Todo';

       /* $this->load->view('user_view', $data);*/
    }

    function transaction($txn = null) {

        switch($txn){
            case 'list':
                $patient_medical_certificate_id=$this->input->post('patient_medical_certificate_id',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $response['data']=$this->Patient_medical_record_model->get_list(
                    array('patient_medical_certificate.ref_patient_id'=>$ref_patient_id,'patient_medical_certificate.is_deleted'=>FALSE),
                    'patient_medical_certificate.*,
                    (CASE
                        WHEN DATE_FORMAT(medical_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(medical_date, "%m/%d/%Y")
                    END) as medical_date'
                    );
                echo json_encode($response);
                break;
/*
            case 'create':
                $m_todo=$this->Patient_medical_record_model;
                $m_todo->todo_content=$this->input->post('todo_content',TRUE);
                $m_todo->user_id = $this->session->user_id;
                $m_todo->save();

                $todo_list_id=$m_todo->last_insert_id();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Todo Checklist successfully created.';
                $response['row_added']=$m_todo->get_list($todo_list_id);
                echo json_encode($response);

                break;*/
            //****************************************************************************************************************

            //****************************************************************************************************************
            case 'create':
                $m_medical_record=$this->Patient_medical_record_model;

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $date = $this->input->post('medical_date',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $medical_date = date("Y-m-d",strtotime($date));


                $m_medical_record->ref_patient_id=$ref_patient_id;
                $m_medical_record->medical_date=$medical_date;
                $m_medical_record->medical_diagnostics=$this->input->post('medical_diagnostics',TRUE);
                $m_medical_record->created_by = $this->session->user_id;
                $m_medical_record->save();
                $patient_medical_certificate_id = $m_medical_record->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $ref_patient_id.''.$patient_medical_certificate_id); //5069xxx
                $medical_certificate_code = 'MC-'.$temp .'-'. $today = date("Y");
                $m_medical_record->medical_certificate_code = $medical_certificate_code;
                $m_medical_record->modify($patient_medical_certificate_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Medical Certficate successfully created.';
                $response['row_added'] = $this->Patient_medical_record_model->get_list($patient_medical_certificate_id,
                    'patient_medical_certificate.*, (CASE
                        WHEN DATE_FORMAT(medical_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(medical_date, "%m/%d/%Y")
                    END) as medical_date');
                echo json_encode($response);
                break;

            case 'update':
                $m_medical_record=$this->Patient_medical_record_model;
                $patient_medical_certificate_id=$this->input->post('patient_medical_certificate_id',TRUE);
                $date=$this->input->post('medical_date',TRUE);
                $medical_date = date("Y-m-d",strtotime($date));


                $m_medical_record->medical_date=$medical_date;
                $m_medical_record->medical_diagnostics=$this->input->post('medical_diagnostics',TRUE);
                $m_medical_record->modified_by = $this->session->user_id;

                if($m_medical_record->modify($patient_medical_certificate_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Medical Record successfully updated.';
                    $response['row_updated'] = $m_medical_record->get_list($patient_medical_certificate_id,
                        'patient_medical_certificate.*, (CASE
                            WHEN DATE_FORMAT(medical_date, "%Y") <= "1970"
                            THEN ""
                            ELSE DATE_FORMAT(medical_date, "%m/%d/%Y")
                        END) as medical_date');

                    echo json_encode($response);
                }
                break;

            case 'delete':
                $m_medical_record=$this->Patient_medical_record_model;
                $patient_medical_certificate_id=$this->input->post('patient_medical_certificate_id',TRUE);
                    
                    $m_medical_record->is_deleted=1;
                    if($m_medical_record ->modify($patient_medical_certificate_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Medical Record successfully deleted.';

                        echo json_encode($response);
                    }

                break;     
        }
    }
}
