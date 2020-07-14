<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_referral extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_referral_model');
        $this->load->model('Patient_Info_model');
        

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
    
    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $ref_patient_id = $this->input->post('ref_patient_id', TRUE);

                $response['data']=$this->Patient_referral_model->get_list(
                    array('patient_referral.ref_patient_id'=>$ref_patient_id,'patient_referral.is_deleted'=>FALSE),
                    'patient_referral.*, DATE_FORMAT(referral_date, "%m/%d/%Y") as referral_date, 
                    (CASE
                        WHEN DATE_FORMAT(appointment_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(appointment_date, "%m/%d/%Y")
                    END) as appointment_date'
                    );
                echo json_encode($response);
                break;

                case 'create':

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $m_patient_referral = $this->Patient_referral_model;

                $referral_date = $this->input->post('referral_date', TRUE);
                $appointment_date = $this->input->post('appointment_date', TRUE);

                $m_patient_referral->ref_patient_id = $this->input->post('ref_patient_id', TRUE);
                $m_patient_referral->referral_date = date("Y-m-d",strtotime($referral_date));
                $m_patient_referral->appointment_date = date("Y-m-d",strtotime($appointment_date));
                $m_patient_referral->referral_code = $this->input->post('referral_code', TRUE);
                $m_patient_referral->referral_doctors = $this->input->post('referral_doctors', TRUE);
                $m_patient_referral->referral_diagnostics = $this->input->post('referral_diagnostics', TRUE);
                $m_patient_referral->remarks = $this->input->post('remarks', TRUE);
                $m_patient_referral->created_by = $this->session->user_id;
                $m_patient_referral->save();

                $patient_referral_id = $m_patient_referral->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $patient_referral_id); //5069xxx
                $referral_code = 'REF-'.$temp .'-'. $today = date("Y");

                $m_patient_referral->referral_code = $referral_code;
                $m_patient_referral->modify($patient_referral_id);
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Patient Referral Successfully Created.';
                    
                echo json_encode($response);

                
                break;

                case 'update':
                $m_patient_referral = $this->Patient_referral_model;

                $patient_referral_id = $this->input->post('patient_referral_id', TRUE);

                $referral_date = $this->input->post('referral_date', TRUE);
                $appointment_date = $this->input->post('appointment_date', TRUE);

                $m_patient_referral->referral_date = date("Y-m-d",strtotime($referral_date));
                $m_patient_referral->appointment_date = date("Y-m-d",strtotime($appointment_date));                
                $m_patient_referral->referral_doctors = $this->input->post('referral_doctors', TRUE);
                $m_patient_referral->referral_diagnostics = $this->input->post('referral_diagnostics', TRUE);
                $m_patient_referral->remarks = $this->input->post('remarks', TRUE);
                $m_patient_referral->modified_by = $this->session->user_id;
                $m_patient_referral->modify($patient_referral_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Patient Referral Successfully Updated.';
                    
                echo json_encode($response);
                break;

                case 'delete':
                    $m_patient_referral=$this->Patient_referral_model;

                    $patient_referral_id =$this->input->post('patient_referral_id',TRUE);
                    
                    $m_patient_referral->is_deleted=1;
                    if($m_patient_referral ->modify($patient_referral_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Referral Successfully deleted.';

                        echo json_encode($response);
                }

                break;
                   
        }
    }
}
