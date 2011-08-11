<?php
class Items extends CI_Model{

	
	function __construct(){		
		parent::__construct();
	}
	/*
	 * get all active item
	 */
	function get_all(){
		$data = array('items','groups');
		$r = $this
					->db
					->where('isarhive',false)
					->join('groups','group_id=id_group')
                    ->order_by('group_id')
					->get('items');
	if($r->num_rows()>0)
		return $r;
	return false;	
	}
function get_all_group(){
		
		$r = $this->db->get('groups');
	if($r->num_rows()>0)
		return $r;
	return false;	
	}
	
	/*
	 * get arhive items
	 */
	function get_arhive(){
		$r = $this
				->db
				->where('isarhive',true)
				->get('items');
	if($r->num_rows()>0)
		return $r;
	return false;
	}
	/*
	 * add items
	 * @param name
	 * @price
	 * @description
	 */
	function add($group,$name,$description,$price){
		$data = array(
		'name_item'=>$name,
		'discription_item'=>$description,
		'price_item'=>$price,
		'group_id' =>$group
		);
		$r = $this->db->insert('items',$data);
		return $r;
	} 
	
	/*
	 * move item to arhive
	 * @param id item
	 */
	function to_arhive($id){
        $data  = array(
            'isarhive'=>true
        );

		$this->db->where('id_item',$id);
		$r = $this->db->update('items',$data);
        return $r;

		
	}
	/*
	 * to menu
	 * return item to menu
	 * @param id item
	 */
	function to_menu($id){
        $data  = array(
                   'isarhive'=>false
               );

               $this->db->where('id_item',$id);
               $r = $this->db->update('items',$data);
               return $r;

	}
	/*
	 * edit item
	 */
	function edit($id,$name,$description,$price){
		$data = array(
		'name_item'=>$name,
		'discription_item'=>$description,
		'price_item'=>$price 
		);
		$this->db->where('id_item',$id);
		$r = $this->db->update('items',$data);
		return $r;
	}
}
