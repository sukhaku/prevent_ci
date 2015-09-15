<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends MY_Controller {

    public function index(){
        $this->render_pages('home');
    }
 
    public function cat_news($cat_news){

		$this->load->model('mnews');
    	$data['cat'] = $this->mnews->get_news($cat_news);
    	$this->render_pages('cat_news',$data);
    }
 
    public function news($id_news){
    	$this->load->model('mnews');
    	$data['news'] = $this->mnews->get_news($id_news);
        $this->render_pages('news',$data);
    }


    public function login(){
        if($this->session->userdata('islogin')==FALSE){    		
    	   $this->render_pages('login');
        }else{
            redirect(base_url());
        }     
    }

    public function act_login(){
            $this->load->model('mnews');
            $username = $this->input->post('username');
       		$password = $this->input->post('password');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
       		if ($this->form_validation->run() == FALSE){
                $this->render_pages('login');
            }else{

                $cek = $this->mnews->get_user($username,$password)->num_rows(); 
                if($cek==1){
                    $data = $this->mnews->get_user($username,$password)->row();
                    $this->session->set_userdata('islogin',TRUE);
                    $this->session->set_userdata('username',$data->username);
                    $this->session->set_userdata('password',$data->password);
                    redirect(base_url());        
                }else{
                    $data['keterangan'] = 'User is not Registered';    
                    $this->render_pages('login',$data);                
                }
            }   	
    }


    public function logout(){
        $this->session->sess_destroy();
    	redirect(base_url());
    }
}