<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: igor_a
 * Date: 28.05.11
 * Time: 11:17
 * To change this template use File | Settings | File Templates.
 */
 class User extends CI_Controller{

     function __construct(){
         parent::__construct();
       //  session_start();
       //  if($_SESSION['user'])
       //      redirect('/user');
         //if($this->session->userdata('uname')==fals)
     }
     function index(){
           // if($this->session->userdata('uname')==false)
           //     header('location:user/login');
         
        echo ' user home page';
         echo  $this->session->userdata('session_id');
     }
     function signup(){

         $this->load->helper('form');
         if(isset($_POST['login']) && isset($_POST['name']))
         {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name','Name','trim|required|max_length[12]|min_length[4]');
            $this->form_validation->set_rules('login','Login','trim|required|min_length[4]');
            $this->form_validation->set_rules('psw1','Password','required|max_length[24]|min_length[4]');
            $this->form_validation->set_rules('psw2','Password Confirmation','required|matches[psw1]');
             if($this->form_validation ->run()==false)
             {
                     $this->load->view('user/signup_view');
                   //   echo 123;
             }
             else{
                 $this->load->model('users');
                 $r  = $this->users->add($this->input->post('login'),$this->input->post('name'),$this->input->post('psw'));
                 if($r==false){
                    echo 'false';
                 }
                 else{
                     //$_SESSION['user']['login']= $this->input->post('login');
                     //$_SESSION['user']['name'] = $this->input->post('name');
                     $data = array(
                         'uname'=>$this->input->post('name'),
                         'ulogin'=>$this->input->post('login')
                     );
                     $this->session->set_userdata($data);
                     header('location:user');
                 }
             }
        }
         else{

                    $this->load->view('user/signup_view');

         }
     }
     function login(){

            $this->load->model('users');
             $r = $this->users->verify_user(
                 $this->input->post('email'),
                 $this->input->post('password')
             );
         if($r==false){
            $this->load->helper('form');
            $this->load->view('user/login');
         }
     else{
         $_SESSION['user']= $r->user_name;
        //   echo $_SESSION['user'];
         header('location:user');
     }



     }
     function logout(){
			session_destroy();
			header('/');
     }
     function order(){
       
     	if(isset($_POST['items']) && is_array($_POST['items'])){
     		$this->load->model('orders');
     		$r = $this->orders->add_order(1,$_POST['items']);
     		echo $r;
     		
     	}
		 $this->load->model('items');
		 $data['menu'] = $this->items->get_all();
		 $this->load->view('user_order',$data);
     }
     function profile(){
        echo ' user profile page';
     }
     function default_order(){
         echo ' user default page';
     }

 }
