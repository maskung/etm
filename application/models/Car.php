<?php
class Car extends CI_Model {


	function __construct(){
		parent::__construct();
	}


	/***
	 * find all car
	 */
	function getCars() {

		$sql = "SELECT * FROM car";

    $data = $this->db->query($sql);
		return $data->result();
		//return $data->row();
	}

	function getUserCars($userid) {

		//$sql = "SELECT * FROM `parentxcar` LEFT JOIN car USING(Car_ID) WHERE Parent_ID = ".$userid;
		$sql =  "SELECT * FROM parentxcar pc
						LEFT JOIN car c USING(Car_ID)
						LEFT JOIN carxlicence_plate cl ON c.Car_ID = cl.CarID
						LEFT JOIN licence_plate lp ON cl.Licence_Plate_IDKey = lp.ID_Key
						WHERE Parent_ID = ".$userid;

    $data = $this->db->query($sql);
		return $data->result();
	}

	/***
	 * find  car by the id
	 */
	function getCarByID($id) {

		$sql = "SELECT * FROM car c
						LEFT JOIN carxlicence_plate cl ON c.Car_ID = cl.CarID
						LEFT JOIN licence_plate lp ON cl.Licence_Plate_IDKey = lp.ID_Key
						WHERE CAR_ID = ".$id;

        $data = $this->db->query($sql);

		//return $data->result();
		return $data->row();
	}
}
?>
