<?php

	class dataBaseHandler{

		private $servername_sql;
		private $username_sql;
		private $password_sql;
		private $dbname;
		private $conn;

		function __construct(){
			$this->servername_sql = "localhost";
			$this->username_sql = "root";
			$this->password_sql = "";
			$this->dbname = "snaphunt";
		}

		function connectToDB(){
			$this->conn = new mysqli($this->servername_sql, $this->username_sql, $this->password_sql, $this->dbname);

			// Check connection
			if ($this->conn->connect_error) {
		  	  die("Connection failed: " . $this->conn->connect_error);
			}
			echo "Connected successfully";
		}
		


		function insertUser($mail, $password){
			$sql_query = "INSERT INTO user (email, password) " .
										"VALUES ('" . $mail . "', '" . $password . "');";

			if ($this->conn->query($sql_query) === TRUE) {
		   		 echo "New user created successfully";
			} else {
		   		 echo "Error: " . $sql_query . "<br>" . $this->conn->error;
			}

		}

		function insertTresure($user_id, $found_by_user_id, $picture_url, $tags, $lati, $longi, $locality){
			$sql_query = "INSERT INTO treasure (user_id, found_by_user_id, picture_url, tags, lat, longi, locality) " .
			             "VALUES ('" . $user_id . "', '" . $found_by_user_id ."', '" . $picture_url ."', '" . $tags ."', '" . $lati ."', '" . $longi ."', '" . $locality . "');";
			if ($this->conn->query($sql_query) === TRUE) {
		   		 echo "New treasure created successfully";
			} else {
		   		 echo "Error: " . $sql_query . "<br>" . $this->conn->error;
			}
		}

	
	}
?>