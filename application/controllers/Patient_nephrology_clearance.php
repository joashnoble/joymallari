<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_nephrology_clearance extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_nephrology_clearance_model');
    }

    public function index() {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
    }

    function transaction($txn = null) {

        switch($txn){
            case 'list':
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $response['data']=$this->Patient_nephrology_clearance_model->get_nephro_clearance($ref_patient_id);
                echo json_encode($response);
                break;

            case 'create':
                $m_nephro_clearance=$this->Patient_nephrology_clearance_model;

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $date = $this->input->post('nephro_clearance_date',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $nephro_clearance_date = date("Y-m-d",strtotime($date));

                $m_nephro_clearance->ref_patient_id=$ref_patient_id;
                $m_nephro_clearance->nephro_clearance_date=$nephro_clearance_date;
                $m_nephro_clearance->contemplated_surgery_renal=$this->input->post('contemplated_surgery_renal',TRUE);
                $m_nephro_clearance->no_nsaids_cox2=$this->input->post('no_nsaids_cox2',TRUE);
                $m_nephro_clearance->avoid_fluid_overload=$this->input->post('avoid_fluid_overload',TRUE);
                $m_nephro_clearance->no_ace_inhi_arb=$this->input->post('no_ace_inhi_arb',TRUE);
                $m_nephro_clearance->np_potassium_iv_fluid=$this->input->post('np_potassium_iv_fluid',TRUE);
                $m_nephro_clearance->contemplates_ct_scan=$this->input->post('contemplates_ct_scan',TRUE);
                $m_nephro_clearance->use_non_ionic_isoosmolar=$this->input->post('use_non_ionic_isoosmolar',TRUE);
                $m_nephro_clearance->give_n_acetylcysteine=$this->input->post('give_n_acetylcysteine',TRUE);
                $m_nephro_clearance->give_trimetazidine=$this->input->post('give_trimetazidine',TRUE);
                $m_nephro_clearance->oral_hydration_2l_day=$this->input->post('oral_hydration_2l_day',TRUE);
                $m_nephro_clearance->repeate_creatinine_2d_ctscan=$this->input->post('repeate_creatinine_2d_ctscan',TRUE);
                $m_nephro_clearance->for_cystatin_c_ctscan=$this->input->post('for_cystatin_c_ctscan',TRUE);
                $m_nephro_clearance->urine_ngal_ctscan=$this->input->post('urine_ngal_ctscan',TRUE);
                $m_nephro_clearance->created_by = $this->session->user_id;
                $m_nephro_clearance->save();
                $nephro_clearance_id = $m_nephro_clearance->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $ref_patient_id.''.$nephro_clearance_id); //5069xxx
                $nephro_clearance_code = 'NC-'.$temp .'-'. $today = date("Y");
                $m_nephro_clearance->nephro_clearance_code = $nephro_clearance_code;
                $m_nephro_clearance->modify($nephro_clearance_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Nephrology Clearance successfully created.';
                $response['row_added'] = $m_nephro_clearance->get_nephro_clearance($ref_patient_id,$nephro_clearance_id);
                echo json_encode($response);
                break;

            case 'update':
                $m_nephro_clearance=$this->Patient_nephrology_clearance_model;
                $nephro_clearance_id=$this->input->post('nephro_clearance_id',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $date=$this->input->post('nephro_clearance_date',TRUE);
                $nephro_clearance_date = date("Y-m-d",strtotime($date));

                $m_nephro_clearance->nephro_clearance_date=$nephro_clearance_date;
                $m_nephro_clearance->contemplated_surgery_renal=$this->input->post('contemplated_surgery_renal',TRUE);
                $m_nephro_clearance->no_nsaids_cox2=$this->input->post('no_nsaids_cox2',TRUE);
                $m_nephro_clearance->avoid_fluid_overload=$this->input->post('avoid_fluid_overload',TRUE);
                $m_nephro_clearance->no_ace_inhi_arb=$this->input->post('no_ace_inhi_arb',TRUE);
                $m_nephro_clearance->np_potassium_iv_fluid=$this->input->post('np_potassium_iv_fluid',TRUE);
                $m_nephro_clearance->contemplates_ct_scan=$this->input->post('contemplates_ct_scan',TRUE);
                $m_nephro_clearance->use_non_ionic_isoosmolar=$this->input->post('use_non_ionic_isoosmolar',TRUE);
                $m_nephro_clearance->give_n_acetylcysteine=$this->input->post('give_n_acetylcysteine',TRUE);
                $m_nephro_clearance->give_trimetazidine=$this->input->post('give_trimetazidine',TRUE);
                $m_nephro_clearance->oral_hydration_2l_day=$this->input->post('oral_hydration_2l_day',TRUE);
                $m_nephro_clearance->repeate_creatinine_2d_ctscan=$this->input->post('repeate_creatinine_2d_ctscan',TRUE);
                $m_nephro_clearance->for_cystatin_c_ctscan=$this->input->post('for_cystatin_c_ctscan',TRUE);
                $m_nephro_clearance->urine_ngal_ctscan=$this->input->post('urine_ngal_ctscan',TRUE);
                $m_nephro_clearance->modified_by = $this->session->user_id;

                if($m_nephro_clearance->modify($nephro_clearance_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Nephrology Clearance successfully updated.';
                    $response['row_updated'] = $m_nephro_clearance->get_nephro_clearance($ref_patient_id,$nephro_clearance_id);

                    echo json_encode($response);
                }
                break;

            case 'delete':
                $m_nephro_clearance=$this->Patient_nephrology_clearance_model;
                $nephro_clearance_id=$this->input->post('nephro_clearance_id',TRUE);
                    
                    $m_nephro_clearance->is_deleted=1;
                    if($m_nephro_clearance ->modify($nephro_clearance_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Nephrology Clearance successfully deleted.';

                        echo json_encode($response);
                    }

                break;     
        }
    }
}
