<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_lab_diagnostics extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_lab_diagnostics_model');
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
                $patient_lab_report_id=$this->input->post('patient_lab_report_id',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $response['data']=$this->Patient_lab_diagnostics_model->get_list(
                    array('patient_lab_report.ref_patient_id'=>$ref_patient_id,'patient_lab_report.is_deleted'=>FALSE),
                    'patient_lab_report.*'
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
                $m_labdiagnostics=$this->Patient_lab_diagnostics_model;
                $m_labdiagnostics->ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                
                $date = $this->input->post('lab_report_date',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $lab_report_date = date("Y-m-d",strtotime($date));

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                foreach($_POST as $key => $val)  
                {  
                    $m_labdiagnostics->$key=$this->input->post($key);
                }


                $m_labdiagnostics->lab_report_date=$lab_report_date;
                $m_labdiagnostics->created_by = $this->session->user_id;
                $m_labdiagnostics->save();

                $patient_lab_report_id = $m_labdiagnostics->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $ref_patient_id.''.$patient_lab_report_id); //5069xxx
                $diagnostic_code = 'LAB-'.$temp .'-'. $today = date("Y");
                $m_labdiagnostics->diagnostic_code = $diagnostic_code;
                $m_labdiagnostics->modify($patient_lab_report_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Lab Diagnostics successfully created.';
                $response['row_added'] = $this->Patient_lab_diagnostics_model->get_list($patient_lab_report_id,
                    'patient_lab_report.*'
                    );
                echo json_encode($response);
                break;

            case 'update':
                $m_labdiagnostics=$this->Patient_lab_diagnostics_model;
                $patient_lab_report_id=$this->input->post('patient_lab_report_id',TRUE);
                
                $date = $this->input->post('lab_report_date',TRUE);
                $lab_report_date = date("Y-m-d",strtotime($date));

                foreach($_POST as $key => $val)  
                {  
                    $m_labdiagnostics->$key=$this->input->post($key);
                }

                $m_labdiagnostics->lab_report_date=$lab_report_date;
                $m_labdiagnostics->modified_by = $this->session->user_id;
                $m_labdiagnostics->modify($patient_lab_report_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Lab Diagnostics successfully updated.';
                $response['row_updated'] = $this->Patient_lab_diagnostics_model->get_list($patient_lab_report_id,
                    'patient_lab_report.*'
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_labdiagnostics=$this->Patient_lab_diagnostics_model;
                $patient_lab_report_id=$this->input->post('patient_lab_report_id',TRUE);
                    
                    $m_labdiagnostics->is_deleted=1;
                    if($m_labdiagnostics ->modify($patient_lab_report_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Lab Diagnostics successfully deleted.';

                        echo json_encode($response);
                    }

                break;     


        }


    }
}
