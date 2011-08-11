
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evo extends CI_Controller{

	public function index()
	{
        $this->load->helper('form');
		$this->load->view('index_view.php');
	}
	function reg()
	{
		$this->load->helper('form');
		if($_POST)
		{
			$psw1 = $_POST['psw1'];
			$psw2 = $_POST['psw2'];
			$name = $_POST['name'];
			if($psw1!=$psw2){
				$data['error']='Password error';
				$this->load->view('reg_page.php',$data);
			
			}
		/*		$users = new Users();
				$this-->users->name=$name;
				$this->users->password = md5($psw1);
				$this->users->add();*/			
			
		}
		else{
			$this->load->view('reg_page.php');
		}
	}
	function login()
	{
	}
	function loout()
	{
		
	}
	
	function profile()
	{
	}
}
/*
 * таблица новости
 * при добавлении блюда новость новое блюююююдо появтлось
 * при архивировании блюда новость блюдо 123 ппокинуло нас
 * при возрате из архива новость встречайте старых дрцзей
 * при изменнии цены новость цена 1223 изменилась
 * */