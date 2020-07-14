<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_clinical extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_clinical_model');
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

                $response['data']=$this->Patient_clinical_model->get_list(
                    array('patient_clinical.ref_patient_id'=>$ref_patient_id,'patient_clinical.is_deleted'=>FALSE),
                    'patient_clinical.*, date_format(date_created, "%m/%d/%Y") as date_created'
                       /*array(
                            array('patient_prescription','patient_prescription.ref_patient_id=patient_prescription.ref_patient_id','left'),
                        )*/
                    );
                echo json_encode($response);
                break;
            

                case 'create':
                $m_clinical = $this->Patient_clinical_model;

                foreach($_POST as $key => $val)  
                {  
                    if($key=="date_created"){
                        $datetemp = $this->input->post($key);
                        $datetemp = date("Y-m-d",strtotime($datetemp));
                        $m_clinical->$key=$datetemp;
                    }
                    else{
                        $m_clinical->$key=$this->input->post($key);
                    }
                    
                }
                $m_clinical->created_by = $this->session->user_id;
                $m_clinical->save();
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Clinical Database Successfully Created.';
                    
                echo json_encode($response);

                
                break; 

                case 'delete':
                    $m_clinical = $this->Patient_clinical_model;

                    $patient_clinical_id =$this->input->post('patient_clinical_id',TRUE);
                    
                    $m_clinical->is_deleted=1;
                   /* echo $patient_visiting_record_id;*/
                    if($m_clinical ->modify($patient_clinical_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Clinical Database Successfully deleted.';

                        echo json_encode($response);
                }

                break;

                case 'update':
                $m_clinical = $this->Patient_clinical_model;
                /*$date = $this->input->post('date', TRUE);*/
                $patient_clinical_id = $this->input->post('patient_clinical_id', TRUE);
                foreach($_POST as $key => $val)  
                {  
                    if($key=="patient_clinical_id"){
                        /*echo "patient";*/
                    }
                    elseif($key=="date_created"){
                        $datetemp = $this->input->post($key);
                        $datetemp = date("Y-m-d",strtotime($datetemp));
                        $m_clinical->$key=$datetemp;
                    }
                    else{
                        $m_clinical->$key=$this->input->post($key);
                    }
                }
                $m_clinical->modified_by = $this->session->user_id;
                $m_clinical->modify($patient_clinical_id);
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Clinical Database Successfully Updated.';
                    
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
