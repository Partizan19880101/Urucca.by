<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("mysql5.activeby.net", "Partizan88", "Partizan88", "user2064533_news");
		$mysqli->query("SET NAMES 'utf8'");
	}
	function closeDB () {
		global $mysqli;
		$mysqli->close ();
}
	function getNews ($limit, $id) {
		global $mysqli;
		connectDB();
	
		$result = $mysqli->query("SELECT * FROM `news`");
		closeDB();
		return resultToArray ($result);
	}
	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		 return $array;
	}
?>