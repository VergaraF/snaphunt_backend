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
			$my_sql_insert_user_query = "INSERT INTO user (email, password) VALUES ('" . $mail . "', '" . $password . "');";
			echo $my_sql_insert_user_query;

			if ($this->conn->query($my_sql_insert_user_query) === TRUE) {
		   		 echo "New record created successfully";
			} else {
		   		 echo "Error: " . $my_sql_insert_user_query . "<br>" . $conn->error;
			}

		}

	
	}
?>