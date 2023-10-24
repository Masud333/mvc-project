<?php
class User extends Database {
	
	/**
	 * Checks if a username and password is correct.
	 * The Session variable that remembers the login is set in the UserController
	 */
	public function login(){
		
		$username = htmlspecialchars ( $_POST['username'], ENT_QUOTES);
		$password = htmlspecialchars ( $_POST['user_password'], ENT_QUOTES);
		
		
		$result = $this->select_one ("users", "username", $username);
	
		return password_verify($password, $result['user_password']);

	}

	/**
	 * Registers a new user in the database
	 */
	public function register() {

		$username = htmlspecialchars($_POST['username'], ENT_QUOTES);
		$firstname = htmlspecialchars($_POST['firstname'], ENT_QUOTES);
		$lastname = htmlspecialchars($_POST['lastname'], ENT_QUOTES);
		$password = htmlspecialchars($_POST['user_password'], ENT_QUOTES);
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	
		$check_firstname = $check_lastname = $check_username = $check_password = $repeat_password = false;
	
		// Check if all fields are filled
		if( !empty($username) && !empty($password) && !empty($firstname) && !empty($lastname) ){
			// require_once 'app/core/Database.php';
			
			// Check if firstname is valid
			if( !preg_match("/^[a-zA-Z]*$/", $firstname) ){
				echo " (1) Invalid Firstname! \n";
			} else {$check_firstname = true;}
	
			// Check if lastname is valid
			if( !preg_match("/^[a-zA-Z]*$/", $lastname) ){
				echo " (2) Invalid Lastname!";
			} else {$check_lastname = true;}
			
			// Check if the username is valid
			if (!preg_match('/^[A-Za-z][A-Za-z0-9]{3,31}$/', $username)) {
				echo " (3) Username must start with a letter, contain only letters and numbers, and be between 4 and 32 characters long.";
			} else {
				$stmt = $this->conn->prepare("SELECT * FROM users WHERE username = :username");
				$stmt->execute(array(':username' => $username));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
				if ($stmt->rowCount() > 0) {
					echo "(4) Username already exists";
				} else {$check_username = true;}
			}
	
			// Check if the password is valid
			if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password)) {
				echo " (5) Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
			} else {$check_password = true;}
	
			// Check that both passwords fields match
			if( $password != $_POST['user_password_confirm'] ){
				echo " (6) Passwords do not match!";
			} else {$repeat_password = true;}
			
			
			// Insert the data into the database if all requirements are met
			if ($check_firstname && $check_lastname && $check_username && $check_password && $repeat_password) {

				$stmt = $this->conn->prepare("INSERT INTO users (username, user_password, firstname, lastname) 
				values ('$username', '$hashed_password', '$firstname', '$lastname')");
				$stmt->execute();
		
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				// print_r($result);
		
				// header("Location: login.php");
				// die();
				return $username;
			}
	
	
		} else {
			echo "Please fill in all fields! \n";
		}

		

	}

	/**
	 * Gets all users from the database, but without revealing their password hash
	 */
	public function get_users () {
		$sql = "SELECT user_id, username, firstname, lastname FROM users";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * Gets a single user from the database
	 */
	public function get_user ($user_id) {

		$sql = "SELECT user_id, username FROM users WHERE user_id = :user_id";
		
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}




	public function upload_function() {

		if(isset($_POST['submit'])) {

			// Count total files
			$countfiles = count($_FILES['files']['name']);
			
			// Prepared statement
			$query = "INSERT INTO images (name,image) VALUES(?,?)";
			
			$statement = $this->conn->prepare($query);
			
			// Loop all files
			for($i = 0; $i < $countfiles; $i++) {
			
				// File name
				$filename = $_FILES['files']['name'][$i];
				
				// Location
				$target_file = './public/assets/'.$filename; //   /../../public/assets/
				
				// file extension
				$file_extension = pathinfo(
					$target_file, PATHINFO_EXTENSION);
						
				$file_extension = strtolower($file_extension);
				
				// Valid image extension
				$valid_extension = array("png","jpeg","jpg", "gif", "webp", "bmp");
				
				if(in_array($file_extension, $valid_extension)) {
			
					// Upload file
					if(move_uploaded_file(
						$_FILES['files']['tmp_name'][$i],
						$target_file)
					) {
			
						// Execute query
						$statement->execute(
							array($filename,$target_file));
					}
				}
			}
			echo "File upload successfully";
			return $target_file;
		}
	}

	public function get_images() {
		$stmt = $this->conn->prepare('SELECT * FROM images');
		$stmt->execute();
		$imagelist = $stmt->fetchAll();
		
		return $imagelist;
		}




}

