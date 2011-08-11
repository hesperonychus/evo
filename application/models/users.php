<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Model{

    private $table = 'users';

    function __construct(){
        parent::__construct();
    }
    function check_admin(){
        
    }
     function add($login, $name,$password){
         $r = $this
                 ->db
                 ->where('login_user',strtolower($login))
                 ->get($this->table);
         if($r->num_rows!=0)
             return false;
         $data = array(
             'login_user'      =>strtolower($login),
             'psw_user'    =>sha1($password),
             'name_user'        =>$name
         );

         return $this->db->insert($this->table,$data);

    }
    function edit_user(){

    }
    function remove_user(){

    }
    function verify_user($email, $password){
        $r = $this
                ->db
                ->where('user_email',$email)
                ->where('user_password',sha1($password))
                ->limit(1)
                ->get($this->table);
        if($r->num_rows()==0)
            return false;
        return $r->row();

    }
    

}