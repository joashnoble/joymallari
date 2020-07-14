<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_prescription extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Patient_prescription_model');
        $this->load->model('Patient_Info_model');
        $this->load->model('Patient_prescription_items_model');
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

                $response['data']=$this->Patient_prescription_model->get_list(
                    array('patient_prescription.ref_patient_id'=>$ref_patient_id,'patient_prescription.is_deleted'=>FALSE),
                    'patient_prescription.*, date_format(date_prescribed, "%m/%d/%Y") as date_prescribed,
                    (CASE
                        WHEN DATE_FORMAT(appointment_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(appointment_date, "%m/%d/%Y")
                    END) as appointment_date'
                       /*array(
                            array('patient_prescription','patient_prescription.ref_patient_id=patient_prescription.ref_patient_id','left'),
                        )*/
                    );
                echo json_encode($response);
                break;

            case 'getitems':
                $patient_prescription_id = $this->input->post('patient_prescription_id', TRUE);

                $response['data']=$this->Patient_prescription_items_model->get_list(
                    array('patient_prescription_items.patient_prescription_id'=>$patient_prescription_id),
                    'patient_prescription_items.*'
                       /*array(
                            array('patient_prescription','patient_prescription.ref_patient_id=patient_prescription.ref_patient_id','left'),
                        )*/
                    );
                echo json_encode($response);
                break;

                case 'create':

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                $m_prescription = $this->Patient_prescription_model;
                date_default_timezone_set("Asia/Manila");
                $date_created = date("Y-m-d");
                $ref_patient_id = $this->input->post('ref_patient_id', TRUE);

                $date = $this->input->post('date_prescribed', TRUE);
                $date_prescribed = date("Y-m-d",strtotime($date));

                $date_appointment = $this->input->post('appointment_date', TRUE);
                $appointment_date = date("Y-m-d",strtotime($date_appointment));

                $m_prescription->date_prescribed = $date_prescribed;
                $m_prescription->appointment_date = $appointment_date;

                $m_prescription->ref_patient_id = $ref_patient_id;
                /*$m_prescription->set('prescription_code','Prescriptioncode()');*/
                $m_prescription->created_by = $this->session->user_id;
                $m_prescription->date_created = $date_created;
                
                $m_prescription->save();
                $patient_prescription_id = $m_prescription->last_insert_id();
                $format = "000000";
                $temp = replaceCharsInNumber($format, $patient_prescription_id); //5069xxx
                $prescription_code = 'PR-'.$temp .'-'. $today = date("Y");
                $m_prescription->prescription_code = $prescription_code;
                $m_prescription->modify($patient_prescription_id);

               /* echo $patient_prescription_id;*/
                $count = $this->input->post('count', TRUE);
                $medication = $this->input->post('medication', TRUE);
                $qty = $this->input->post('qty', TRUE);
                $Am = $this->input->post('Am', TRUE);
                $Nn = $this->input->post('Nn', TRUE);
                $Pm = $this->input->post('Pm', TRUE);
                $Bedtime = $this->input->post('Bedtime', TRUE);
                $remarks = $this->input->post('remarks', TRUE);
                $date = $this->input->post('date_prescribed', TRUE);
                
                 
                        $i=0;      
                        foreach($count as $row)
                        {
                            
                            $data[] = 
                               
                               array(
                                    'patient_prescription_id' => $patient_prescription_id,
                                    'medication' => $medication[$i],
                                    'qty' => $qty[$i],
                                    'Am' => $Am[$i],
                                    'Nn' => $Nn[$i],
                                    'Pm' => $Pm[$i],
                                    'Bedtime' => $Bedtime[$i],
                                    'remarks' => $remarks[$i],
                               );  


                            $i++;
                        }

                
                $this->db->insert_batch('patient_prescription_items', $data); 

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Services successfully created.';
                    
                echo json_encode($response);

                
                break; 

                case 'delete':
                    $m_prescription = $this->Patient_prescription_model;

                    $patient_prescription_id =$this->input->post('patient_prescription_id',TRUE);
                    
                    $m_prescription->is_deleted=1;
                    if($m_prescription ->modify($patient_prescription_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Prescription Successfully deleted.';

                        echo json_encode($response);
                    }

                break;
                
                case 'update':
                $m_prescription = $this->Patient_prescription_model;
                $m_prescription_items = $this->Patient_prescription_items_model;
                $patient_prescription_id = $this->input->post('patient_prescription_id', TRUE);
                $m_prescription_items->delete_via_fk($patient_prescription_id);
                

               
                date_default_timezone_set("Asia/Manila");
                $date_created = date("Y-m-d");

                $date = $this->input->post('date_prescribed', TRUE);

                $date = $this->input->post('date_prescribed', TRUE);
                $date_prescribed = date("Y-m-d",strtotime($date));

                $date_appointment = $this->input->post('appointment_date', TRUE);
                $appointment_date = date("Y-m-d",strtotime($date_appointment));

                $m_prescription->date_prescribed = $date_prescribed;
                $m_prescription->appointment_date = $appointment_date;

                $m_prescription->date_modified = $date_created;
                $m_prescription->modified_by = $this->session->user_id;
                $m_prescription->modify($patient_prescription_id);

                $count = $this->input->post('count', TRUE);
                $medication = $this->input->post('medication', TRUE);
                $qty = $this->input->post('qty', TRUE);
                $Am = $this->input->post('Am', TRUE);
                $Nn = $this->input->post('Nn', TRUE);
                $Pm = $this->input->post('Pm', TRUE);
                $Bedtime = $this->input->post('Bedtime', TRUE);
                $remarks = $this->input->post('remarks', TRUE);
                
                $date = $this->input->post('date_prescribed', TRUE);
                
                 
                        $i=0;      
                        foreach($count as $row)
                        {
                            
                            $data[] = 
                               
                               array(
                                    'patient_prescription_id' => $patient_prescription_id,
                                    'medication' => $medication[$i],
                                    'qty' => $qty[$i],
                                    'Am' => $Am[$i],
                                    'Nn' => $Nn[$i],
                                    'Pm' => $Pm[$i],
                                    'Bedtime' => $Bedtime[$i],
                                    'remarks' => $remarks[$i],
                               );  


                            $i++;
                        }

                
                $this->db->insert_batch('patient_prescription_items', $data); 

                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='Patient Prescription successfully updated.';
                $response['row_updated']=$this->Patient_prescription_model->get_list(
                    $patient_prescription_id,
                    'patient_prescription.*, date_format(date_prescribed, "%m/%d/%Y") as date_prescribed,
                    (CASE
                        WHEN DATE_FORMAT(appointment_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(appointment_date, "%m/%d/%Y")
                    END) as appointment_date');

                echo json_encode($response);
                break;            
        }
    }
}
