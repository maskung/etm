<?php
class Student extends CI_Model {


	function __construct(){
		parent::__construct();
	}


	/***
	 * find all student in database
	 */
	function getStudents() {

		$sql = "SELECT * FROM student";

    $data = $this->db->query($sql);

		return $data->result();
		//return $data->row();
	}

	/***
	 * Delete student
	 */
	function delStudent($stdid) {

		$sql = "DELETE FROM student WHERE Student_ID = ".$stdid;

        $data = $this->db->query($sql);

	}

	/***
	 * find all student of parent
	 */
	function getParentStduent($parentid) {

		$sql = "SELECT * FROM `parentxstudent` ps LEFT JOIN student s USING(Student_ID) WHERE ps.Parent_ID = ".$parentid;
    $data = $this->db->query($sql);
		return $data->result();

	}

/***
	 * find all student of parent
	 */
	function insertStduent($data) {

		$data = array('id'		=> $id,
					   'name'	=> $name,
					   'mission'	=> $email,
					   'created'=> date('Y-m-d'));
		$this->db->insert('prize', $data);

	}

}
?>
