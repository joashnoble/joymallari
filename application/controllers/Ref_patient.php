<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Ref_patient extends CORE_Controller {



    function __construct()

    {

        parent::__construct('');
        $this->validate_session();
        $this->load->model('Ref_patient_model');
        $this->load->model('Patient_Info_model');
        $this->load->model('Ref_service_desc_model');
        $this->load->model('Company_info_model');

    }





    public function index()

    {



        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);

        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);

        $data['_top_navigation']=$this->load->view('template/elements/top_navigationforpatient','',TRUE);

        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);

        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);

        $data['header_1']=$this->load->view('template/elements/header_1','',TRUE);

        $data['header_2']=$this->load->view('template/elements/header_2','',TRUE);

        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);

        $data['company']=$this->Company_info_model->get_list();

        $data['service_desc']=$this->Ref_service_desc_model->get_list(

                    array('ref_service_desc.is_deleted'=>FALSE),

                    'ref_service_desc.service_desc,ref_service_desc.ref_service_desc_id,'

                       /*array(

                            array('patient_prescription','patient_prescription.patient_info_id=patient_prescription.patient_info_id','left'),

                        )*/

                    );

        $data['patient_name']=$this->Ref_patient_model->get_list(

                    array('ref_patient.is_deleted'=>FALSE),

                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*'

                       /*array(

                            array('patient_prescription','patient_prescription.patient_info_id=patient_prescription.patient_info_id','left'),

                        )*/

                    );

        $data['_title']='Patient General Info';

        $this->load->view('ref_patient_view',$data);



    }



    

    function transaction($txn = null) {

        switch ($txn) {

            case 'list':

                $response['data']=$this->Ref_patient_model->get_list(

                    array('ref_patient.is_deleted'=>FALSE),

                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.dry_weight',

                       array(

                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),

                        )

                    );

                echo json_encode($response);

                break;

            



                case 'create':

                $m_ref_patient = $this->Ref_patient_model;

                /*$date = $this->input->post('date', TRUE);*/

                $date = $this->input->post('bdate', TRUE);

                $date_temp = str_replace('/', '-', $date);

                $date_bdate = date("Y-m-d", strtotime($date));

                date_default_timezone_set("Asia/Manila");

                $date_created = date("Y-m-d");

                $from = new DateTime($date_bdate);

                $to = new DateTime('today');

                $years = $from->diff($to)->y;

                $m_ref_patient->first_name = $this->input->post('first_name', TRUE);

                $m_ref_patient->middle_name = $this->input->post('middle_name', TRUE);

                $m_ref_patient->last_name = $this->input->post('last_name', TRUE);

                $m_ref_patient->bdate = $date_bdate;

                $m_ref_patient->sex = $this->input->post('sex', TRUE);

                $m_ref_patient->civil_status = $this->input->post('civil_status', TRUE);

                $m_ref_patient->height = $this->input->post('height', TRUE);

                $m_ref_patient->weight = $this->input->post('weight', TRUE);

                $m_ref_patient->blood_type = $this->input->post('blood_type', TRUE);

                $m_ref_patient->email = $this->input->post('email', TRUE);

                $m_ref_patient->occupation = $this->input->post('occupation', TRUE);

                $m_ref_patient->company_name = $this->input->post('company_name', TRUE);

                $m_ref_patient->address = $this->input->post('address', TRUE);

                $m_ref_patient->ref_note = $this->input->post('ref_note', TRUE);

                $m_ref_patient->telephone = $this->input->post('telephone', TRUE);

                $m_ref_patient->mobile = $this->input->post('mobile', TRUE);

                $m_ref_patient->address = $this->input->post('address', TRUE);



                $m_ref_patient->guardian_name = $this->input->post('guardian_name', TRUE);

                $m_ref_patient->ref_relationship_id = $this->input->post('ref_relationship_id', TRUE);

                $m_ref_patient->guardian_mobile = $this->input->post('guardian_mobile', TRUE);

                $m_ref_patient->guardian_telephone = $this->input->post('guardian_telephone', TRUE);

                $m_ref_patient->guardian_address = $this->input->post('guardian_address', TRUE);



                $m_ref_patient->age = $years;

                $m_ref_patient->date_created = $date_created;

                $m_ref_patient->created_by = $this->session->user_id;



                

                $m_ref_patient->save();



                $ref_patient_id = $m_ref_patient->last_insert_id();

                

                $response['title'] = 'Success!';

                $response['stat'] = 'success';

                $response['msg'] = 'Patient Reference Successfully Created.';

                $response['row_added'] = $this->Ref_patient_model->get_list($ref_patient_id,

                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*'

                    );

                echo json_encode($response);



                

                break; 



                case 'delete':

                    $m_ref_patient = $this->Ref_patient_model;



                    $ref_patient_id = $this->input->post('ref_patient_id', TRUE);

                    

                    $m_ref_patient->is_deleted=1;

                    if($m_ref_patient ->modify($ref_patient_id)){

                        $response['title']='Success!';

                        $response['stat']='success';

                        $response['msg']='Patient Reference Successfully deleted.';



                        echo json_encode($response);

                }



                break;



                case 'update':

                date_default_timezone_set("Asia/Manila");

                $m_ref_patient = $this->Ref_patient_model;

                $date = $this->input->post('bdate', TRUE);
                $date_temp = str_replace('/', '-', $date);
                $date_bdate = date("Y-m-d", strtotime($date));

                $date_created = date("Y-m-d");
                $from = new DateTime($date_bdate);
                $to = new DateTime('today');

                $years = $from->diff($to)->y;

                if ($date != null || $date != ""){
                    $m_ref_patient->bdate = $date_bdate;
                    $m_ref_patient->age = $years;
                }
                else{
                    $m_ref_patient->bdate = "";
                    $m_ref_patient->age = "";
                }

                $ref_patient_id = $this->input->post('ref_patient_id', TRUE);

                $m_ref_patient->first_name = $this->input->post('first_name', TRUE);

                $m_ref_patient->middle_name = $this->input->post('middle_name', TRUE);

                $m_ref_patient->last_name = $this->input->post('last_name', TRUE);

                $m_ref_patient->sex = $this->input->post('sex', TRUE);

                $m_ref_patient->civil_status = $this->input->post('civil_status', TRUE);

                $m_ref_patient->height = $this->input->post('height', TRUE);

                $m_ref_patient->weight = $this->input->post('weight', TRUE);

                $m_ref_patient->blood_type = $this->input->post('blood_type', TRUE);

                $m_ref_patient->email = $this->input->post('email', TRUE);

                $m_ref_patient->occupation = $this->input->post('occupation', TRUE);

                $m_ref_patient->company_name = $this->input->post('company_name', TRUE);



                $m_ref_patient->address = $this->input->post('address', TRUE);

                $m_ref_patient->ref_note = $this->input->post('ref_note', TRUE);

                $m_ref_patient->telephone = $this->input->post('telephone', TRUE);

                $m_ref_patient->mobile = $this->input->post('mobile', TRUE);

                $m_ref_patient->address = $this->input->post('address', TRUE);



                $m_ref_patient->guardian_name = $this->input->post('guardian_name', TRUE);

                $m_ref_patient->ref_relationship_id = $this->input->post('ref_relationship_id', TRUE);

                $m_ref_patient->guardian_mobile = $this->input->post('guardian_mobile', TRUE);

                $m_ref_patient->guardian_telephone = $this->input->post('guardian_telephone', TRUE);

                $m_ref_patient->guardian_address = $this->input->post('guardian_address', TRUE);


                $m_ref_patient->date_modified = $date_created;

                $m_ref_patient->modified_by = $this->session->user_id;

                $m_ref_patient->modify($ref_patient_id);

                

                $response['title'] = 'Success!';

                $response['stat'] = 'success';

                $response['msg'] = 'Patient Reference Successfully Updated.';

                $response['row_updated'] = $this->Ref_patient_model->get_list($ref_patient_id,

                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*'

                    );



                echo json_encode($response);



                break;



                case 'upload':

                $allowed = array('png', 'jpg', 'jpeg','bmp');



                $data=array();

                $files=array();

                $directory='assets/laboratory/';



                foreach($_FILES as $file){



                    $server_file_name=uniqid('');

                    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

                    $file_path=$directory.$server_file_name.'.'.$extension;

                    $orig_file_name=$file['name'];



                    if(!in_array(strtolower($extension), $allowed)){

                        $response['title']='Invalid!';

                        $response['stat']='error';

                        $response['msg']='Image is invalid. Please select a valid photo!';

                        die(json_encode($response));

                    }



                    if(move_uploaded_file($file['tmp_name'],$file_path)){

                        $response['title']='Success!';

                        $response['stat']='success';

                        $response['msg']='Image successfully uploaded.';

                        $response['photo_path']=$file_path;

                        echo json_encode($response);

                    }

                }

                break;        

        }



    }





}

