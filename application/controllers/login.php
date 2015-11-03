<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $csrf = $this->security->get_csrf_hash();
        $this->smarty->assign("csrf", $csrf);
        $this->smarty->view('login.tpl');
    }
    public function do_login(){
        $this->form_validation->set_rules('email-login', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('passwd-login', 'Mật khẩu', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            echo 1;
            $this->smarty->view('login.tpl');
        }
        else
        {
            echo 2;
            //Go to private area
            redirect('/home');
        }
    }
    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email-login');

        //query the database
        $result = $this->user_model->login($email, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
    public function do_register(){

        $this->form_validation->set_rules('real_name', 'Real_name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('passwd', 'Passwd', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|callback_check_email_exist');

        if($this->form_validation->run() == FALSE)
        {
            $this->smarty->view('login.tpl');
        }
        else
        {
            $email = $this->input->post('email');
            $real_name = $this->input->post('real_name');
            $passwd = $this->input->post('passwd');
            $results = $this->user_model->register($email,$real_name,md5($passwd));
            echo "successfull";
        }
    }
    function check_email_exist($email)
    {
        $real_name = $this->input->post('real_name');
        $passwd = $this->input->post('passwd');

        //query the database
        $result = $this->user_model->check_email_exist($email);

        if($result)
        {
            return true;
        }
        else
        {
            echo 6;
            $this->form_validation->set_message('check_email', 'Email này đã được đăng ký.');
            return false;
        }
    }
}
