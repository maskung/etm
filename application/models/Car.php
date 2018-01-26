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

	function insertCar($data) {
		
		$this->db->trans_start();

		$sql = "INSERT INTO `licence_plate` (`ID_Key`, `Text`, `Province`, `Create_timestamp`, `Modified_timestamp`) VALUES (NULL, '".$data['Text']."', NULL, CURRENT_TIMESTAMP, NULL);";
		$this->db->query($sql);

		$this->db->select_max('ID_Key');
		$maxid = $this->db->get('licence_plate');
		$maxlicense = $maxid->row();

		$sql = "INSERT INTO `car` (`CAR_ID`, `Brand`, `Version`, `Color`, `Created_timestamp`, `Modified_timestamp`, `Picture_Path`) VALUES (NULL, '".$data['Brand']."', NULL, '".$data['Color']."', CURRENT_TIMESTAMP, NULL, NULL);";
		$this->db->query($sql);

		$this->db->select_max('CAR_ID');
		$maxcar = $this->db->get('car');
		$maxcarid = $maxcar->row();

		$sql = "INSERT INTO `carxlicence_plate` (`CarID`, `Licence_Plate_IDKey`, `Create_timestamp`)
		VALUES ('".$maxcarid->CAR_ID."', '".$maxlicense->ID_Key."', CURRENT_TIMESTAMP);";
		$this->db->query($sql);

		$sql = "INSERT INTO `parentxcar` (`Parent_ID`, `Car_ID`, `Create_timestamp`)
		VALUES ('".$data['Parent_ID']."', '".$maxcarid->CAR_ID."', CURRENT_TIMESTAMP);";
		$this->db->query($sql);

		$this->db->trans_complete();
	}
}
?>
