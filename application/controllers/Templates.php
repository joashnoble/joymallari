<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends CORE_Controller {

    function __construct()

    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Ref_patient_model');
        $this->load->model('Patient_Info_model');
        $this->load->model('Patient_prescription_model');
        $this->load->model('Patient_prescription_items_model');
        $this->load->model('Patient_billing_model');
        $this->load->model('patient_billing_items_model');
        $this->load->model('Patient_visiting_model');
        $this->load->model('Patient_clinical_model');
        $this->load->model('Patient_medical_record_model');
        $this->load->model('Patient_referral_model');
        $this->load->model('Ref_service_desc_model');
        $this->load->model('Company_info_model');
        $this->load->model('Stamp_settings_model');
        $this->load->model('Header_settings_model');
        $this->load->library('excel');
        $this->load->library('M_pdf');

    }


    function transaction($txn = null,$filter_value=null) {

        switch ($txn) {

            case 'patient-details':
                $m_ref_patient = $this->Ref_patient_model;
                $type=$this->input->get('type',TRUE);
                $date = date('Y-m-d');
                $info=$m_ref_patient->get_list(
                    $filter_value,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age,
                        ref_patient.ref_patient_id as ref_patient_id',
                       array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left'),
                        )

                    );

                $data['patient']=$info[0];
                //show only inside grid with menu button
                if($type=='fullview'||$type==null){
                    echo $this->load->view('template/patient_details_content',$data,TRUE);
                }  

            break;

            case 'prescription-details':
                $m_ref_patient = $this->Ref_patient_model;
                $m_prescription = $this->Patient_prescription_model;
                $m_prescription_items = $this->Patient_prescription_items_model;

                $type=$this->input->get('type',TRUE);
                $date = date('Y-m-d');

                $prescription=$m_prescription->get_list(
                   $filter_value,
                    'patient_prescription.*, date_format(date_prescribed, "%m/%d/%Y") as date_prescribed,
                    (CASE
                        WHEN DATE_FORMAT(appointment_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(appointment_date, "%m/%d/%Y")
                    END) as appointment_date')[0];

                $patient=$m_ref_patient->get_list(
                    $prescription->ref_patient_id,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age,
                        ref_patient.ref_patient_id as ref_patient_id',
                       array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left'),
                        )

                    );

                $data['items']=$m_prescription_items->get_list(
                    array('patient_prescription_items.patient_prescription_id'=>$filter_value),
                    'patient_prescription_items.*'
                    );

                $data['data']=$this->Header_settings_model->get_list()[0];
                $data['stamp_data']=$this->Stamp_settings_model->get_list()[0];
                $data['info']=$prescription;
                $data['patient']=$patient[0];
                $data['type']=$type;

                //show only inside grid with menu button
                if($type=='fullview'||$type==null){
                    echo $this->load->view('template/prescription_details_content',$data,TRUE);
                }

                if($type=='pdf'){
                    $file_name='Prescription : '.$patient[0]->fullname;
                    $pdfFilePath = $file_name.".pdf"; //generate filename base on id
                    $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                    $content=$this->load->view('template/prescription_details_content',$data,TRUE); //load the template
                    // $pdf->setFooter('{PAGENO}');
                    $pdf->WriteHTML($content);
                    //download it.
                    $pdf->Output();
                }
                
            break;

            case 'billing-details':
                $m_ref_patient = $this->Ref_patient_model;
                $m_billing = $this->Patient_billing_model;
                $m_billing_items = $this->patient_billing_items_model;

                $type=$this->input->get('type',TRUE);
                $date = date('Y-m-d');

                $billing=$m_billing->get_list(
                   $filter_value,
                    'patient_billing.*, date_format(billing_date, "%m/%d/%Y") as billing_date')[0];         

                $patient=$m_ref_patient->get_list(
                    $billing->ref_patient_id,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age,
                        ref_patient.ref_patient_id as ref_patient_id',
                       array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left'),
                        )
                    );

                $data['items']=$m_billing_items->get_list(
                    array('patient_billing_items.patient_billing_id'=>$filter_value),
                    'patient_billing_items.*,ref_service_desc.service_desc',
                       array(
                            array('ref_service_desc','ref_service_desc.ref_service_desc_id=patient_billing_items.ref_service_desc_id','left'),
                        )
                    );

                $data['data']=$this->Header_settings_model->get_list()[0];
                $data['stamp_data']=$this->Stamp_settings_model->get_list()[0];
                $data['info']=$billing;
                $data['patient']=$patient[0];
                $data['type']=$type;

                //show only inside grid with menu button
                if($type=='fullview'||$type==null){
                    echo $this->load->view('template/billing_details_content',$data,TRUE);
                }

                if($type=='pdf'){
                    $file_name='Billing : '.$patient[0]->fullname;
                    $pdfFilePath = $file_name.".pdf"; //generate filename base on id
                    $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                    $content=$this->load->view('template/billing_details_content',$data,TRUE); //load the template
                    // $pdf->setFooter('{PAGENO}');
                    $pdf->WriteHTML($content);
                    //download it.
                    $pdf->Output();
                }
                
            break;            

            case 'visiting-details':
                $m_ref_patient = $this->Ref_patient_model;
                $m_visiting = $this->Patient_visiting_model;

                $type=$this->input->get('type',TRUE);
                $date = date('Y-m-d');

                $visiting=$m_visiting->get_list(
                    $filter_value,
                    'patient_visiting_record.*, date_format(visiting_date, "%m/%d/%Y") as visiting_date, date_format(next_visit_date, "%m/%d/%Y") as next_visit_date'
                    )[0];

                $patient=$m_ref_patient->get_list(
                    $visiting->ref_patient_id,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age,
                        ref_patient.ref_patient_id as ref_patient_id',
                       array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left'),
                        )
                    );

                $data['data']=$this->Header_settings_model->get_list()[0];
                $data['stamp_data']=$this->Stamp_settings_model->get_list()[0];
                $data['info']=$visiting;
                $data['patient']=$patient[0];
                $data['type']=$type;

                //show only inside grid with menu button
                if($type=='fullview'||$type==null){
                    echo $this->load->view('template/visiting_details_content',$data,TRUE);
                }

                if($type=='pdf'){
                    $file_name='Visiting Record : '.$patient[0]->fullname;
                    $pdfFilePath = $file_name.".pdf"; //generate filename base on id
                    $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                    $content=$this->load->view('template/visiting_details_content',$data,TRUE); //load the template
                    // $pdf->setFooter('{PAGENO}');
                    $pdf->WriteHTML($content);
                    //download it.
                    $pdf->Output();
                }
                
            break;   

            case 'clinical-details':
                $m_ref_patient = $this->Ref_patient_model;
                $m_clinical = $this->Patient_clinical_model;

                $type=$this->input->get('type',TRUE);
                $date = date('Y-m-d');

                $info=$m_clinical->get_list(
                    $filter_value,
                    'patient_clinical.*, date_format(date_created, "%m/%d/%Y") as date_created'
                    )[0];            

                $patient=$m_ref_patient->get_list(
                    $info->ref_patient_id,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age,
                        ref_patient.ref_patient_id as ref_patient_id',
                       array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left'),
                        )
                    );

                $data['data']=$this->Header_settings_model->get_list()[0];
                $data['stamp_data']=$this->Stamp_settings_model->get_list()[0];
                $data['info']=$info;
                $data['patient']=$patient[0];
                $data['type']=$type;

                //show only inside grid with menu button
                if($type=='fullview'||$type==null){
                    echo $this->load->view('template/clinical_details_content',$data,TRUE);
                }

                if($type=='pdf'){
                    $file_name='Clinical Database : '.$patient[0]->fullname;
                    $pdfFilePath = $file_name.".pdf"; //generate filename base on id
                    $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                    $content=$this->load->view('template/clinical_details_content',$data,TRUE); //load the template
                    // $pdf->setFooter('{PAGENO}');
                    $pdf->WriteHTML($content);
                    //download it.
                    $pdf->Output();
                }
                
            break;                     

            case 'certificate-details':
                $m_ref_patient = $this->Ref_patient_model;
                $m_certificate = $this->Patient_medical_record_model;

                $type=$this->input->get('type',TRUE);
                $date = date('Y-m-d');

                $info=$m_certificate->get_list(
                    $filter_value,
                    'patient_medical_certificate.*,
                    (CASE
                        WHEN DATE_FORMAT(medical_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(medical_date, "%m/%d/%Y")
                    END) as medical_date'
                    )[0];            

                $patient=$m_ref_patient->get_list(
                    $info->ref_patient_id,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age,
                        ref_patient.ref_patient_id as ref_patient_id',
                       array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left'),
                        )
                    );

                $data['data']=$this->Header_settings_model->get_list()[0];
                $data['stamp_data']=$this->Stamp_settings_model->get_list()[0];
                $data['info']=$info;
                $data['patient']=$patient[0];
                $data['type']=$type;

                //show only inside grid with menu button
                if($type=='fullview'||$type==null){
                    echo $this->load->view('template/certificate_details_content',$data,TRUE);
                }

                if($type=='pdf'){
                    $file_name='Medical Certificate : '.$patient[0]->fullname;
                    $pdfFilePath = $file_name.".pdf"; //generate filename base on id
                    $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                    $content=$this->load->view('template/certificate_details_content',$data,TRUE); //load the template
                    // $pdf->setFooter('{PAGENO}');
                    $pdf->WriteHTML($content);
                    //download it.
                    $pdf->Output();
                }
                
            break;        

            case 'referral-details':
                $m_ref_patient = $this->Ref_patient_model;
                $m_referral = $this->Patient_referral_model;

                $type=$this->input->get('type',TRUE);
                $date = date('Y-m-d');

                $info=$m_referral->get_list(
                    $filter_value,
                    'patient_referral.*, DATE_FORMAT(referral_date, "%m/%d/%Y") as referral_date, 
                    (CASE
                        WHEN DATE_FORMAT(appointment_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(appointment_date, "%m/%d/%Y")
                    END) as appointment_date'
                    )[0];            

                $patient=$m_ref_patient->get_list(
                    $info->ref_patient_id,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age,
                        ref_patient.ref_patient_id as ref_patient_id',
                       array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left'),
                        )
                    );

                $data['data']=$this->Header_settings_model->get_list()[0];
                $data['stamp_data']=$this->Stamp_settings_model->get_list()[0];
                $data['info']=$info;
                $data['patient']=$patient[0];
                $data['type']=$type;

                //show only inside grid with menu button
                if($type=='fullview'||$type==null){
                    echo $this->load->view('template/referral_details_content',$data,TRUE);
                }

                if($type=='pdf'){
                    $file_name='Patient Referral : '.$patient[0]->fullname;
                    $pdfFilePath = $file_name.".pdf"; //generate filename base on id
                    $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                    $content=$this->load->view('template/referral_details_content',$data,TRUE); //load the template
                    // $pdf->setFooter('{PAGENO}');
                    $pdf->WriteHTML($content);
                    //download it.
                    $pdf->Output();
                }
                
            break;                     
        }
    }
}

