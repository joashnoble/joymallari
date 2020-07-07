<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Todo_list_model');
        $this->load->model('Wall_post_model');
        $this->load->model('Homepage_model');

    }
    



    public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);
        $data['todo_list']=$this->Todo_list_model->get_list(array('todo_list.is_deleted'=>FALSE),'todo_list.*',null,'todo_list_id desc');
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['wall_post_list']=$this->Wall_post_model->get_list(null,
                    'wall_post.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_lname) as fullname,user_accounts.photo_path,
                    DATE_FORMAT(wall_post.date, "%M %D, %Y %H:%i:%s") as `readable`',
                    array(
                            array('user_accounts','user_accounts.user_id=wall_post.user_id','left'),
                        ),
                    'wall_post_id desc'
                    );
        $data['patientcount']=$this->Homepage_model->getpatients();
        $data['usercount']=$this->Homepage_model->getusers();
        $data['treatedpatients']=$this->Homepage_model->gettreatedpatients();
        $data['_title']='Dashboard';
        $this->load->view('homepage_view',$data);

    }


}
