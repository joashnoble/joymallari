<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_billing extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_billing_model');
        $this->load->model('Patient_Info_model');
        $this->load->model('patient_billing_items_model');
        

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

                $response['data']=$this->Patient_billing_model->get_list(
                    array('patient_billing.ref_patient_id'=>$ref_patient_id,'patient_billing.is_deleted'=>FALSE),
                    'patient_billing.*, date_format(billing_date, "%m/%d/%Y") as billing_date'
                       /*array(
                            array('patient_prescription','patient_prescription.ref_patient_id=patient_prescription.ref_patient_id','left'),
                        )*/
                    );
                echo json_encode($response);
                break;
                
                case 'getitems':
                $patient_billing_id = $this->input->post('patient_billing_id', TRUE);

                $response['data']=$this->patient_billing_items_model->get_list(
                    array('patient_billing_items.patient_billing_id'=>$patient_billing_id),
                    'patient_billing_items.*,ref_service_desc.service_desc',
                       array(
                            array('ref_service_desc','ref_service_desc.ref_service_desc_id=patient_billing_items.ref_service_desc_id','left'),
                        )
                    );
                echo json_encode($response);
                break;

                case 'create':

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $m_billing = $this->Patient_billing_model;
                /*$date = $this->input->post('date', TRUE);*/
                $date = $this->input->post('billing_date', TRUE);
                $billing_date = date("Y-m-d",strtotime($date));
                $m_billing->ref_patient_id = $this->input->post('ref_patient_id', TRUE);
                $m_billing->billing_date = $billing_date;
                $m_billing->created_by = $this->session->user_id;
                $m_billing->save();

                $patient_billing_id = $m_billing->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $patient_billing_id); //5069xxx
                $billing_code = 'BR-'.$temp .'-'. $today = date("Y");

                $m_billing->billing_code = $billing_code;
                $m_billing->modify($patient_billing_id);

               /* echo $patient_prescription_id;*/
                $count = $this->input->post('count', TRUE);
                $ref_service_desc_id = $this->input->post('ref_service_desc_id', TRUE);
                $qty = $this->input->post('qty', TRUE);
                $amount = $this->input->post('amount', TRUE);
                $total = $this->input->post('total', TRUE);
                
                 
                        $i=0;      
                        foreach($count as $row)
                        {
                            
                            $data[] = 
                               
                               array(
                                    'patient_billing_id' => $patient_billing_id,
                                    'ref_service_desc_id' => $ref_service_desc_id[$i],
                                    'qty' => $this->get_numeric_value($qty[$i]),
                                    'amount' => $this->get_numeric_value($amount[$i]),
                                    'total' => $this->get_numeric_value($total[$i]),
                               );  


                            $i++;
                        }

                
                $this->db->insert_batch('patient_billing_items', $data); 
                
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Billing Info Successfully Created.';
                    
                echo json_encode($response);

                
                break;

                case 'delete':
                    $m_patient_billing=$this->Patient_billing_model;

                    $patient_billing_id =$this->input->post('patient_billing_id',TRUE);
                    
                    $m_patient_billing->is_deleted=1;
                    if($m_patient_billing ->modify($patient_billing_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Billing Successfully deleted.';

                        echo json_encode($response);
                }

                break;

            case 'update':
                $m_billing = $this->Patient_billing_model;
                $m_billing_items = $this->patient_billing_items_model;
                /*$date = $this->input->post('date', TRUE);*/
                $patient_billing_id = $this->input->post('patient_billing_id', TRUE);
                $m_billing_items->delete_via_fk($patient_billing_id);

                $date = $this->input->post('billing_date', TRUE);
                $billing_date = date("Y-m-d",strtotime($date));

                $m_billing->billing_date = $billing_date;
                $m_billing->modified_by = $this->session->user_id;
                $m_billing->modify($patient_billing_id);

                $count = $this->input->post('count', TRUE);
                $ref_service_desc_id = $this->input->post('ref_service_desc_id', TRUE);
                $qty = $this->input->post('qty', TRUE);
                $amount = $this->input->post('amount', TRUE);
                $total = $this->input->post('total', TRUE);
                
                 
                        $i=0;      
                        foreach($count as $row)
                        {
                            
                            $data[] = 
                               
                               array(
                                    'patient_billing_id' => $patient_billing_id,
                                    'ref_service_desc_id' => $ref_service_desc_id[$i],
                                    'qty' => $this->get_numeric_value($qty[$i]),
                                    'amount' => $this->get_numeric_value($amount[$i]),
                                    'total' => $this->get_numeric_value($total[$i]),
                               );  


                            $i++;
                        }

                
                $this->db->insert_batch('patient_billing_items', $data); 

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Billing Info Successfully Created.';
                    
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
                        $response['path']=$file_path;
                        echo json_encode($response);
                    }
                }
                break;        
        }
    }
}
