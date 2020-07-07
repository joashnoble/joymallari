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
                    array('patient_lab_report.ref_patient_id'=>$ref_patient_id),
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
                $lab_report_date = date("Y-m-d",strtotime($date));
                $m_labdiagnostics->lab_report_date=$lab_report_date;
                $m_labdiagnostics->hm_cbc=$this->input->post('hm_cbc',TRUE);
                $m_labdiagnostics->hm_ph_bsmear=$this->input->post('hm_ph_bsmear',TRUE);
                $m_labdiagnostics->chem_bun=$this->input->post('chem_bun',TRUE);
                $m_labdiagnostics->chem_creatinine=$this->input->post('chem_creatinine',TRUE);
                $m_labdiagnostics->chem_na=$this->input->post('chem_na',TRUE);
                $m_labdiagnostics->chem_k=$this->input->post('chem_k',TRUE);
                $m_labdiagnostics->chem_fbs=$this->input->post('chem_fbs',TRUE);
                $m_labdiagnostics->chem_ion_calc=$this->input->post('chem_ion_calc',TRUE);
                $m_labdiagnostics->chem_phosporus=$this->input->post('chem_phosporus',TRUE);
                $m_labdiagnostics->chem_albumin=$this->input->post('chem_albumin',TRUE);
                $m_labdiagnostics->chem_uricacid=$this->input->post('chem_uricacid',TRUE);
                $m_labdiagnostics->chem_lipidprofile=$this->input->post('chem_lipidprofile',TRUE);
                $m_labdiagnostics->chem_sgpt=$this->input->post('chem_sgpt',TRUE);
                $m_labdiagnostics->chem_specify=$this->input->post('chem_specify',TRUE);
                $m_labdiagnostics->imag_12lecg=$this->input->post('imag_12lecg',TRUE);
                $m_labdiagnostics->imag_cxrpa=$this->input->post('imag_cxrpa',TRUE);
                $m_labdiagnostics->imag_kubxray=$this->input->post('imag_kubxray',TRUE);
                $m_labdiagnostics->imag_ctstronogram=$this->input->post('imag_ctstronogram',TRUE);
                $m_labdiagnostics->imag_kubultrasound=$this->input->post('imag_kubultrasound',TRUE);
                $m_labdiagnostics->imag_prosultra=$this->input->post('imag_prosultra',TRUE);
                $m_labdiagnostics->imag_abdomen=$this->input->post('imag_abdomen',TRUE);
                $m_labdiagnostics->imag_ct_angiography=$this->input->post('imag_ct_angiography',TRUE);
                $m_labdiagnostics->imag_renal_duplex=$this->input->post('imag_renal_duplex',TRUE);
                $m_labdiagnostics->renal_gfr=$this->input->post('renal_gfr',TRUE);
                $m_labdiagnostics->urine_routine_analysis=$this->input->post('urine_routine_analysis',TRUE);
                $m_labdiagnostics->urine_rbc_morph=$this->input->post('urine_rbc_morph',TRUE);
                $m_labdiagnostics->urine_random=$this->input->post('urine_random',TRUE);
                $m_labdiagnostics->urine_sodium=$this->input->post('urine_sodium',TRUE);
                $m_labdiagnostics->urine_calcium=$this->input->post('urine_calcium',TRUE);
                $m_labdiagnostics->urine_total_protein=$this->input->post('urine_total_protein',TRUE);
                $m_labdiagnostics->urine_clearance=$this->input->post('urine_clearance',TRUE);
                $m_labdiagnostics->urine_potassium=$this->input->post('urine_potassium',TRUE);
                $m_labdiagnostics->urine_potassium=$this->input->post('urine_creatinine',TRUE);


                $m_labdiagnostics->created_by = $this->session->user_id;
                $m_labdiagnostics->save();
                $patient_lab_report_id = $m_labdiagnostics->last_insert_id();

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
                $m_labdiagnostics->lab_report_date=$lab_report_date;
                $m_labdiagnostics->hm_cbc=$this->input->post('hm_cbc',TRUE);
                $m_labdiagnostics->hm_ph_bsmear=$this->input->post('hm_ph_bsmear',TRUE);
                $m_labdiagnostics->chem_bun=$this->input->post('chem_bun',TRUE);
                $m_labdiagnostics->chem_creatinine=$this->input->post('chem_creatinine',TRUE);
                $m_labdiagnostics->chem_na=$this->input->post('chem_na',TRUE);
                $m_labdiagnostics->chem_k=$this->input->post('chem_k',TRUE);
                $m_labdiagnostics->chem_fbs=$this->input->post('chem_fbs',TRUE);
                $m_labdiagnostics->chem_ion_calc=$this->input->post('chem_ion_calc',TRUE);
                $m_labdiagnostics->chem_phosporus=$this->input->post('chem_phosporus',TRUE);
                $m_labdiagnostics->chem_albumin=$this->input->post('chem_albumin',TRUE);
                $m_labdiagnostics->chem_uricacid=$this->input->post('chem_uricacid',TRUE);
                $m_labdiagnostics->chem_lipidprofile=$this->input->post('chem_lipidprofile',TRUE);
                $m_labdiagnostics->chem_sgpt=$this->input->post('chem_sgpt',TRUE);
                $m_labdiagnostics->chem_specify=$this->input->post('chem_specify',TRUE);
                $m_labdiagnostics->imag_12lecg=$this->input->post('imag_12lecg',TRUE);
                $m_labdiagnostics->imag_cxrpa=$this->input->post('imag_cxrpa',TRUE);
                $m_labdiagnostics->imag_kubxray=$this->input->post('imag_kubxray',TRUE);
                $m_labdiagnostics->imag_ctstronogram=$this->input->post('imag_ctstronogram',TRUE);
                $m_labdiagnostics->imag_kubultrasound=$this->input->post('imag_kubultrasound',TRUE);
                $m_labdiagnostics->imag_prosultra=$this->input->post('imag_prosultra',TRUE);
                $m_labdiagnostics->imag_abdomen=$this->input->post('imag_abdomen',TRUE);
                $m_labdiagnostics->imag_ct_angiography=$this->input->post('imag_ct_angiography',TRUE);
                $m_labdiagnostics->imag_renal_duplex=$this->input->post('imag_renal_duplex',TRUE);
                $m_labdiagnostics->renal_gfr=$this->input->post('renal_gfr',TRUE);
                $m_labdiagnostics->urine_routine_analysis=$this->input->post('urine_routine_analysis',TRUE);
                $m_labdiagnostics->urine_rbc_morph=$this->input->post('urine_rbc_morph',TRUE);
                $m_labdiagnostics->urine_random=$this->input->post('urine_random',TRUE);
                $m_labdiagnostics->urine_sodium=$this->input->post('urine_sodium',TRUE);
                $m_labdiagnostics->urine_calcium=$this->input->post('urine_calcium',TRUE);
                $m_labdiagnostics->urine_total_protein=$this->input->post('urine_total_protein',TRUE);
                $m_labdiagnostics->urine_clearance=$this->input->post('urine_clearance',TRUE);
                $m_labdiagnostics->urine_potassium=$this->input->post('urine_potassium',TRUE);
                $m_labdiagnostics->urine_potassium=$this->input->post('urine_creatinine',TRUE);

                $m_labdiagnostics->modified_by = $this->session->user_id;
                $m_labdiagnostics->modify($patient_lab_report_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Lab Diagnostics successfully updated.';
                $response['row_added'] = $this->Patient_lab_diagnostics_model->get_list($patient_lab_report_id,
                    'patient_lab_report.*'
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
