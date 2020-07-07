<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'application/third_party/phpmailer/PHPMailerAutoload.php';

class Patient_Info extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_Info_model');
        $this->load->model('Ref_patient_model');
        $this->load->model('Ref_service_desc_model');

    }


    public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title']='Jdev Hospital';
        $data['patient_name']=$this->Ref_patient_model->get_list(
                    array('ref_patient.is_deleted'=>FALSE),
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*'
                       /*array(
                            array('patient_prescription','patient_prescription.patient_info_id=patient_prescription.patient_info_id','left'),
                        )*/
                    );
        $data['service_desc']=$this->Ref_service_desc_model->get_list(
                    array('ref_service_desc.is_deleted'=>FALSE),
                    'ref_service_desc.service_desc,ref_service_desc.ref_service_desc_id,'
                       /*array(
                            array('patient_prescription','patient_prescription.patient_info_id=patient_prescription.patient_info_id','left'),
                        )*/
                    );
        $this->load->view('patient_info_view',$data);

    }

    
    function transaction($txn = null) {
        switch ($txn) {

            case 'list':
                $ref_patient_id = $this->input->post('ref_patient_id', TRUE);
                $response['data']=$this->Patient_Info_model->get_list(array('patient.ref_patient_id'=>$ref_patient_id,'patient.is_deleted'=>FALSE),
                    'patient.*,CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.age,ref_patient.address,ref_patient.bdate',
                       array(
                            array('ref_patient','ref_patient.ref_patient_id=patient.ref_patient_id','left'),
                        )
                    );
                echo json_encode($response);
                break;
            case 'create':
                $m_patient_info = $this->Patient_Info_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('attending_physc', 'Attending Physician', 'strip_tags|xss_clean|required');  
               if ($this->form_validation->run() == TRUE) 
                {
                $nephrorecorddatetemp = $this->input->post('nephrorecorddate', TRUE);
                $nephrorecorddate = date("Y-m-d",strtotime($nephrorecorddatetemp));
                $m_patient_info->nephrorecorddate = $nephrorecorddate;
                $m_patient_info->cash = $this->input->post('cash', TRUE);
                $m_patient_info->pcso = $this->input->post('pcso', TRUE);
                $m_patient_info->philhealth = $this->input->post('philhealth', TRUE);

                $m_patient_info->attending_physc = $this->input->post('attending_physc', TRUE);
                $m_patient_info->treatment_no = $this->input->post('treatment_no', TRUE);
                $m_patient_info->ref_patient_id = $this->input->post('ref_patient_id', TRUE);
                /*$m_patient_info->lastname = $this->input->post('lastname', TRUE);
                $m_patient_info->firstname = $this->input->post('firstname', TRUE);
                $m_patient_info->middlename = $this->input->post('middlename', TRUE);*/
                $m_patient_info->age = $this->input->post('age', TRUE);
                $m_patient_info->sex = $this->input->post('sex', TRUE);
                $m_patient_info->na = $this->input->post('na', TRUE);
                $m_patient_info->height = $this->input->post('height', TRUE);
                $m_patient_info->dry_weight = $this->input->post('dry_weight', TRUE);
                $m_patient_info->temp = $this->input->post('temp', TRUE);
                $m_patient_info->pre_hd_weight = $this->input->post('pre_hd_weight', TRUE);
                $m_patient_info->pre_post_hd_weight = $this->input->post('pre_post_hd_weight', TRUE);
                $m_patient_info->weight_gain = $this->input->post('weight_gain', TRUE);
                $m_patient_info->post_hd_weight = $this->input->post('post_hd_weight', TRUE);
                $m_patient_info->uf_goal = $this->input->post('uf_goal', TRUE);
                $m_patient_info->duration = $this->input->post('duration', TRUE);
                $m_patient_info->dialyzer = $this->input->post('dialyzer', TRUE);
                $m_patient_info->uf_goal = $this->input->post('uf_goal', TRUE);
                $m_patient_info->duration = $this->input->post('duration', TRUE);
                $m_patient_info->dialyzer = $this->input->post('dialyzer', TRUE);
                $m_patient_info->hepatitis_status = $this->input->post('hepatitis_status', TRUE);
                $m_patient_info->other_anticoagulant = $this->input->post('other_anticoagulant', TRUE);
                $m_patient_info->other_routineheparin = $this->input->post('other_routineheparin', TRUE);
                $m_patient_info->other_lowdoseheparin = $this->input->post('other_lowdoseheparin', TRUE);
                $m_patient_info->other_pnssflushing = $this->input->post('other_pnssflushing', TRUE);
                $m_patient_info->other_lmwh = $this->input->post('other_lmwh', TRUE);
                $m_patient_info->kcl = $this->input->post('kcl', TRUE);
                $m_patient_info->dialysisbath_bicarbonate = $this->input->post('dialysisbath_bicarbonate', TRUE);
                $m_patient_info->dialysisacid_hd144a = $this->input->post('dialysisacid_hd144a', TRUE);
                $m_patient_info->qb = $this->input->post('qb', TRUE);
                $m_patient_info->qd = $this->input->post('qd', TRUE);
                $m_patient_info->no_of_use = $this->input->post('no_of_use', TRUE);
                $m_patient_info->dialyzer_type = $this->input->post('dialyzer_type', TRUE);
                $m_patient_info->prehd_stat = $this->input->post('prehd_stat', TRUE);

                $prehd_date_time_arrivedtemp = $this->input->post('prehd_date_time_arrived', TRUE);
                $prehd_date_time_arrived = date("Y-m-d",strtotime($prehd_date_time_arrivedtemp));
                $m_patient_info->prehd_date_time_arrived = $prehd_date_time_arrived;

                $m_patient_info->prehd_date_time_arrived = $prehd_date_time_arrived;
                $m_patient_info->prehd_bp = $this->input->post('prehd_bp', TRUE);
                $m_patient_info->prehd_hr = $this->input->post('prehd_hr', TRUE);
                $m_patient_info->prehd_rr = $this->input->post('prehd_rr', TRUE);
                $m_patient_info->prehd_temp = $this->input->post('prehd_temp', TRUE);
                $m_patient_info->prehd_pulse_stat = $this->input->post('prehd_pulse_stat', TRUE);
                $m_patient_info->prehd_neuro_type = $this->input->post('prehd_neuro_type', TRUE);
                $m_patient_info->prehd_lungs_clear = $this->input->post('prehd_lungs_clear', TRUE);
                $m_patient_info->prehd_lungs_crackles = $this->input->post('prehd_lungs_crackles', TRUE);
                $m_patient_info->prehd_lungs_hemoptysis = $this->input->post('prehd_lungs_hemoptysis', TRUE);
                $m_patient_info->prehd_lungs_dob = $this->input->post('prehd_lungs_dob', TRUE);
                $m_patient_info->prehd_lungs_wheezzing = $this->input->post('prehd_lungs_wheezzing', TRUE);

                $m_patient_info->prehd_edema_none = $this->input->post('prehd_edema_none', TRUE);
                $m_patient_info->prehd_edema_facial = $this->input->post('prehd_edema_facial', TRUE);
                $m_patient_info->prehd_edema_pedal = $this->input->post('prehd_edema_pedal', TRUE);
                $m_patient_info->prehd_edema_periorbital = $this->input->post('prehd_edema_periorbital', TRUE);
                $m_patient_info->prehd_edema_ascitis = $this->input->post('prehd_edema_ascitis', TRUE);
                $m_patient_info->prehd_edema_other = $this->input->post('prehd_edema_other', TRUE);

                $m_patient_info->prehd_gastro_good_appetite = $this->input->post('prehd_gastro_good_appetite', TRUE);
                $m_patient_info->prehd_gastro_no_appetite = $this->input->post('prehd_gastro_no_appetite', TRUE);
                $m_patient_info->prehd_gastro_fair_appetite = $this->input->post('prehd_gastro_fair_appetite', TRUE);
                $m_patient_info->prehd_gastro_melena = $this->input->post('prehd_gastro_melena', TRUE);
                $m_patient_info->prehd_gastro_hematochezia = $this->input->post('prehd_gastro_hematochezia', TRUE);
                $m_patient_info->prehd_gastro_hematemesis = $this->input->post('prehd_gastro_hematemesis', TRUE);
                //prehd skin color
                $m_patient_info->prehd_skin_color = $this->input->post('prehd_skin_color', TRUE);
                //prehd turgor
                $m_patient_info->prehd_turgor = $this->input->post('prehd_turgor', TRUE);
                //prehd others
                $m_patient_info->prehd_others = $this->input->post('prehd_others', TRUE);
                //prehd others
                $m_patient_info->prehd_neckveins = $this->input->post('prehd_neckveins', TRUE);
                //prehd genito urinary
                $m_patient_info->prehd_genito_urinary = $this->input->post('prehd_genito_urinary', TRUE);
                //prehd problems/complaints
                $m_patient_info->prehd_problems_none = $this->input->post('prehd_problems_none', TRUE);
                $m_patient_info->prehd_problems_chest_pain = $this->input->post('prehd_problems_chest_pain', TRUE);
                $m_patient_info->prehd_problems_cough = $this->input->post('prehd_problems_cough', TRUE);
                $m_patient_info->prehd_problems_abdominal_pain = $this->input->post('prehd_problems_abdominal_pain', TRUE);
                $m_patient_info->prehd_problems_lbm = $this->input->post('prehd_problems_lbm', TRUE);
                $m_patient_info->prehd_problems_orthopnea = $this->input->post('prehd_problems_orthopnea', TRUE);
                $m_patient_info->prehd_problems_fever = $this->input->post('prehd_problems_fever', TRUE);
                $m_patient_info->prehd_problems_others = $this->input->post('prehd_problems_others', TRUE);
                //prehd vascular access
                $m_patient_info->prehd_vascularaccess_pc = $this->input->post('prehd_vascularaccess_pc', TRUE);
                $m_patient_info->prehd_vascularaccess_tlc = $this->input->post('prehd_vascularaccess_tlc', TRUE);
                $m_patient_info->prehd_vascularaccess_avf = $this->input->post('prehd_vascularaccess_avf', TRUE);
                $m_patient_info->prehd_vascularaccess_avg = $this->input->post('prehd_vascularaccess_avg', TRUE);
                //Bruit
                $m_patient_info->prehd_bruit = $this->input->post('prehd_bruit', TRUE);
                //Bruit
                $m_patient_info->prehd_thrill_strong = $this->input->post('prehd_thrill_strong', TRUE);
                $m_patient_info->prehd_thrill_weak = $this->input->post('prehd_thrill_weak', TRUE);
                $m_patient_info->prehd_thrill_patent = $this->input->post('prehd_thrill_patent', TRUE);
                $m_patient_info->prehd_thrill_clotted = $this->input->post('prehd_thrill_clotted', TRUE);
                $m_patient_info->prehd_thrill_redness = $this->input->post('prehd_thrill_redness', TRUE);
                $m_patient_info->prehd_thrill_swelling = $this->input->post('prehd_thrill_swelling', TRUE);
                $m_patient_info->prehd_thrill_hematoma = $this->input->post('prehd_thrill_hematoma', TRUE);
                $m_patient_info->prehd_thrill_pus_secretion = $this->input->post('prehd_thrill_pus_secretion', TRUE);
                $m_patient_info->prehd_thrill_no_signs = $this->input->post('prehd_thrill_no_signs', TRUE);
                //prehd arterial
                $m_patient_info->prehd_arterial = $this->input->post('prehd_arterial', TRUE);
                //prehd venous
                $m_patient_info->prehd_venous = $this->input->post('prehd_venous', TRUE);
                //prehd catherer dressing
                $m_patient_info->prehd_catherer_dressing = $this->input->post('prehd_catherer_dressing', TRUE);
                //prehd Av fistula Cannulation
                $m_patient_info->prehd_av_fistula_cannulation_yes = $this->input->post('prehd_av_fistula_cannulation_yes', TRUE);
                //prehd Av fistula Cannulation
                $m_patient_info->prehd_av_fistula_cannulation_no = $this->input->post('prehd_av_fistula_cannulation_no', TRUE);
                //prehd Anesthesia
                $m_patient_info->prehd_anesthesia = $this->input->post('prehd_anesthesia', TRUE);
                //prehd Cannulated By 
                $m_patient_info->prehd_cannulated_by = $this->input->post('prehd_cannulated_by', TRUE);
                //prehd New Fistula Assest Date
                $m_patient_info->prehd_new_fistula_assest_date = $this->input->post('prehd_new_fistula_assest_date', TRUE);
                //prehd Fistula Thrill
                $m_patient_info->prehd_fistula_thrill = $this->input->post('prehd_fistula_thrill', TRUE);
                //prehd Fistula Thrill
                $m_patient_info->prehd_fistula_bruit = $this->input->post('prehd_fistula_bruit', TRUE);
                //prehd Fistula signs of infection
                $m_patient_info->prehd_fistula_signs_of_infection = $this->input->post('prehd_fistula_signs_of_infection', TRUE);
                //prehd Fistula dressing aseptically
                $m_patient_info->prehd_fistula_dressing_aseptically = $this->input->post('prehd_fistula_dressing_aseptically', TRUE);
                $m_patient_info->primed_by = $this->input->post('primed_by', TRUE);
                $m_patient_info->hooked_by = $this->input->post('hooked_by', TRUE);

                //posthd
                $m_patient_info->posthd_stat = $this->input->post('posthd_stat', TRUE);
                $discharge_type_date_temp = $this->input->post('discharge_type_date', TRUE);

                $posthd_date_time_dischargedtemp = $this->input->post('posthd_date_time_discharged', TRUE);
                $posthd_date_time_discharged = date("Y-m-d",strtotime($posthd_date_time_dischargedtemp));
                $m_patient_info->posthd_date_time_discharged = $posthd_date_time_discharged;

                $m_patient_info->posthd_bp = $this->input->post('posthd_bp', TRUE);
                $m_patient_info->posthd_hr = $this->input->post('posthd_hr', TRUE);
                $m_patient_info->posthd_rr = $this->input->post('posthd_rr', TRUE);
                $m_patient_info->posthd_temp = $this->input->post('posthd_temp', TRUE);
                $m_patient_info->posthd_pulse_stat = $this->input->post('posthd_pulse_stat', TRUE);
                $m_patient_info->posthd_neuro_type = $this->input->post('posthd_neuro_type', TRUE);
                $m_patient_info->posthd_lungs_clear = $this->input->post('posthd_lungs_clear', TRUE);
                $m_patient_info->posthd_lungs_crackles = $this->input->post('posthd_lungs_crackles', TRUE);
                $m_patient_info->posthd_lungs_hemoptysis = $this->input->post('posthd_lungs_hemoptysis', TRUE);
                $m_patient_info->posthd_lungs_dob = $this->input->post('posthd_lungs_dob', TRUE);
                $m_patient_info->posthd_lungs_wheezzing = $this->input->post('posthd_lungs_wheezzing', TRUE);

                $m_patient_info->posthd_edema_none = $this->input->post('posthd_edema_none', TRUE);
                $m_patient_info->posthd_edema_facial = $this->input->post('posthd_edema_facial', TRUE);
                $m_patient_info->posthd_edema_pedal = $this->input->post('posthd_edema_pedal', TRUE);
                $m_patient_info->posthd_edema_periorbital = $this->input->post('posthd_edema_periorbital', TRUE);
                $m_patient_info->posthd_edema_ascitis = $this->input->post('posthd_edema_ascitis', TRUE);
                $m_patient_info->posthd_edema_other = $this->input->post('posthd_edema_other', TRUE);

                $m_patient_info->posthd_gastro_good_appetite = $this->input->post('posthd_gastro_good_appetite', TRUE);
                $m_patient_info->posthd_gastro_no_appetite = $this->input->post('posthd_gastro_no_appetite', TRUE);
                $m_patient_info->posthd_gastro_fair_appetite = $this->input->post('posthd_gastro_fair_appetite', TRUE);
                $m_patient_info->posthd_gastro_melena = $this->input->post('posthd_gastro_melena', TRUE);
                $m_patient_info->posthd_gastro_hematochezia = $this->input->post('posthd_gastro_hematochezia', TRUE);
                $m_patient_info->posthd_gastro_hematemesis = $this->input->post('posthd_gastro_hematemesis', TRUE);
                //posthd skin color
                $m_patient_info->posthd_skin_color = $this->input->post('posthd_skin_color', TRUE);
                //posthd turgor
                $m_patient_info->posthd_turgor = $this->input->post('posthd_turgor', TRUE);
                //posthd others
                $m_patient_info->posthd_others = $this->input->post('posthd_others', TRUE);
                //posthd others
                $m_patient_info->posthd_neckveins = $this->input->post('posthd_neckveins', TRUE);
                //posthd genito urinary
                $m_patient_info->posthd_genito_urinary = $this->input->post('posthd_genito_urinary', TRUE);
                //posthd problems/complaints
                $m_patient_info->posthd_problems_none = $this->input->post('posthd_problems_none', TRUE);
                $m_patient_info->posthd_problems_chest_pain = $this->input->post('posthd_problems_chest_pain', TRUE);
                $m_patient_info->posthd_problems_cough = $this->input->post('posthd_problems_cough', TRUE);
                $m_patient_info->posthd_problems_abdominal_pain = $this->input->post('posthd_problems_abdominal_pain', TRUE);
                $m_patient_info->posthd_problems_lbm = $this->input->post('posthd_problems_lbm', TRUE);
                $m_patient_info->posthd_problems_orthopnea = $this->input->post('posthd_problems_orthopnea', TRUE);
                $m_patient_info->posthd_problems_fever = $this->input->post('posthd_problems_fever', TRUE);
                $m_patient_info->posthd_problems_others = $this->input->post('posthd_problems_others', TRUE);
                //posthd vascular access
                $m_patient_info->posthd_vascularaccess_pc = $this->input->post('posthd_vascularaccess_pc', TRUE);
                $m_patient_info->posthd_vascularaccess_tlc = $this->input->post('posthd_vascularaccess_tlc', TRUE);
                $m_patient_info->posthd_vascularaccess_avf = $this->input->post('posthd_vascularaccess_avf', TRUE);
                $m_patient_info->posthd_vascularaccess_avg = $this->input->post('posthd_vascularaccess_avg', TRUE);
                //Bruit
                $m_patient_info->posthd_bruit = $this->input->post('posthd_bruit', TRUE);
                //Bruit
                $m_patient_info->posthd_thrill_strong = $this->input->post('posthd_thrill_strong', TRUE);
                $m_patient_info->posthd_thrill_weak = $this->input->post('posthd_thrill_weak', TRUE);
                $m_patient_info->posthd_thrill_patent = $this->input->post('posthd_thrill_patent', TRUE);
                $m_patient_info->posthd_thrill_clotted = $this->input->post('posthd_thrill_clotted', TRUE);
                $m_patient_info->posthd_thrill_redness = $this->input->post('posthd_thrill_redness', TRUE);
                $m_patient_info->posthd_thrill_swelling = $this->input->post('posthd_thrill_swelling', TRUE);
                $m_patient_info->posthd_thrill_hematoma = $this->input->post('posthd_thrill_hematoma', TRUE);
                $m_patient_info->posthd_thrill_pus_secretion = $this->input->post('posthd_thrill_pus_secretion', TRUE);
                $m_patient_info->posthd_thrill_no_signs = $this->input->post('posthd_thrill_no_signs', TRUE);

                $m_patient_info->posthd_no_bleeding = $this->input->post('posthd_no_bleeding', TRUE);
                $m_patient_info->posthd_arterial_venous_ports = $this->input->post('posthd_arterial_venous_ports', TRUE);
                $m_patient_info->posthd_each_port_capped_secured = $this->input->post('posthd_each_port_capped_secured', TRUE);
                $m_patient_info->posthd_arterial_venous_flushed = $this->input->post('posthd_arterial_venous_flushed', TRUE);
                $m_patient_info->posthd_aseptically_dressed = $this->input->post('posthd_aseptically_dressed', TRUE);
                $m_patient_info->posthd_bactroban_ointment = $this->input->post('posthd_bactroban_ointment', TRUE);
                $m_patient_info->posthd_catherer_dressing = $this->input->post('posthd_catherer_dressing', TRUE);
                $m_patient_info->discharge_type = $this->input->post('discharge_type', TRUE);

                $discharge_type_datetemp = $this->input->post('discharge_type_date', TRUE);
                $discharge_type_date = date("Y-m-d",strtotime($discharge_type_datetemp));
                $m_patient_info->discharge_type_date = $discharge_type_date;


                $m_patient_info->eprex = $this->input->post('eprex', TRUE);
                $m_patient_info->recormon = $this->input->post('recormon', TRUE);
                $m_patient_info->ferrofer = $this->input->post('ferrofer', TRUE);
                $m_patient_info->terminated_by = $this->input->post('terminated_by', TRUE);
                
                $m_patient_info->created_by = $this->session->user_id;
                $m_patient_info->save();

                $ref_department_id = $m_patient_info->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Nephro Record successfully created.';

                $response['row_added'] = $this->Patient_Info_model->get_list($ref_department_id,
                       'patient.*,CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.age,ref_patient.address,ref_patient.bdate',
                       array(
                            array('ref_patient','ref_patient.ref_patient_id=patient.ref_patient_id','left'),
                        )
                    );
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }
                echo json_encode($response);

                break;

            case 'delete':
                $m_patient_info=$this->Patient_Info_model;

                $patient_info_id =$this->input->post('patient_info_id',TRUE);
                
                $m_patient_info->is_deleted=1;
                if($m_patient_info ->modify($patient_info_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Nephro Record Successfully deleted.';

                    echo json_encode($response);
                }

                break;

           

            case 'update':
                $m_patient_info = $this->Patient_Info_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('attending_physc', 'Attending Physician', 'strip_tags|xss_clean|required');  
               if ($this->form_validation->run() == TRUE) 
                {            
                $nephrorecorddatetemp = $this->input->post('nephrorecorddate', TRUE);
                $patient_info_id = $this->input->post('patient_info_id', TRUE);
                $nephrorecorddate = date("Y-m-d",strtotime($nephrorecorddatetemp));
                $m_patient_info->nephrorecorddate = $nephrorecorddate;
                $m_patient_info->cash = $this->input->post('cash', TRUE);
                $m_patient_info->pcso = $this->input->post('pcso', TRUE);
                $m_patient_info->philhealth = $this->input->post('philhealth', TRUE);

                $m_patient_info->attending_physc = $this->input->post('attending_physc', TRUE);
                $m_patient_info->treatment_no = $this->input->post('treatment_no', TRUE);
                /*$m_patient_info->ref_patient_id = $this->input->post('ref_patient_id', TRUE);*/
                /*$m_patient_info->lastname = $this->input->post('lastname', TRUE);
                $m_patient_info->firstname = $this->input->post('firstname', TRUE);
                $m_patient_info->middlename = $this->input->post('middlename', TRUE);*/
                $m_patient_info->age = $this->input->post('age', TRUE);
                $m_patient_info->sex = $this->input->post('sex', TRUE);
                $m_patient_info->na = $this->input->post('na', TRUE);
                $m_patient_info->height = $this->input->post('height', TRUE);
                $m_patient_info->dry_weight = $this->input->post('dry_weight', TRUE);
                $m_patient_info->temp = $this->input->post('temp', TRUE);
                $m_patient_info->pre_hd_weight = $this->input->post('pre_hd_weight', TRUE);
                $m_patient_info->pre_post_hd_weight = $this->input->post('pre_post_hd_weight', TRUE);
                $m_patient_info->weight_gain = $this->input->post('weight_gain', TRUE);
                $m_patient_info->post_hd_weight = $this->input->post('post_hd_weight', TRUE);
                $m_patient_info->uf_goal = $this->input->post('uf_goal', TRUE);
                $m_patient_info->duration = $this->input->post('duration', TRUE);
                $m_patient_info->dialyzer = $this->input->post('dialyzer', TRUE);
                $m_patient_info->uf_goal = $this->input->post('uf_goal', TRUE);
                $m_patient_info->duration = $this->input->post('duration', TRUE);
                $m_patient_info->dialyzer = $this->input->post('dialyzer', TRUE);
                $m_patient_info->hepatitis_status = $this->input->post('hepatitis_status', TRUE);
                $m_patient_info->other_anticoagulant = $this->input->post('other_anticoagulant', TRUE);
                $m_patient_info->other_routineheparin = $this->input->post('other_routineheparin', TRUE);
                $m_patient_info->other_lowdoseheparin = $this->input->post('other_lowdoseheparin', TRUE);
                $m_patient_info->other_pnssflushing = $this->input->post('other_pnssflushing', TRUE);
                $m_patient_info->other_lmwh = $this->input->post('other_lmwh', TRUE);
                $m_patient_info->kcl = $this->input->post('kcl', TRUE);
                $m_patient_info->dialysisbath_bicarbonate = $this->input->post('dialysisbath_bicarbonate', TRUE);
                $m_patient_info->dialysisacid_hd144a = $this->input->post('dialysisacid_hd144a', TRUE);
                $m_patient_info->qb = $this->input->post('qb', TRUE);
                $m_patient_info->qd = $this->input->post('qd', TRUE);
                $m_patient_info->no_of_use = $this->input->post('no_of_use', TRUE);
                $m_patient_info->dialyzer_type = $this->input->post('dialyzer_type', TRUE);
                $m_patient_info->prehd_stat = $this->input->post('prehd_stat', TRUE);

                $prehd_date_time_arrivedtemp = $this->input->post('prehd_date_time_arrived', TRUE);
                $prehd_date_time_arrived = date("Y-m-d",strtotime($prehd_date_time_arrivedtemp));
                $m_patient_info->prehd_date_time_arrived = $prehd_date_time_arrived;

                $m_patient_info->prehd_date_time_arrived = $prehd_date_time_arrived;
                $m_patient_info->prehd_bp = $this->input->post('prehd_bp', TRUE);
                $m_patient_info->prehd_hr = $this->input->post('prehd_hr', TRUE);
                $m_patient_info->prehd_rr = $this->input->post('prehd_rr', TRUE);
                $m_patient_info->prehd_temp = $this->input->post('prehd_temp', TRUE);
                $m_patient_info->prehd_pulse_stat = $this->input->post('prehd_pulse_stat', TRUE);
                $m_patient_info->prehd_neuro_type = $this->input->post('prehd_neuro_type', TRUE);
                $m_patient_info->prehd_lungs_clear = $this->input->post('prehd_lungs_clear', TRUE);
                $m_patient_info->prehd_lungs_crackles = $this->input->post('prehd_lungs_crackles', TRUE);
                $m_patient_info->prehd_lungs_hemoptysis = $this->input->post('prehd_lungs_hemoptysis', TRUE);
                $m_patient_info->prehd_lungs_dob = $this->input->post('prehd_lungs_dob', TRUE);
                $m_patient_info->prehd_lungs_wheezzing = $this->input->post('prehd_lungs_wheezzing', TRUE);

                $m_patient_info->prehd_edema_none = $this->input->post('prehd_edema_none', TRUE);
                $m_patient_info->prehd_edema_facial = $this->input->post('prehd_edema_facial', TRUE);
                $m_patient_info->prehd_edema_pedal = $this->input->post('prehd_edema_pedal', TRUE);
                $m_patient_info->prehd_edema_periorbital = $this->input->post('prehd_edema_periorbital', TRUE);
                $m_patient_info->prehd_edema_ascitis = $this->input->post('prehd_edema_ascitis', TRUE);
                $m_patient_info->prehd_edema_other = $this->input->post('prehd_edema_other', TRUE);

                $m_patient_info->prehd_gastro_good_appetite = $this->input->post('prehd_gastro_good_appetite', TRUE);
                $m_patient_info->prehd_gastro_no_appetite = $this->input->post('prehd_gastro_no_appetite', TRUE);
                $m_patient_info->prehd_gastro_fair_appetite = $this->input->post('prehd_gastro_fair_appetite', TRUE);
                $m_patient_info->prehd_gastro_melena = $this->input->post('prehd_gastro_melena', TRUE);
                $m_patient_info->prehd_gastro_hematochezia = $this->input->post('prehd_gastro_hematochezia', TRUE);
                $m_patient_info->prehd_gastro_hematemesis = $this->input->post('prehd_gastro_hematemesis', TRUE);
                //prehd skin color
                $m_patient_info->prehd_skin_color = $this->input->post('prehd_skin_color', TRUE);
                //prehd turgor
                $m_patient_info->prehd_turgor = $this->input->post('prehd_turgor', TRUE);
                //prehd others
                $m_patient_info->prehd_others = $this->input->post('prehd_others', TRUE);
                //prehd others
                $m_patient_info->prehd_neckveins = $this->input->post('prehd_neckveins', TRUE);
                //prehd genito urinary
                $m_patient_info->prehd_genito_urinary = $this->input->post('prehd_genito_urinary', TRUE);
                //prehd problems/complaints
                $m_patient_info->prehd_problems_none = $this->input->post('prehd_problems_none', TRUE);
                $m_patient_info->prehd_problems_chest_pain = $this->input->post('prehd_problems_chest_pain', TRUE);
                $m_patient_info->prehd_problems_cough = $this->input->post('prehd_problems_cough', TRUE);
                $m_patient_info->prehd_problems_abdominal_pain = $this->input->post('prehd_problems_abdominal_pain', TRUE);
                $m_patient_info->prehd_problems_lbm = $this->input->post('prehd_problems_lbm', TRUE);
                $m_patient_info->prehd_problems_orthopnea = $this->input->post('prehd_problems_orthopnea', TRUE);
                $m_patient_info->prehd_problems_fever = $this->input->post('prehd_problems_fever', TRUE);
                $m_patient_info->prehd_problems_others = $this->input->post('prehd_problems_others', TRUE);
                //prehd vascular access
                $m_patient_info->prehd_vascularaccess_pc = $this->input->post('prehd_vascularaccess_pc', TRUE);
                $m_patient_info->prehd_vascularaccess_tlc = $this->input->post('prehd_vascularaccess_tlc', TRUE);
                $m_patient_info->prehd_vascularaccess_avf = $this->input->post('prehd_vascularaccess_avf', TRUE);
                $m_patient_info->prehd_vascularaccess_avg = $this->input->post('prehd_vascularaccess_avg', TRUE);
                //Bruit
                $m_patient_info->prehd_bruit = $this->input->post('prehd_bruit', TRUE);
                //Bruit
                $m_patient_info->prehd_thrill_strong = $this->input->post('prehd_thrill_strong', TRUE);
                $m_patient_info->prehd_thrill_weak = $this->input->post('prehd_thrill_weak', TRUE);
                $m_patient_info->prehd_thrill_patent = $this->input->post('prehd_thrill_patent', TRUE);
                $m_patient_info->prehd_thrill_clotted = $this->input->post('prehd_thrill_clotted', TRUE);
                $m_patient_info->prehd_thrill_redness = $this->input->post('prehd_thrill_redness', TRUE);
                $m_patient_info->prehd_thrill_swelling = $this->input->post('prehd_thrill_swelling', TRUE);
                $m_patient_info->prehd_thrill_hematoma = $this->input->post('prehd_thrill_hematoma', TRUE);
                $m_patient_info->prehd_thrill_pus_secretion = $this->input->post('prehd_thrill_pus_secretion', TRUE);
                $m_patient_info->prehd_thrill_no_signs = $this->input->post('prehd_thrill_no_signs', TRUE);
                //prehd arterial
                $m_patient_info->prehd_arterial = $this->input->post('prehd_arterial', TRUE);
                //prehd venous
                $m_patient_info->prehd_venous = $this->input->post('prehd_venous', TRUE);
                //prehd catherer dressing
                $m_patient_info->prehd_catherer_dressing = $this->input->post('prehd_catherer_dressing', TRUE);
                //prehd Av fistula Cannulation
                $m_patient_info->prehd_av_fistula_cannulation_yes = $this->input->post('prehd_av_fistula_cannulation_yes', TRUE);
                //prehd Av fistula Cannulation
                $m_patient_info->prehd_av_fistula_cannulation_no = $this->input->post('prehd_av_fistula_cannulation_no', TRUE);
                //prehd Anesthesia
                $m_patient_info->prehd_anesthesia = $this->input->post('prehd_anesthesia', TRUE);
                //prehd Cannulated By 
                $m_patient_info->prehd_cannulated_by = $this->input->post('prehd_cannulated_by', TRUE);
                //prehd New Fistula Assest Date
                $m_patient_info->prehd_new_fistula_assest_date = $this->input->post('prehd_new_fistula_assest_date', TRUE);
                //prehd Fistula Thrill
                $m_patient_info->prehd_fistula_thrill = $this->input->post('prehd_fistula_thrill', TRUE);
                //prehd Fistula Thrill
                $m_patient_info->prehd_fistula_bruit = $this->input->post('prehd_fistula_bruit', TRUE);
                //prehd Fistula signs of infection
                $m_patient_info->prehd_fistula_signs_of_infection = $this->input->post('prehd_fistula_signs_of_infection', TRUE);
                //prehd Fistula dressing aseptically
                $m_patient_info->prehd_fistula_dressing_aseptically = $this->input->post('prehd_fistula_dressing_aseptically', TRUE);
                $m_patient_info->primed_by = $this->input->post('primed_by', TRUE);
                $m_patient_info->hooked_by = $this->input->post('hooked_by', TRUE);

                //posthd
                $m_patient_info->posthd_stat = $this->input->post('posthd_stat', TRUE);
                $discharge_type_date_temp = $this->input->post('discharge_type_date', TRUE);

                $posthd_date_time_dischargedtemp = $this->input->post('posthd_date_time_discharged', TRUE);
                $posthd_date_time_discharged = date("Y-m-d",strtotime($posthd_date_time_dischargedtemp));
                $m_patient_info->posthd_date_time_discharged = $posthd_date_time_discharged;

                $m_patient_info->posthd_bp = $this->input->post('posthd_bp', TRUE);
                $m_patient_info->posthd_hr = $this->input->post('posthd_hr', TRUE);
                $m_patient_info->posthd_rr = $this->input->post('posthd_rr', TRUE);
                $m_patient_info->posthd_temp = $this->input->post('posthd_temp', TRUE);
                $m_patient_info->posthd_pulse_stat = $this->input->post('posthd_pulse_stat', TRUE);
                $m_patient_info->posthd_neuro_type = $this->input->post('posthd_neuro_type', TRUE);
                $m_patient_info->posthd_lungs_clear = $this->input->post('posthd_lungs_clear', TRUE);
                $m_patient_info->posthd_lungs_crackles = $this->input->post('posthd_lungs_crackles', TRUE);
                $m_patient_info->posthd_lungs_hemoptysis = $this->input->post('posthd_lungs_hemoptysis', TRUE);
                $m_patient_info->posthd_lungs_dob = $this->input->post('posthd_lungs_dob', TRUE);
                $m_patient_info->posthd_lungs_wheezzing = $this->input->post('posthd_lungs_wheezzing', TRUE);

                $m_patient_info->posthd_edema_none = $this->input->post('posthd_edema_none', TRUE);
                $m_patient_info->posthd_edema_facial = $this->input->post('posthd_edema_facial', TRUE);
                $m_patient_info->posthd_edema_pedal = $this->input->post('posthd_edema_pedal', TRUE);
                $m_patient_info->posthd_edema_periorbital = $this->input->post('posthd_edema_periorbital', TRUE);
                $m_patient_info->posthd_edema_ascitis = $this->input->post('posthd_edema_ascitis', TRUE);
                $m_patient_info->posthd_edema_other = $this->input->post('posthd_edema_other', TRUE);

                $m_patient_info->posthd_gastro_good_appetite = $this->input->post('posthd_gastro_good_appetite', TRUE);
                $m_patient_info->posthd_gastro_no_appetite = $this->input->post('posthd_gastro_no_appetite', TRUE);
                $m_patient_info->posthd_gastro_fair_appetite = $this->input->post('posthd_gastro_fair_appetite', TRUE);
                $m_patient_info->posthd_gastro_melena = $this->input->post('posthd_gastro_melena', TRUE);
                $m_patient_info->posthd_gastro_hematochezia = $this->input->post('posthd_gastro_hematochezia', TRUE);
                $m_patient_info->posthd_gastro_hematemesis = $this->input->post('posthd_gastro_hematemesis', TRUE);
                //posthd skin color
                $m_patient_info->posthd_skin_color = $this->input->post('posthd_skin_color', TRUE);
                //posthd turgor
                $m_patient_info->posthd_turgor = $this->input->post('posthd_turgor', TRUE);
                //posthd others
                $m_patient_info->posthd_others = $this->input->post('posthd_others', TRUE);
                //posthd others
                $m_patient_info->posthd_neckveins = $this->input->post('posthd_neckveins', TRUE);
                //posthd genito urinary
                $m_patient_info->posthd_genito_urinary = $this->input->post('posthd_genito_urinary', TRUE);
                //posthd problems/complaints
                $m_patient_info->posthd_problems_none = $this->input->post('posthd_problems_none', TRUE);
                $m_patient_info->posthd_problems_chest_pain = $this->input->post('posthd_problems_chest_pain', TRUE);
                $m_patient_info->posthd_problems_cough = $this->input->post('posthd_problems_cough', TRUE);
                $m_patient_info->posthd_problems_abdominal_pain = $this->input->post('posthd_problems_abdominal_pain', TRUE);
                $m_patient_info->posthd_problems_lbm = $this->input->post('posthd_problems_lbm', TRUE);
                $m_patient_info->posthd_problems_orthopnea = $this->input->post('posthd_problems_orthopnea', TRUE);
                $m_patient_info->posthd_problems_fever = $this->input->post('posthd_problems_fever', TRUE);
                $m_patient_info->posthd_problems_others = $this->input->post('posthd_problems_others', TRUE);
                //posthd vascular access
                $m_patient_info->posthd_vascularaccess_pc = $this->input->post('posthd_vascularaccess_pc', TRUE);
                $m_patient_info->posthd_vascularaccess_tlc = $this->input->post('posthd_vascularaccess_tlc', TRUE);
                $m_patient_info->posthd_vascularaccess_avf = $this->input->post('posthd_vascularaccess_avf', TRUE);
                $m_patient_info->posthd_vascularaccess_avg = $this->input->post('posthd_vascularaccess_avg', TRUE);
                //Bruit
                $m_patient_info->posthd_bruit = $this->input->post('posthd_bruit', TRUE);
                //Bruit
                $m_patient_info->posthd_thrill_strong = $this->input->post('posthd_thrill_strong', TRUE);
                $m_patient_info->posthd_thrill_weak = $this->input->post('posthd_thrill_weak', TRUE);
                $m_patient_info->posthd_thrill_patent = $this->input->post('posthd_thrill_patent', TRUE);
                $m_patient_info->posthd_thrill_clotted = $this->input->post('posthd_thrill_clotted', TRUE);
                $m_patient_info->posthd_thrill_redness = $this->input->post('posthd_thrill_redness', TRUE);
                $m_patient_info->posthd_thrill_swelling = $this->input->post('posthd_thrill_swelling', TRUE);
                $m_patient_info->posthd_thrill_hematoma = $this->input->post('posthd_thrill_hematoma', TRUE);
                $m_patient_info->posthd_thrill_pus_secretion = $this->input->post('posthd_thrill_pus_secretion', TRUE);
                $m_patient_info->posthd_thrill_no_signs = $this->input->post('posthd_thrill_no_signs', TRUE);

                $m_patient_info->posthd_no_bleeding = $this->input->post('posthd_no_bleeding', TRUE);
                $m_patient_info->posthd_arterial_venous_ports = $this->input->post('posthd_arterial_venous_ports', TRUE);
                $m_patient_info->posthd_each_port_capped_secured = $this->input->post('posthd_each_port_capped_secured', TRUE);
                $m_patient_info->posthd_arterial_venous_flushed = $this->input->post('posthd_arterial_venous_flushed', TRUE);
                $m_patient_info->posthd_aseptically_dressed = $this->input->post('posthd_aseptically_dressed', TRUE);
                $m_patient_info->posthd_bactroban_ointment = $this->input->post('posthd_bactroban_ointment', TRUE);
                $m_patient_info->posthd_catherer_dressing = $this->input->post('posthd_catherer_dressing', TRUE);
                $m_patient_info->discharge_type = $this->input->post('discharge_type', TRUE);

                $discharge_type_datetemp = $this->input->post('discharge_type_date', TRUE);
                $discharge_type_date = date("Y-m-d",strtotime($discharge_type_datetemp));
                $m_patient_info->discharge_type_date = $discharge_type_date;


                $m_patient_info->eprex = $this->input->post('eprex', TRUE);
                $m_patient_info->recormon = $this->input->post('recormon', TRUE);
                $m_patient_info->ferrofer = $this->input->post('ferrofer', TRUE);
                $m_patient_info->terminated_by = $this->input->post('terminated_by', TRUE);
                
                $m_patient_info->modified_by = $this->session->user_id;
                $m_patient_info->modify($patient_info_id);



                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Nephro Record Successfully Updated.';

                $response['row_updated'] = $this->Patient_Info_model->get_list($patient_info_id,
                    'patient.*,CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.age,ref_patient.address,ref_patient.bdate',
                       array(
                            array('ref_patient','ref_patient.ref_patient_id=patient.ref_patient_id','left'),
                        )
                    );
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }
                echo json_encode($response);

                break;

            case 'mail':

                    $mail = new PHPMailer;

                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'iamjbpv009@gmail.com';                 // SMTP username
                    $mail->Password = 'Iamjbpv9509';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                    $mail->setFrom('iamjbpv009@gmail.com', 'JDEV IT BUSINESS SOLUTION');
                    $mail->addAddress('iamjbpv@outlook.com', 'JBPV OF JDEV');     // Add a recipient
                    $mail->addAddress('iamjbpv@outlook.com');               // Name is optional
                    $mail->addReplyTo('iamjbpv@outlook.com', 'Job Order');
                    $mail->addCC('iamjbpv@outlook.com');
                    $mail->addBCC('iamjbpv@outlook.com');

                    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    $mail->isHTML(true);                                  // Set email format to HTML

                    $mail->Subject = 'Job Order';
                    $mail->Body    = 'Your Job Order Request is successfully Processed, Thank you for Choosing JDEV Solution';
                    $mail->AltBody = '<h3>Thank You!</h3';

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Message has been sent';
                    }
            break;
        }

    }


}
