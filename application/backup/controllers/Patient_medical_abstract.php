<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_medical_abstract extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_medical_abstract_model');
    }

    public function index() {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        /*$data['todo_list']=$this->Patient_medical_record_model->get_list(array('todo_list.is_deleted'=>FALSE));*/
        $data['_title']='Medical Abstract';

       /* $this->load->view('user_view', $data);*/
    }

    function transaction($txn = null) {

        switch($txn){
            case 'list':
                $patient_medical_abstract_id=$this->input->post('patient_medical_abstract_id',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $response['data']=$this->Patient_medical_abstract_model->get_list(
                    array('patient_medical_abstract.ref_patient_id'=>$ref_patient_id),
                    'patient_medical_abstract.*'
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
                $m_medabstract=$this->Patient_medical_abstract_model;

                foreach($_POST as $key => $val)  
                {  
                    $m_medabstract->$key=$this->input->post($key);
                }

                $m_medabstract->created_by = $this->session->user_id;
                $m_medabstract->save();
                $patient_medical_abstract_id = $m_medabstract->last_insert_id();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Patient Medical Abstract successfully created.';
                $response['row_added'] = $this->Patient_medical_abstract_model->get_list($patient_medical_abstract_id,
                    'patient_medical_abstract.*'
                    );
                echo json_encode($response);
                break;

            case 'update':
                $m_medabstract=$this->Patient_medical_abstract_model;
                $patient_medical_abstract_id=$this->input->post('patient_medical_abstract_id',TRUE);
                foreach($_POST as $key => $val)  
                {  
                    if($key=="patient_medical_abstract_id"){
                        /*echo "patient";*/
                    }
                    else{
                        $m_medabstract->$key=$this->input->post($key);
                    }
                }

                $m_medabstract->modified_by = $this->session->user_id;
                $m_medabstract->modify($patient_medical_abstract_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Patient Medical Abstract successfully updated.';
                $response['row_added'] = $this->Patient_medical_abstract_model->get_list($patient_medical_abstract_id,
                    'patient_medical_abstract.*'
                    );
                echo json_encode($response);

                break;

            case 'delete':
                $m_todo=$this->Patient_medical_record_model;
                $todo_list_id=$this->input->post('todo_list_id',TRUE);

                $m_todo->is_deleted=1;
                if($m_todo->modify($todo_list_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Todo Checklist successfully deleted.';
                    echo json_encode($response);
                }
                break;


        }


    }
}
