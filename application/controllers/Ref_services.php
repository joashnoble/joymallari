<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref_services extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        
        $this->validate_session();
        $this->load->model('Ref_services_model');
        $this->load->model('Ref_service_desc_model');
        $this->load->model('Patient_Info_model');


    }


    public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data_1['active'] = 3;
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation',$data_1,TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title']='Services Reference';
        $data['service_desc']=$this->Ref_service_desc_model->get_list(array('ref_service_desc.is_deleted'=>FALSE));
        $this->load->view('ref_services_view',$data);

    }

    
    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->Ref_services_model->get_list(
                    array('ref_services.is_deleted'=>FALSE),
                    'ref_services.*,ref_service_desc.service_desc',
                       array(
                            array('ref_service_desc','ref_service_desc.ref_service_desc_id=ref_services.ref_service_desc_id','left'),
                        )
                    );
                echo json_encode($response);
                break;
            

                case 'create':
                $m_ref_service = $this->Ref_services_model;
                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }
                date_default_timezone_set("Asia/Manila");
                $date_created = date("Y-m-d");
                $amount = $this->input->post('amount', TRUE);
                /*$m_ref_service->set('code','Servicecode()');*/
                $m_ref_service->code = $this->input->post('ref_service_desc_id', TRUE);
                $m_ref_service->ref_service_desc_id = $this->input->post('ref_service_desc_id', TRUE);
                $m_ref_service->amount = $this->get_numeric_value($amount);
                $m_ref_service->note = $this->input->post('note', TRUE);
                $m_ref_service->date_created = $date_created;
                $m_ref_service->created_by = $this->session->user_id;

                
                $m_ref_service->save();

                $ref_services_id = $m_ref_service->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $ref_services_id); //5069xxx
                $code = 'SV-'.$temp .'-'. $today = date("Y");
                $m_ref_service->code = $code;
                $m_ref_service->modify($ref_services_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Services Successfully Created.';
                $response['row_added'] = $this->Ref_services_model->get_list($ref_services_id,
                    'ref_services.*,ref_service_desc.service_desc',
                       array(
                            array('ref_service_desc','ref_service_desc.ref_service_desc_id=ref_services.ref_service_desc_id','left'),
                        )
                    );
                echo json_encode($response);

                
                break; 

                case 'delete':
                    $m_ref_service = $this->Ref_services_model;

                    $ref_services_id = $this->input->post('ref_services_id', TRUE);
                    
                    $m_ref_service->is_deleted=1;
                    if($m_ref_service ->modify($ref_services_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Services Successfully deleted.';

                        echo json_encode($response);
                }

                break;

                case 'update':
                $m_ref_service = $this->Ref_services_model;
                $date = $this->input->post('bdate', TRUE);
                $date_temp = str_replace('/', '-', $date);
                $date_bdate = date("Y-m-d", strtotime($date_temp));
                date_default_timezone_set("Asia/Manila");
                $date_created = date("Y-m-d");
                $ref_services_id = $this->input->post('ref_services_id', TRUE);
                $amount = $this->input->post('amount', TRUE);
                $m_ref_service->ref_service_desc_id = $this->input->post('ref_service_desc_id', TRUE);
                $m_ref_service->amount = $this->get_numeric_value($amount);
                $m_ref_service->note = $this->input->post('note', TRUE);
                $m_ref_service->date_modified = $date_created;
                $m_ref_service->modified_by = $this->session->user_id;
                $m_ref_service->modify($ref_services_id);
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Services Successfully Updated.';
                $response['row_updated'] = $this->Ref_services_model->get_list($ref_services_id,
                    'ref_services.*,ref_service_desc.service_desc',
                       array(
                            array('ref_service_desc','ref_service_desc.ref_service_desc_id=ref_services.ref_service_desc_id','left'),
                        )
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
