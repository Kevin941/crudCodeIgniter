<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	private $limit = 10;

	public function __construct(){
		parent::__construct();
        //Cargamos las librerias necesarias
		$this->load->model('user_model');
		$this->load->library('pagination');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		if(!$this->session->userdata('username')){
            redirect('/user/log_in', 'refresh');
        }
		$userlist =$this->user_model->index($this->limit);
        $total_rows=$this->user_model->count();

        $config['total_rows']=$total_rows;
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $config['base_url']=site_url("user/index");

        $this->pagination->initialize($config);
        $page_link =$this->pagination->create_links();

        $this->load->view('admin/headerNav'); 
        $this->load->view('admin/user',compact('userlist', 'page_link') );
		
	}

    public function about()
    {
        if(!$this->session->userdata('username')){
            redirect('/user/log_in', 'refresh');
        }
        $this->load->view('admin/headerNav');                 
        $this->load->view('admin/about');                 
    }

	 function insert(){

        if(!$this->session->userdata('username')){
            redirect('/user/log_in', 'refresh');
        }
        $param['username']=$this->input->post("username",TRUE);
        $param['surname']=$this->input->post("surname",TRUE);
        $param['password']=$this->input->post("password",TRUE);
        $param['country']=$this->input->post("country",TRUE);
        $param['email']=$this->input->post("email",TRUE);
        $param['role']=$this->input->post("role",TRUE);

            //validate

        $this->form_validation->set_rules('username', 'username','trim|required', array('required'=>'Please Input'));
        $this->form_validation->set_rules('surname', 'surname','trim|required', array('required'=>'Please Input'));
        $this->form_validation->set_rules('password', 'password','trim|required', array('required'=>'Please Input'));
        $this->form_validation->set_rules('country', 'country','trim|required', array('required'=>'Please Input'));
        $this->form_validation->set_rules('email', 'email','trim|required', array('required'=>'Please Input'));
        $this->form_validation->set_rules('role', 'role','trim|required', array('required'=>'Please Input'));

        if($this->form_validation->run() !=false){
        	$this->user_model->insert($param);
            redirect('/user', 'refresh');
        }else{
            $this->load->view('admin/headerNav'); 
            $this->load->view('admin/create_user');             	
        }
            

        }

        function delete($x =''){
            if(!$this->session->userdata('username')){
            redirect('/user/log_in', 'refresh');
            }
        	if (!empty($x)) {
	            $data['condition']=array('id'=>preg_replace('#[^0-9]#', '', $x));
	            $this->user_model->delete($data);
                redirect('/user', 'refresh');
	        }else{
            	redirect('/user', 'refresh');
	        }
        }


        function view($x =''){
            if(!$this->session->userdata('username')){
            redirect('/user/log_in', 'refresh');
            }
            if (!empty($x)) {
            	$data['condition']=array('id'=>preg_replace('#[^0-9]#', '', $x));
	            $result = $this->user_model->view($data);
	            $data =array('index'=>$result);
                $this->load->view('admin/headerNav'); 
	            $this->load->view('admin/edit_user', $data);
            }else{
            	redirect('/user', 'refresh');
            }
            
        }

        
        function update(){
            if(!$this->session->userdata('username')){
            redirect('/user/log_in', 'refresh');
            }
        	
            $this->form_validation->set_rules('id', 'id','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('username', 'username','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('surname', 'surname','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('password', 'password','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('country', 'country','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('email', 'email','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('role', 'role','trim|required', array('required'=>'Please Input'));
			
             if($this->form_validation->run() !=false){
             	$param['id']=$this->input->post("id",TRUE);
	            $param['username']=$this->input->post("username",TRUE);
	            $param['surname']=$this->input->post("surname",TRUE);
	            $param['password']=$this->input->post("password",TRUE);
                $param['country']=$this->input->post("country",TRUE);
                $param['email']=$this->input->post("email",TRUE);
                $param['role']=$this->input->post("role",TRUE);

                $result = $this->user_model->update($param);

                redirect('/user', 'refresh');
            }else{
                $this->load->view('admin/headerNav'); 
                $this->view($id);
            }
        }


        function search(){
            if(!$this->session->userdata('username')){
            redirect('/user/log_in', 'refresh');
            }
            $key="";
            if ($this->input->post("key",TRUE)) {
                $key =$this->input->post("key",TRUE);
                $this->session->set_userdata('key', $key);
            }elseif ($this->session->userdata('key')) {
                $key =$this->session->userdata('key');
            }
           	
            if(!empty($key)){
                $userlist =$this->user_model->search($this->limit, $key);
		        $total_rows=$this->user_model->count_search($key);

		        $config['total_rows']=$total_rows;
		        $config['per_page']=$this->limit;
		        $config['uri_segment']=3;
		        $config['base_url']=site_url("user/search");

		       
		        $this->pagination->initialize($config);

		        $page_link =$this->pagination->create_links();
                $this->load->view('admin/headerNav'); 
		        $this->load->view('admin/user',compact('userlist', 'page_link') );
            }else{
            	$this->index();
            }

        }
        function log_in(){

               $this->form_validation->set_rules('email', 'email', 'trim|required');
               $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
             
               if($this->form_validation->run() == FALSE)
               {
                 //Field validation failed.  User redirected to login page
                 $this->load->view('admin/login');
               }
               else
               {
                //Go to the admin menu
                redirect('user', 'refresh');
               }
        }
        function check_database($password)
         {
           //Field validation succeeded.  Validate against database
           $email = $this->input->post('email');
         
           //query the database
           $result = $this->user_model->login($email, $password);
         
           if($result)
           {
             
             foreach($result as $row)
             {               
               $this->session->set_userdata('username', $row->username);
               $this->session->set_userdata('role', $row->role);

             }
             return TRUE;
           }
           else
           {
             $this->form_validation->set_message('check_database', 'Invalid username or password');
             return false;
           }
         }

        function logout()
        {
           $this->session->unset_userdata('username');
           $this->session->unset_userdata('role');
           session_destroy();
           //$this->load->view('admin/login');
           redirect('user/log_in', 'refresh');
         }        

}