<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_visiting extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Patient_visiting_model');
        $this->load->model('Patient_Info_model');
        $this->validate_session();

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

                $response['data']=$this->Patient_visiting_model->get_list(
                    array('patient_visiting_record.ref_patient_id'=>$ref_patient_id,'patient_visiting_record.is_deleted'=>FALSE),
                    'patient_visiting_record.*, date_format(visiting_date, "%m/%d/%Y") as visiting_date, date_format(next_visit_date, "%m/%d/%Y") as next_visit_date'
                       /*array(
                            array('patient_prescription','patient_prescription.ref_patient_id=patient_prescription.ref_patient_id','left'),
                        )*/
                    );
                echo json_encode($response);
                break;


            case 'create':
                $m_visiting = $this->Patient_visiting_model;
                /*$date = $this->input->post('date', TRUE);*/
                $visiting_date_temp = $this->input->post('visiting_date', TRUE);
                $visiting_date = date("Y-m-d",strtotime($visiting_date_temp));

                $next_visit_date_temp = $this->input->post('next_visit_date', TRUE);
                $next_visit_date = date("Y-m-d",strtotime($next_visit_date_temp));

                $m_visiting->visiting_date = $visiting_date;
                $m_visiting->next_visit_date = $next_visit_date;
                $m_visiting->visiting_note = $this->input->post('visiting_note', TRUE);
                $m_visiting->visiting_diagnostics = $this->input->post('visiting_diagnostics', TRUE);
                $m_visiting->visiting_findings = $this->input->post('visiting_findings', TRUE);
                $m_visiting->treatment = $this->input->post('treatment', TRUE);
                $m_visiting->visiting_remarks = $this->input->post('visiting_remarks', TRUE);
                $m_visiting->ref_patient_id = $this->input->post('ref_patient_id', TRUE);
                $m_visiting->created_by = $this->session->user_id;
                $m_visiting->save();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Visiting Record Successfully Created.';

                echo json_encode($response);


                break;

                case 'delete':
                    $m_visiting = $this->Patient_visiting_model;

                    $patient_visiting_record_id =$this->input->post('patient_visiting_record_id',TRUE);

                    $m_visiting->is_deleted=1;
                   /* echo $patient_visiting_record_id;*/
                    if($m_visiting ->modify($patient_visiting_record_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Visiting Successfully deleted.';

                        echo json_encode($response);
                }

                break;

                case 'update':
                $m_visiting = $this->Patient_visiting_model;
                /*$date = $this->input->post('date', TRUE);*/
                $patient_visiting_record_id = $this->input->post('patient_visiting_record_id', TRUE);
                $visiting_date_temp = $this->input->post('visiting_date', TRUE);
                $visiting_date = date("Y-m-d",strtotime($visiting_date_temp));

                $next_visit_date_temp = $this->input->post('next_visit_date', TRUE);
                $next_visit_date = date("Y-m-d",strtotime($next_visit_date_temp));

                $m_visiting->visiting_date = $visiting_date;
                $m_visiting->next_visit_date = $next_visit_date;
                $m_visiting->visiting_note = $this->input->post('visiting_note', TRUE);
                $m_visiting->visiting_diagnostics = $this->input->post('visiting_diagnostics', TRUE);
                $m_visiting->visiting_findings = $this->input->post('visiting_findings', TRUE);
                $m_visiting->treatment = $this->input->post('treatment', TRUE);
                $m_visiting->visiting_remarks = $this->input->post('visiting_remarks', TRUE);
                $m_visiting->modified_by = $this->session->user_id;
                $m_visiting->modify($patient_visiting_record_id);

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
