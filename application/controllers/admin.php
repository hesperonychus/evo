<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        
    }

	public function index(){
/*
        if(isset($_SESSION['adm']) )
        {
            header('location:index.php/dmin/login');
        }
        else
        {
		$this->load->view('page.php');
        }*/
        $this->load->view('admin/home');
	}
    public function login(){
        if(isset($_POST['name']) && isset($_POST['psw']) )
        {
            $users = $this->load->model('Users');
            $this->users->name = $_POST['name'];
            $this->users->password = md5($_POST['psw']);
            $flag = $this->users->check_admin();
            
        }
        $this->load->view('admin_login.php');
    }
    public function logout(){

    }
    function items(){
        $this->load->helper('url');
    	$this->load->model('items');
		$data['items'] = $this->items->get_all();
		$data['group'] = $this->items->get_all_group();
    	$this->load->view('admin/items',$data);
    }
    function arhive(){
              $this->load->helper('url');
    	$this->load->model('items');
		$data['items'] = $this->items->get_arhive();
		$data['group'] = $this->items->get_all_group();
    	$this->load->view('admin/arhive',$data);
    }
    function ajax() {
    	if(!isset($_POST) || !isset($_POST['action']))
    		die;
		switch ($_POST['action'])
		{
			case 'edit':
				if(!is_numeric($_POST['price']) || !is_numeric($_POST['id']) )
				{
					echo 'invalid';die;
				}
				$this->load->model('items');
				$this->items->edit($_POST['id'],$_POST['name'],$_POST['discription'],$_POST['price']);
				echo 'ok';
				break;
			case 'add':
				if(!is_numeric($_POST['price']) || !is_numeric($_POST['group']) )
				{
					echo 'invalid';die;
				}
				$this->load->model('items');
				echo $this->items->add($_POST['group'],$_POST['name'],$_POST['discription'],$_POST['price']);
				break;
            case 'arhive':
				if(!is_numeric($_POST['id']) )
				{
					echo 'invalid';die;
				}
				$this->load->model('items');
				echo $this->items->to_arhive($_POST['id']);
				break;
		}
    		
    	
    	
    }


}
