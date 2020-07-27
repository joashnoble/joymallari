<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StampSettings extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Users_model');
        $this->load->model('Stamp_settings_model');
        $this->load->model('Header_settings_model');
    }

    public function index() {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data_1['active'] = 8;
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation',$data_1,TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);

        $data['stamp']=$this->Stamp_settings_model->get_list()[0];
        $data['header']=$this->Header_settings_model->get_list()[0];
        $data['_title']='General Information Settings';

        $this->load->view('stamp_settings_view', $data);
    }

    function transaction($txn = null,$filter_value = null) {

        switch($txn){
            case 'list':
                $m_users=$this->Users_model;
                $response['data']=$m_users->get_list(
                    'user_accounts.is_deleted=0 AND user_accounts.user_id!=1',
                    'user_accounts.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as full_name,user_groups.user_group',
                    array(
                        array('user_groups','user_groups.user_group_id=user_accounts.user_group_id','left'),
                        )
                    );
                echo json_encode($response);
                break;

            case 'create':

                $m_users=$this->Users_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('user_name', 'UserName', 'strip_tags|trim|xss_clean|required|is_unique[user_accounts.user_name]');      
                if ($this->form_validation->run() == TRUE) 
                {     
                    $m_users->user_name=$this->input->post('user_name',TRUE);
                    $m_users->user_pword=sha1($this->input->post('user_pword',TRUE));
                    $m_users->user_lname=$this->input->post('user_lname',TRUE);
                    $m_users->user_fname=$this->input->post('user_fname',TRUE);
                    $m_users->user_mname=$this->input->post('user_mname',TRUE);
                    $m_users->user_address=$this->input->post('user_address',TRUE);
                    $m_users->user_email=$this->input->post('user_email',TRUE);
                    $m_users->user_mobile=$this->input->post('user_mobile',TRUE);
                    $m_users->user_telephone=$this->input->post('user_telephone',TRUE);
                    $m_users->user_bdate=date('Y-m-d',strtotime($this->input->post('user_bdate',TRUE)));
                    $m_users->user_group_id=$this->input->post('user_group_id',TRUE);
                    $m_users->photo_path=$this->input->post('photo_path',TRUE);
                    date_default_timezone_set("Asia/Manila");
                    $date_created = date("Y-m-d");
                    $m_users->date_created=$date_created;
                    $m_users->save();

                    $user_account_id=$m_users->last_insert_id();

                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='User account information successfully created.';
                    $response['row_added']=$m_users->get_user_list($user_account_id);
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
                } 
                echo json_encode($response);

                break;

            //****************************************************************************************************************
           
            case 'update':
                $m_stamp=$this->Stamp_settings_model;
                $m_header=$this->Header_settings_model;

                $stamp_id=$this->input->post('stamp_id',TRUE);
                $header_id=$this->input->post('header_id',TRUE);

                // Update Stamp
                $m_stamp->stamp_title = $this->input->post('stamp_title', TRUE);
                $m_stamp->stamp_info = $this->input->post('stamp_info', TRUE);
                $m_stamp->prc_lic_no = $this->input->post('prc_lic_no', TRUE);
                $m_stamp->phic_accre_no = $this->input->post('phic_accre_no', TRUE);
                $m_stamp->ptr_no = $this->input->post('ptr_no', TRUE);
                $m_stamp->s2_no = $this->input->post('s2_no', TRUE);
                $m_stamp->is_show_print = intval($this->input->post('is_show_print', TRUE));
                $m_stamp->modify($stamp_id);

                // Update Header

                $m_header->header_title = $this->input->post('header_title', TRUE);
                $m_header->header_info = $this->input->post('header_info', TRUE);
                $m_header->logo_1_path = $this->input->post('logo_1_path', TRUE);
                $m_header->logo_2_path = $this->input->post('logo_2_path', TRUE);
                $m_header->logo_1_is_show = intval($this->input->post('logo_1_is_show', TRUE));
                $m_header->logo_2_is_show = intval($this->input->post('logo_2_is_show', TRUE));
                $m_header->modify($header_id);


                $response['title']='Success';
                $response['stat']='success';
                $response['msg']='General Settings information successfully updated.';
                $response['row_updated'] = $this->Stamp_settings_model->get_list($stamp_id);
                echo json_encode($response);

                break;
          
            case 'upload':
                $allowed = array('png', 'jpg', 'jpeg','bmp');

                $data=array();
                $files=array();
                $directory='assets/img/logo/';

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
