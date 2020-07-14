<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_admitting_order extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Patient_admitting_order_model');
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

                $response['data']=$this->Patient_admitting_order_model->get_list(
                    array('patient_admitting_order.ref_patient_id'=>$ref_patient_id,'patient_admitting_order.is_deleted'=>FALSE),
                    'patient_admitting_order.*, DATE_FORMAT(date_created, "%m/%d/%Y") as date_created,
                    (CASE
                        WHEN DATE_FORMAT(admitting_order_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(admitting_order_date, "%m/%d/%Y")
                    END) as admitting_order_date'
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_patient_admitting=$this->Patient_admitting_order_model;

                $date = $this->input->post('admitting_order_date',TRUE);
                $ref_patient_id=$this->input->post('ref_patient_id',TRUE);
                $admitting_order_date = date("Y-m-d",strtotime($date));

                function replaceCharsInNumber($num, $chars) {
                     return substr((string) $num, 0, -strlen($chars)) . $chars;
                }

                foreach($_POST as $key => $val)  
                {  
                    $m_patient_admitting->$key=$this->input->post($key);
                }

                $m_patient_admitting->date_created = date("Y-m-d");
                $m_patient_admitting->admitting_order_date = $admitting_order_date;
                $m_patient_admitting->created_by = $this->session->user_id;
                $m_patient_admitting->save();
                $patient_admitting_order_id = $m_patient_admitting->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $ref_patient_id.''.$patient_admitting_order_id); //5069xxx
                $admitting_order_code = 'AO-'.$temp .'-'. $today = date("Y");
                $m_patient_admitting->admitting_order_code = $admitting_order_code;
                $m_patient_admitting->modify($patient_admitting_order_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Patient Admitting Order successfully created.';
                $response['row_added']=$this->Patient_admitting_order_model->get_list(
                    $patient_admitting_order_id,
                    'patient_admitting_order.*,DATE_FORMAT(date_created, "%m/%d/%Y") as date_created,
                    (CASE
                        WHEN DATE_FORMAT(admitting_order_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(admitting_order_date, "%m/%d/%Y")
                    END) as admitting_order_date'
                    ); 
                echo json_encode($response);
                break;

            case 'update':
                $m_patient_admitting=$this->Patient_admitting_order_model;

                $patient_admitting_order_id=$this->input->post('patient_admitting_order_id',TRUE);
                $date = $this->input->post('admitting_order_date',TRUE);
                $admitting_order_date = date("Y-m-d",strtotime($date));

                foreach($_POST as $key => $val)  
                {  
                    $m_patient_admitting->$key=$this->input->post($key);
                }

                $m_patient_admitting->date_modified = date("Y-m-d");
                $m_patient_admitting->admitting_order_date = $admitting_order_date;
                $m_patient_admitting->modified_by = $this->session->user_id;
                $m_patient_admitting->modify($patient_admitting_order_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Patient Admitting Order successfully updated.';
                $response['row_updated']=$this->Patient_admitting_order_model->get_list(
                    $patient_admitting_order_id,
                    'patient_admitting_order.*,DATE_FORMAT(date_created, "%m/%d/%Y") as date_created,
                    (CASE
                        WHEN DATE_FORMAT(admitting_order_date, "%Y") <= "1970"
                        THEN ""
                        ELSE DATE_FORMAT(admitting_order_date, "%m/%d/%Y")
                    END) as admitting_order_date'
                    ); 
                echo json_encode($response);
                break;

            case 'delete':
                $m_patient_admitting=$this->Patient_admitting_order_model;
                $patient_admitting_order_id=$this->input->post('patient_admitting_order_id',TRUE);
                    
                    $m_patient_admitting->is_deleted=1;
                    if($m_patient_admitting ->modify($patient_admitting_order_id)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Patient Admitting Order successfully deleted.';

                        echo json_encode($response);
                    }

                break;                      
        }
    }
}
