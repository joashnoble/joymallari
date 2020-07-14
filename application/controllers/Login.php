<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        
        if($this->session->user_id != '') {
            // redirect(base_url("Homepage"));
            echo '<script>
            window.location.href = "../../Homepage";
            </script>';            
        } 

        $this->load->model('Users_model');
        $this->load->model('User_groups_model');

    }


    public function index()
    {
        $this->create_required_default_data();
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);

        $this->load->view('login_view',$data);

    }

    function create_required_default_data(){

        //create default user : the admin
        $m_users=$this->Users_model;
        $m_users->create_default_user();

        //create default user group : the Super User
        $m_user_groups=$this->User_groups_model;
        $m_user_groups->create_default_user_group();


    }




    function transaction($txn=null){

        switch($txn){

                //****************************************************************************
                case 'validate' :
                    $uname=$this->input->post('uname');
                    $pword=$this->input->post('pword');

                    $users=$this->Users_model;
                    $result=$users->authenticate_user($uname,$pword);

                    if($result->num_rows()>0){//valid username and pword
                        //set session data here and response data

                        $this->session->set_userdata(
                            array(
                                'user_id'=>$result->row()->user_id,
                                'user_group_id'=>$result->row()->user_group_id,
                                'user_fullname'=>$result->row()->user_fullname,
                                'user_email'=>$result->row()->user_email,
                                'user_photo'=>$result->row()->photo_path,
                                'user_group'=>$result->row()->user_group,
                                'date_created'=>$result->row()->date_created,
                                'right_patientinfo_view'=>$result->row()->right_patientinfo_view,
                                'right_patientinfo_create'=>$result->row()->right_patientinfo_create,
                                'right_patientinfo_edit'=>$result->row()->right_patientinfo_edit,
                                'right_patientinfo_delete'=>$result->row()->right_patientinfo_delete,
                                'right_prescription_view'=>$result->row()->right_prescription_view,
                                'right_prescription_create'=>$result->row()->right_prescription_create,
                                'right_prescription_edit'=>$result->row()->right_prescription_edit,
                                'right_prescription_delete'=>$result->row()->right_prescription_delete,
                                'right_medlab_view'=>$result->row()->right_medlab_view,
                                'right_medlab_create'=>$result->row()->right_medlab_create,
                                'right_medlab_edit'=>$result->row()->right_medlab_edit,
                                'right_medlab_delete'=>$result->row()->right_medlab_delete,
                                'right_billing_view'=>$result->row()->right_billing_view,
                                'right_billing_create'=>$result->row()->right_billing_create,
                                'right_billing_edit'=>$result->row()->right_billing_edit,
                                'right_billing_delete'=>$result->row()->right_billing_delete,
                                'right_visiting_view'=>$result->row()->right_visiting_view,
                                'right_visiting_create'=>$result->row()->right_visiting_create,
                                'right_visiting_edit'=>$result->row()->right_visiting_edit,
                                'right_visiting_delete'=>$result->row()->right_visiting_delete,
                                'right_clinicaldb_view'=>$result->row()->right_clinicaldb_view,
                                'right_clinicaldb_create'=>$result->row()->right_clinicaldb_create,
                                'right_clinicaldb_edit'=>$result->row()->right_clinicaldb_edit,
                                'right_medabstract_view'=>$result->row()->right_medabstract_view,
                                'right_medabstract_create'=>$result->row()->right_medabstract_create,
                                'right_medabstract_edit'=>$result->row()->right_medabstract_edit,
                                'right_medabstract_delete'=>$result->row()->right_medabstract_delete,
                                'right_nephro_view'=>$result->row()->right_nephro_view,
                                'right_nephro_create'=>$result->row()->right_nephro_create,
                                'right_nephro_edit'=>$result->row()->right_nephro_edit,
                                'right_nephro_delete'=>$result->row()->right_nephro_delete,
                                'right_labreport_view'=>$result->row()->right_labreport_view,
                                'right_labreport_create'=>$result->row()->right_labreport_create,
                                'right_labreport_edit'=>$result->row()->right_labreport_edit,
                                'right_labreport_delete'=>$result->row()->right_labreport_delete,
                                'right_medcert_view'=>$result->row()->right_medcert_view,
                                'right_medcert_create'=>$result->row()->right_medcert_create,
                                'right_medcert_edit'=>$result->row()->right_medcert_edit,
                                'right_medcert_delete'=>$result->row()->right_medcert_delete,
                                'right_patientref_view'=>$result->row()->right_patientref_view,
                                'right_patientref_create'=>$result->row()->right_patientref_create,
                                'right_patientref_edit'=>$result->row()->right_patientref_edit,
                                'right_patientref_delete'=>$result->row()->right_patientref_delete,
                                'right_services_view'=>$result->row()->right_services_view,
                                'right_services_create'=>$result->row()->right_services_create,
                                'right_services_edit'=>$result->row()->right_services_edit,
                                'right_services_delete'=>$result->row()->right_services_delete,
                                'right_servicedesc_view'=>$result->row()->right_servicedesc_view,
                                'right_servicedesc_create'=>$result->row()->right_servicedesc_create,
                                'right_servicedesc_edit'=>$result->row()->right_servicedesc_edit,
                                'right_servicedesc_delete'=>$result->row()->right_servicedesc_delete,
                                'right_useraccount_view'=>$result->row()->right_useraccount_view,
                                'right_useraccount_create'=>$result->row()->right_useraccount_create,
                                'right_useraccount_edit'=>$result->row()->right_useraccount_edit,
                                'right_useraccount_delete'=>$result->row()->right_useraccount_delete,
                                'right_usergroup_view'=>$result->row()->right_usergroup_view,
                                'right_usergroup_create'=>$result->row()->right_usergroup_create,
                                'right_usergroup_edit'=>$result->row()->right_usergroup_edit,
                                'right_usergroup_delete'=>$result->row()->right_usergroup_delete
                            )
                        );

                        $response['stat']='success';
                        $response['msg']='User successfully authenticated.';

                        echo json_encode($response);

                    }else{ //not valid

                        $response['stat']='error';
                        $response['msg']='Invalid username or password.';
                        echo json_encode($response);

                    }

                    break;
                //****************************************************************************
                case 'logout' :
                    $this->end_session();
                //****************************************************************************


                break;

                default:


        }




    }




}
