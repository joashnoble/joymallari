<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_nephro_order extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_nephro_order_model');
    }

    public function index() {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        /*$data['todo_list']=$this->Patient_nephro_order_model->get_list(array('todo_list.is_deleted'=>FALSE));*/
        $data['_title']='Patient Nephro Order';

       /* $this->load->view('user_view', $data);*/
    }

    function transaction($txn = null) {

        switch($txn){
            case 'list':
                $patient_nephro_id=$this->input->post('_patient_nephro_id',TRUE);
                
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $response['data']=$this->Patient_nephro_order_model->get_list(
                    array('patient_nephro.ref_patient_id'=>$ref_patient_id,'patient_nephro.is_deleted'=>FALSE),
                    'patient_nephro.*,DATE_FORMAT(date_created, "%m/%d/%Y") as date_created,
                    (CASE
                        WHEN DATE_FORMAT(nephro_order_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(nephro_order_date, "%m/%d/%Y")
                    END) as nephro_order_date'
                    );
                echo json_encode($response);
                break;
/*
            case 'create':
                $m_todo=$this->Patient_nephro_order_model;
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
                $m_nephro=$this->Patient_nephro_order_model;

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);

                $m_nephro->ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $m_nephro->nephro_diagnosis=$this->input->post('nephro_diagnosis',TRUE);
                $m_nephro->inc_freq_3x=$this->input->post('inc_freq_3x',TRUE);
                $m_nephro->upd_medical_sheet=$this->input->post('upd_medical_sheet',TRUE);

                $m_nephro->shift_recormon_500=$this->input->post('shift_recormon_500',TRUE);
                $m_nephro->shift_recormon_500_1x=$this->input->post('shift_recormon_500_1x',TRUE);
                $m_nephro->shift_recormon_500_2x=$this->input->post('shift_recormon_500_2x',TRUE);
                $m_nephro->shift_recormon_500_3x=$this->input->post('shift_recormon_500_3x',TRUE);
                $m_nephro->shift_recormon_500=$this->input->post('shift_recormon_500',TRUE);

                $m_nephro->shift_eprex_4000=$this->input->post('shift_eprex_4000',TRUE);
                $m_nephro->shift_eprex_4000_1x=$this->input->post('shift_eprex_4000_1x',TRUE);
                $m_nephro->shift_eprex_4000_2x=$this->input->post('shift_eprex_4000_2x',TRUE);
                $m_nephro->shift_eprex_4000_3x=$this->input->post('shift_eprex_4000_3x',TRUE);

                $m_nephro->shift_eposino_4000u=$this->input->post('shift_eposino_4000u',TRUE);
                $m_nephro->shift_eposino_4000u_1x=$this->input->post('shift_eposino_4000u_1x',TRUE);
                $m_nephro->shift_eposino_4000u_2x=$this->input->post('shift_eposino_4000u_2x',TRUE);
                $m_nephro->shift_eposino_4000u_3x=$this->input->post('shift_eposino_4000u_3x',TRUE);

                $m_nephro->shift_eposino_6000u=$this->input->post('shift_eposino_6000u',TRUE);
                $m_nephro->shift_eposino_6000u_1x=$this->input->post('shift_eposino_6000u_1x',TRUE);
                $m_nephro->shift_eposino_6000u_2x=$this->input->post('shift_eposino_6000u_2x',TRUE);

                $m_nephro->iv_sc_1month=$this->input->post('iv_sc_1month',TRUE);
                $m_nephro->iv_sc_2weeks=$this->input->post('iv_sc_2weeks',TRUE);
                $m_nephro->iv_sc_10doses=$this->input->post('iv_sc_10doses',TRUE);

                $m_nephro->upd_medication=$this->input->post('upd_medication',TRUE);
                $m_nephro->sen_nurse_cann_avf=$this->input->post('sen_nurse_cann_avf',TRUE);
                $m_nephro->rem_int_jug_catheter=$this->input->post('rem_int_jug_catheter',TRUE);
                $m_nephro->rest_avf_2weeks=$this->input->post('rest_avf_2weeks',TRUE);
                $m_nephro->mod_anticoag=$this->input->post('mod_anticoag',TRUE);
                $m_nephro->no_heparin=$this->input->post('no_heparin',TRUE);
                $m_nephro->no_heparin_for=$this->input->post('no_heparin_for',TRUE);
                $m_nephro->weeks_prior=$this->input->post('weeks_prior',TRUE);
                $m_nephro->no_heparin2=$this->input->post('no_heparin2',TRUE);
                $m_nephro->no_heparin_for2=$this->input->post('no_heparin_for2',TRUE);
                $m_nephro->weeks_after=$this->input->post('weeks_after',TRUE);
                $m_nephro->give_uhf=$this->input->post('give_uhf',TRUE);
                $m_nephro->give_uhf_units=$this->input->post('give_uhf_units',TRUE);
                $m_nephro->give_uhf_units_bolus=$this->input->post('give_uhf_units_bolus',TRUE);

                $m_nephro->heparin_free_dialysis=$this->input->post('heparin_free_dialysis',TRUE);
                $m_nephro->no_heparin_last_hr=$this->input->post('no_heparin_last_hr',TRUE);
                $m_nephro->hold_oral_anticoagulant_1wk_prior=$this->input->post('hold_oral_anticoagulant_1wk_prior',TRUE);
                $m_nephro->hold_oral_anticoagulant_1wk_post=$this->input->post('hold_oral_anticoagulant_1wk_post',TRUE);
                $m_nephro->qb_post_dilution=$this->input->post('qb_post_dilution',TRUE);
                $m_nephro->qb_pre_dilution=$this->input->post('qb_pre_dilution',TRUE);
                $m_nephro->qb_low_flux_dialyzer=$this->input->post('qb_low_flux_dialyzer',TRUE);
                $m_nephro->qb_hi_flux_dialyzer=$this->input->post('qb_hi_flux_dialyzer',TRUE);
                $m_nephro->gentamycin_lock=$this->input->post('gentamycin_lock',TRUE);
                $m_nephro->ampicillin_lock=$this->input->post('ampicillin_lock',TRUE);
                $m_nephro->citrate_lock_4=$this->input->post('citrate_lock_4',TRUE);
                $m_nephro->citrate_lock_30=$this->input->post('citrate_lock_30',TRUE);
                $m_nephro->monthly_body_comp_analysis=$this->input->post('monthly_body_comp_analysis',TRUE);

                $m_nephro->please_do_monthly=$this->input->post('please_do_monthly',TRUE);
                $m_nephro->on_or_before=$this->input->post('on_or_before',TRUE);
                $m_nephro->others_orders=$this->input->post('others_orders',TRUE);
                $m_nephro->more_details1=$this->input->post('more_details1',TRUE);
                $m_nephro->more_details2=$this->input->post('more_details2',TRUE);

                $m_nephro->cartoon_lungs=$this->input->post('cartoon_lungs',TRUE);
                $m_nephro->cartoon_lungs_remarks=$this->input->post('cartoon_lungs_remarks',TRUE);
                $m_nephro->plural_effusion_both_lungs=$this->input->post('plural_effusion_both_lungs',TRUE);
                $m_nephro->plural_effusion_left_lung=$this->input->post('plural_effusion_left_lung',TRUE);
                $m_nephro->plural_effusion_right_lung=$this->input->post('plural_effusion_right_lung',TRUE);

                $m_nephro->date_created = date("Y-m-d");
                $nephro_order_date = date("Y-m-d",strtotime($this->input->post('nephro_order_date')));
                $m_nephro->nephro_order_date = $nephro_order_date;
                $m_nephro->dry_weight=$this->input->post('dry_weight',TRUE);
                $m_nephro->save();
                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Nephro Order successfully created.';
                
                $patient_nephro_id = $m_nephro->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $ref_patient_id.''.$patient_nephro_id); //5069xxx
                $nephro_order_code = 'NO-'.$temp .'-'. $today = date("Y");
                $m_nephro->nephro_order_code = $nephro_order_code;
                $m_nephro->modify($patient_nephro_id);


                $response['row_added'] = $this->Patient_nephro_order_model->get_list($patient_nephro_id,
                    'patient_nephro.*,DATE_FORMAT(date_created, "%m/%d/%Y") as date_created'
                    );
                echo json_encode($response);
                break;

            case 'update':
                $m_nephro=$this->Patient_nephro_order_model;
                $patient_nephro_id=$this->input->post('patient_nephro_id',TRUE);

                $m_nephro->nephro_diagnosis=$this->input->post('nephro_diagnosis',TRUE);
                $m_nephro->inc_freq_3x=$this->input->post('inc_freq_3x',TRUE);
                $m_nephro->upd_medical_sheet=$this->input->post('upd_medical_sheet',TRUE);

                $m_nephro->shift_recormon_500=$this->input->post('shift_recormon_500',TRUE);
                $m_nephro->shift_recormon_500_1x=$this->input->post('shift_recormon_500_1x',TRUE);
                $m_nephro->shift_recormon_500_2x=$this->input->post('shift_recormon_500_2x',TRUE);
                $m_nephro->shift_recormon_500_3x=$this->input->post('shift_recormon_500_3x',TRUE);
                $m_nephro->shift_recormon_500=$this->input->post('shift_recormon_500',TRUE);

                $m_nephro->shift_eprex_4000=$this->input->post('shift_eprex_4000',TRUE);
                $m_nephro->shift_eprex_4000_1x=$this->input->post('shift_eprex_4000_1x',TRUE);
                $m_nephro->shift_eprex_4000_2x=$this->input->post('shift_eprex_4000_2x',TRUE);
                $m_nephro->shift_eprex_4000_3x=$this->input->post('shift_eprex_4000_3x',TRUE);

                $m_nephro->shift_eposino_4000u=$this->input->post('shift_eposino_4000u',TRUE);
                $m_nephro->shift_eposino_4000u_1x=$this->input->post('shift_eposino_4000u_1x',TRUE);
                $m_nephro->shift_eposino_4000u_2x=$this->input->post('shift_eposino_4000u_2x',TRUE);
                $m_nephro->shift_eposino_4000u_3x=$this->input->post('shift_eposino_4000u_3x',TRUE);

                $m_nephro->shift_eposino_6000u=$this->input->post('shift_eposino_6000u',TRUE);
                $m_nephro->shift_eposino_6000u_1x=$this->input->post('shift_eposino_6000u_1x',TRUE);
                $m_nephro->shift_eposino_6000u_2x=$this->input->post('shift_eposino_6000u_2x',TRUE);

                $m_nephro->iv_sc_1month=$this->input->post('iv_sc_1month',TRUE);
                $m_nephro->iv_sc_2weeks=$this->input->post('iv_sc_2weeks',TRUE);
                $m_nephro->iv_sc_10doses=$this->input->post('iv_sc_10doses',TRUE);

                $m_nephro->upd_medication=$this->input->post('upd_medication',TRUE);
                $m_nephro->sen_nurse_cann_avf=$this->input->post('sen_nurse_cann_avf',TRUE);
                $m_nephro->rem_int_jug_catheter=$this->input->post('rem_int_jug_catheter',TRUE);
                $m_nephro->rest_avf_2weeks=$this->input->post('rest_avf_2weeks',TRUE);
                $m_nephro->mod_anticoag=$this->input->post('mod_anticoag',TRUE);
                $m_nephro->no_heparin=$this->input->post('no_heparin',TRUE);
                $m_nephro->no_heparin_for=$this->input->post('no_heparin_for',TRUE);
                $m_nephro->weeks_prior=$this->input->post('weeks_prior',TRUE);
                $m_nephro->no_heparin2=$this->input->post('no_heparin2',TRUE);
                $m_nephro->no_heparin_for2=$this->input->post('no_heparin_for2',TRUE);
                $m_nephro->weeks_after=$this->input->post('weeks_after',TRUE);
                $m_nephro->give_uhf=$this->input->post('give_uhf',TRUE);
                $m_nephro->give_uhf_units=$this->input->post('give_uhf_units',TRUE);
                $m_nephro->give_uhf_units_bolus=$this->input->post('give_uhf_units_bolus',TRUE);

                $m_nephro->heparin_free_dialysis=$this->input->post('heparin_free_dialysis',TRUE);
                $m_nephro->no_heparin_last_hr=$this->input->post('no_heparin_last_hr',TRUE);
                $m_nephro->hold_oral_anticoagulant_1wk_prior=$this->input->post('hold_oral_anticoagulant_1wk_prior',TRUE);
                $m_nephro->hold_oral_anticoagulant_1wk_post=$this->input->post('hold_oral_anticoagulant_1wk_post',TRUE);
                $m_nephro->qb_post_dilution=$this->input->post('qb_post_dilution',TRUE);
                $m_nephro->qb_pre_dilution=$this->input->post('qb_pre_dilution',TRUE);
                $m_nephro->qb_low_flux_dialyzer=$this->input->post('qb_low_flux_dialyzer',TRUE);
                $m_nephro->qb_hi_flux_dialyzer=$this->input->post('qb_hi_flux_dialyzer',TRUE);
                $m_nephro->gentamycin_lock=$this->input->post('gentamycin_lock',TRUE);
                $m_nephro->ampicillin_lock=$this->input->post('ampicillin_lock',TRUE);
                $m_nephro->citrate_lock_4=$this->input->post('citrate_lock_4',TRUE);
                $m_nephro->citrate_lock_30=$this->input->post('citrate_lock_30',TRUE);
                $m_nephro->monthly_body_comp_analysis=$this->input->post('monthly_body_comp_analysis',TRUE);

                $m_nephro->please_do_monthly=$this->input->post('please_do_monthly',TRUE);
                $m_nephro->on_or_before=$this->input->post('on_or_before',TRUE);
                $m_nephro->others_orders=$this->input->post('others_orders',TRUE);
                $m_nephro->more_details1=$this->input->post('more_details1',TRUE);
                $m_nephro->more_details2=$this->input->post('more_details2',TRUE);

                $m_nephro->cartoon_lungs=$this->input->post('cartoon_lungs',TRUE);
                $m_nephro->cartoon_lungs_remarks=$this->input->post('cartoon_lungs_remarks',TRUE);
                $m_nephro->plural_effusion_both_lungs=$this->input->post('plural_effusion_both_lungs',TRUE);
                $m_nephro->plural_effusion_left_lung=$this->input->post('plural_effusion_left_lung',TRUE);
                $m_nephro->plural_effusion_right_lung=$this->input->post('plural_effusion_right_lung',TRUE);

                $nephro_order_date = date("Y-m-d",strtotime($this->input->post('nephro_order_date')));
                $m_nephro->nephro_order_date = $nephro_order_date;
                $m_nephro->dry_weight=$this->input->post('dry_weight',TRUE);
                $m_nephro->modified_by = $this->session->user_id;

                if($m_nephro->modify($patient_nephro_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Nephro Order successfully updated.';
                    $response['row_updated'] = $this->Patient_nephro_order_model->get_list($patient_nephro_id,
                    'patient_nephro.*,DATE_FORMAT(date_created, "%m/%d/%Y") as date_created'
                    );

                    echo json_encode($response);
                }

                break;

            case 'delete':
                $m_nephro=$this->Patient_nephro_order_model;
                $patient_nephro_id=$this->input->post('patient_nephro_id',TRUE);
                    
                    $m_nephro->is_deleted=1;
                    if($m_nephro ->modify($patient_nephro_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Nephro Order successfully deleted.';

                        echo json_encode($response);
                    }

                break;                



        }


    }
}
