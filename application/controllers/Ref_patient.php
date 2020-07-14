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
        $this->load->library('excel');
        $this->load->library('M_pdf');

    }





    public function index()

    {



        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);

        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);

        $data['_top_navigation']=$this->load->view('template/elements/top_navigationforpatient','',TRUE);

        $data_1['active'] = 2;
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation',$data_1,TRUE);

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



    

    function transaction($txn = null,$filter_value=null) {

        switch ($txn) {

            case 'list':
                $date = date('Y-m-d');
                $response['data']=$this->Ref_patient_model->get_list(
                    array('ref_patient.is_deleted'=>FALSE),
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.dry_weight, DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age',
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

                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate'

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

                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate'

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

        case 'export-patient':
                $excel=$this->excel;
                $date = date('Y-m-d');
                $ref_patient_id =$this->input->get('id',TRUE);

                $transaction=$this->Ref_patient_model->get_list(
                    $ref_patient_id,
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age',
                        array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left')
                        ),
                        'fullname ASC'
                    );

                $excel->setActiveSheetIndex(0);

                //name the worksheet
                $excel->getActiveSheet()->setTitle("Patient Information");

                $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
                $excel->getActiveSheet()->setCellValue('A1',"Patient Information")
                    ->setCellValue('A2',"Exported By : ".$this->session->user_fullname)
                    ->setCellValue('A3',"Date Exported : ".date("Y-m-d h:i:s"));

                //create headers
                $excel->getActiveSheet()->getStyle('A4:T4')->getFont()->setBold(TRUE);
                $excel->getActiveSheet()->setCellValue('A4', 'Patient Name')
                                        ->setCellValue('B4', 'Birthday')
                                        ->setCellValue('C4', 'Gender')
                                        ->setCellValue('D4', 'Civil Status')
                                        ->setCellValue('E4', 'Height')
                                        ->setCellValue('F4', 'Weight')
                                        ->setCellValue('G4', 'Blood Type')
                                        ->setCellValue('H4', 'Age')
                                        ->setCellValue('I4', 'Address')
                                        ->setCellValue('J4', 'Notes')
                                        ->setCellValue('K4', 'Email')
                                        ->setCellValue('L4', 'Telephone')
                                        ->setCellValue('M4', 'Mobile')
                                        ->setCellValue('N4', 'Occupation')
                                        ->setCellValue('O4', 'Company Name')
                                        ->setCellValue('P4', 'Guardian Name')
                                        ->setCellValue('Q4', 'Relationship')
                                        ->setCellValue('R4', 'Guardian Mobile')
                                        ->setCellValue('S4', 'Guardian Telephone')
                                        ->setCellValue('T4', 'Guardian Address');

                $rows=array();
                $patient_name = "";
                foreach($transaction as $x){
                    $patient_name = $x->fullname;
                    $rows[]=array(
                        $x->fullname,
                        $x->bdate,
                        $x->patient_sex,
                        $x->civil_status,
                        $x->patient_height,
                        $x->weight,
                        $x->blood_type,
                        $x->patient_age,
                        $x->address,
                        $x->ref_note,
                        $x->email,
                        $x->telephone,
                        $x->mobile,
                        $x->occupation,
                        $x->company_name,
                        $x->guardian_name,
                        $x->relationship_name,
                        $x->guardian_mobile,
                        $x->guardian_telephone,
                        $x->guardian_address
                    );
                }


                $excel->getActiveSheet()->getStyle('A4:T4')->getFill()
                    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('27ae60');

                $styleArray = array(
                    'font'  => array(
                        'bold'  => true,
                        'color' => array('rgb' => 'FFFFF'),
                        'size'  => 10,
                        'name'  => 'Tahoma'
                    ));

                $excel->getActiveSheet()->getStyle('A4:T4')->applyFromArray($styleArray);

                $excel->getActiveSheet()->fromArray($rows,NULL,'A5');
                //autofit column
                // foreach(range('A','T') as $columnID)
                // {
                //     $excel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(TRUE);
                // }

                $excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(TRUE);

                // Redirect output to a client’s web browser (Excel2007)
                ob_end_clean();
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename='."Patient Information - ".$patient_name.".xlsx".'');
                header('Cache-Control: max-age=0');
                // If you're serving to IE 9, then the following may be needed
                header('Cache-Control: max-age=1');

                // If you're serving to IE over SSL, then the following may be needed
                header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
                header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
                header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
                header ('Pragma: public'); // HTTP/1.0

                $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
                $objWriter->save('php://output');

                break;

        case 'export-patient-masterlist':
                $excel=$this->excel;
                $date = date('Y-m-d');

                $transaction=$this->Ref_patient_model->get_list(
                    array('ref_patient.is_deleted'=>FALSE),
                    'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                        TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age',
                        array(
                            array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                            array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left')
                        ),
                        'fullname ASC'
                    );

                $excel->setActiveSheetIndex(0);

                //name the worksheet
                $excel->getActiveSheet()->setTitle("Patient Masterlist");

                $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
                $excel->getActiveSheet()->setCellValue('A1',"Patient Masterlist")
                    ->setCellValue('A2',"Exported By : ".$this->session->user_fullname)
                    ->setCellValue('A3',"Date Exported : ".date("Y-m-d h:i:s"));

                //create headers
                $excel->getActiveSheet()->getStyle('A4:T4')->getFont()->setBold(TRUE);
                $excel->getActiveSheet()->setCellValue('A4', 'Patient Name')
                                        ->setCellValue('B4', 'Birthday')
                                        ->setCellValue('C4', 'Gender')
                                        ->setCellValue('D4', 'Civil Status')
                                        ->setCellValue('E4', 'Height')
                                        ->setCellValue('F4', 'Weight')
                                        ->setCellValue('G4', 'Blood Type')
                                        ->setCellValue('H4', 'Age')
                                        ->setCellValue('I4', 'Address')
                                        ->setCellValue('J4', 'Notes')
                                        ->setCellValue('K4', 'Email')
                                        ->setCellValue('L4', 'Telephone')
                                        ->setCellValue('M4', 'Mobile')
                                        ->setCellValue('N4', 'Occupation')
                                        ->setCellValue('O4', 'Company Name')
                                        ->setCellValue('P4', 'Guardian Name')
                                        ->setCellValue('Q4', 'Relationship')
                                        ->setCellValue('R4', 'Guardian Mobile')
                                        ->setCellValue('S4', 'Guardian Telephone')
                                        ->setCellValue('T4', 'Guardian Address');

                // $rows=array();
                // foreach($transaction as $x){
                //     $rows[]=array(
                //         $x->fullname,
                //         $x->bdate,
                //         $x->patient_sex,
                //         $x->civil_status,
                //         $x->patient_height,
                //         $x->weight,
                //         $x->blood_type,
                //         $x->patient_age,
                //         $x->address,
                //         $x->ref_note,
                //         $x->email,
                //         $x->telephone,
                //         $x->mobile,
                //         $x->occupation,
                //         $x->company_name,
                //         $x->guardian_name,
                //         $x->relationship_name,
                //         $x->guardian_mobile,
                //         $x->guardian_telephone,
                //         $x->guardian_address
                //     );
                // }

                $excel->getActiveSheet()->getStyle('A4:T4')->getFill()
                    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('27ae60');

                $styleArray = array(
                    'font'  => array(
                        'bold'  => true,
                        'color' => array('rgb' => 'FFFFF'),
                        'size'  => 10,
                        'name'  => 'Tahoma'
                    ));

                $excel->getActiveSheet()->getStyle('A4:T4')->applyFromArray($styleArray);

                $i=5;

                foreach ($transaction as $patient) {    
                    $excel->getActiveSheet()->setCellValue('A'.$i,$patient->fullname);
                    $excel->getActiveSheet()->setCellValue('B'.$i,$patient->bdate);
                    $excel->getActiveSheet()->setCellValue('C'.$i,$patient->patient_sex);
                    $excel->getActiveSheet()->setCellValue('D'.$i,$patient->civil_status);
                    $excel->getActiveSheet()->setCellValue('E'.$i,$patient->patient_height);
                    $excel->getActiveSheet()->setCellValue('F'.$i,$patient->weight);
                    $excel->getActiveSheet()->setCellValue('G'.$i,$patient->blood_type);
                    $excel->getActiveSheet()->setCellValue('H'.$i,$patient->patient_age);
                    $excel->getActiveSheet()->setCellValue('I'.$i,$patient->address);
                    $excel->getActiveSheet()->setCellValue('J'.$i,$patient->ref_note);
                    $excel->getActiveSheet()->setCellValue('K'.$i,$patient->email);
                    $excel->getActiveSheet()->setCellValue('L'.$i,$patient->telephone);
                    $excel->getActiveSheet()->setCellValue('M'.$i,$patient->mobile);
                    $excel->getActiveSheet()->setCellValue('N'.$i,$patient->occupation);
                    $excel->getActiveSheet()->setCellValue('O'.$i,$patient->company_name);
                    $excel->getActiveSheet()->setCellValue('P'.$i,$patient->guardian_name);
                    $excel->getActiveSheet()->setCellValue('Q'.$i,$patient->relationship_name);
                    $excel->getActiveSheet()->setCellValue('R'.$i,$patient->guardian_mobile);
                    $excel->getActiveSheet()->setCellValue('S'.$i,$patient->guardian_telephone);
                    $excel->getActiveSheet()->setCellValue('T'.$i,$patient->guardian_address);
                    $i++;     
                }    
                // $excel->getActiveSheet()->fromArray($rows,NULL,'A5');
                //autofit column
                // foreach(range('A','T') as $columnID)
                // {
                //     $excel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(TRUE);
                // }

                // $excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(TRUE);

                // Redirect output to a client’s web browser (Excel2007)
                // ob_end_clean();
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename="Patient Masterlist.xlsx"');
                header('Cache-Control: max-age=0');
                // If you're serving to IE 9, then the following may be needed
                header('Cache-Control: max-age=1');

                // If you're serving to IE over SSL, then the following may be needed
                header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
                header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
                header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
                header ('Pragma: public'); // HTTP/1.0

                $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
                $objWriter->save('php://output');

                break;

            case 'print-patient': //purchase order
                        // $m_company=$this->Company_model;
                        $date = date('Y-m-d');
                        $type=$this->input->get('type',TRUE);
                        $ref_patient_id =$this->input->get('id',TRUE);

                        $info=$this->Ref_patient_model->get_list(
                            $ref_patient_id,
                            'CONCAT(ref_patient.first_name," ",ref_patient.middle_name," ",ref_patient.last_name) as fullname,ref_patient.*, patient.*,DATE_FORMAT(bdate, "%m/%d/%Y") as bdate, ref_patient.age as patient_age,ref_patient.sex as patient_sex,ref_patient.height as patient_height, ref_relationship.relationship_name,
                                TIMESTAMPDIFF(YEAR,ref_patient.bdate,"'.$date.'") as patient_age',
                                array(
                                    array('patient','patient.ref_patient_id=ref_patient.ref_patient_id','left'),
                                    array('ref_relationship','ref_relationship.ref_relationship_id=ref_patient.ref_relationship_id','left')
                                ),
                                'fullname ASC'
                            );

                        // $company=$m_company->get_list();

                        $data['patient']=$info[0];
                        // $data['company_info']=$company[0];

                        //preview on browser
                        if($type=='preview'){
                            $file_name=$info[0]->fullname;
                            $pdfFilePath = $file_name.".pdf"; //generate filename base on id
                            $pdf = $this->m_pdf->load(); //pass the instance of the mpdf class
                            $content=$this->load->view('template/print_patient_details_content',$data,TRUE); //load the template
                            // $pdf->setFooter('{PAGENO}');
                            $pdf->WriteHTML($content);
                            //download it.
                            $pdf->Output();
                        }



                        break;
        }
    }
}

