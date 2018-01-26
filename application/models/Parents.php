<?php
class Parents extends CI_Model {


	function __construct(){
		parent::__construct();
	}


	/***
	 * find all parent in database
	 */
	function getParent() {

		$sql = "SELECT * FROM parent";

    $data = $this->db->query($sql);

		return $data->result();
		//return $data->row();
	}

	/***
	* get parent by ID
	*/
	function getParentById($id) {

		$data = $this->db->get_where('parent', array('Parent_ID' => $id));

		//return $data->result();
		return $data->row();

	}





}
?>
