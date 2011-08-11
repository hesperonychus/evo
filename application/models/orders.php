<?php
class Orders extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function add_order($user_id, $items){
		
		for($i=0;$i<sizeof($items);$i++){
			$data = array(
					'user_id'=>$user_id,
					'item_id'=>$items[$i],
					'date_order'=>'CURDATE'
			);
			$this->db->insert('orders',$data);
		}
	}
	function get_order_user($id_user){
		
	}
	function edit_order($id_user){
		
	}
	function get_current_day_order(){
		
	}
	function remove_order($id_user){
		
	}
}