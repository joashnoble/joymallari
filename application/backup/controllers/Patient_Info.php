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
                    foreach($_POST as $key => $val)  
                    {  
                        if($key=="nephrorecorddate" || $key=="prehd_new_fistula_assest_date" || $key=="discharge_type_date"){
                            $datetemp = $this->input->post($key);
                            $datetemp = date("Y-m-d",strtotime($datetemp));
                            $m_patient_info->$key=$datetemp;
                        }
                        elseif($key=="prehd_date_time_arrived" || $key=="posthd_date_time_discharged"){
                            $datetemp = $this->input->post($key);
                            $datetemp = date("Y-m-d h:i:s",strtotime($datetemp));
                            $m_patient_info->$key=$datetemp;
                        }
                        else{
                            $m_patient_info->$key=$this->input->post($key);
                        }
                    }
                    $m_patient_info->date_created = date("Y-m-d H:i:s");
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
                foreach($_POST as $key => $val)  
                    {  
                        if($key=="patient_info_id"){
                            $patient_info_id=$this->input->post($key);
                        }
                        elseif($key=="nephrorecorddate" || $key=="prehd_new_fistula_assest_date" || $key=="discharge_type_date"){
                            $datetemp = $this->input->post($key);
                            $datetemp = date("Y-m-d",strtotime($datetemp));
                            $m_patient_info->$key=$datetemp;
                        }
                        elseif($key=="prehd_date_time_arrived" || $key=="posthd_date_time_discharged"){
                            $datetemp = $this->input->post($key);
                            $datetemp = date("Y-m-d h:i:s",strtotime($datetemp));
                            $m_patient_info->$key=$datetemp;
                        }
                        else{
                            $m_patient_info->$key=$this->input->post($key);
                        }
                    }
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
