<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_laboratory extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_laboratory_model');
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

                $response['data']=$this->Patient_laboratory_model->get_list(
                    array('patient_lab.ref_patient_id'=>$ref_patient_id,'patient_lab.is_deleted'=>FALSE),
                    'patient_lab.*'
                       /*array(
                            array('patient_prescription','patient_prescription.ref_patient_id=patient_prescription.ref_patient_id','left'),
                        )*/
                    );
                echo json_encode($response);
                break;
            

                case 'create':
                $m_laboratory = $this->Patient_laboratory_model;
                /*$date = $this->input->post('date', TRUE);*/
                $date = $this->input->post('date_lab', TRUE);
                $date_lab = date("Y-m-d",strtotime($date));
                $m_laboratory->date_lab = $date_lab;
                $m_laboratory->ref_patient_id = $this->input->post('ref_patient_id', TRUE);
                $m_laboratory->results = $this->input->post('results', TRUE);
                $m_laboratory->photo_path = $this->input->post('photo_path', TRUE);
                $m_laboratory->created_by = $this->session->user_id;
                $m_laboratory->save();
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Laboratory Result Successfully Created.';
                    
                echo json_encode($response);

                
                break; 

                case 'delete':
                    $m_laboratory = $this->Patient_laboratory_model;

                    $patient_lab_id =$this->input->post('patient_lab_id',TRUE);
                    
                    $m_laboratory->is_deleted=1;
                    if($m_laboratory ->modify($patient_lab_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Laboratory Result Successfully deleted.';

                        echo json_encode($response);
                }

                break;

                case 'update':
                $m_laboratory = $this->Patient_laboratory_model;
                /*$date = $this->input->post('date', TRUE);*/
                $patient_lab_id = $this->input->post('patient_lab_id', TRUE);
                $date = $this->input->post('date_lab', TRUE);
                $date_lab = date("Y-m-d",strtotime($date));
                $m_laboratory->date_lab = $date_lab;
                $m_laboratory->results = $this->input->post('results', TRUE);
                $m_laboratory->photo_path = $this->input->post('photo_path', TRUE);
                $m_laboratory->modified_by = $this->session->user_id;
                $m_laboratory->modify($patient_lab_id);
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Laboratory Result Successfully Updated.';
                    
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
