<?php
	// Include config file
	require_once '../config/config.php';


	// Define variables and initialize with empty values
	$username = $password = "";

	$username_err = $password_err = "";

	// Process submitted form data
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		// Check if username is empty
		if (empty(trim($_POST['username']))) {
			$username_err = "Please enter a username.";

			// Check if username already exist
		} else {

			// Prepare a select statement
			$sql = 'SELECT id FROM users WHERE username = ?';

			if ($stmt = $mysql_db->prepare($sql)) {
				// Set parmater
				$param_username = trim($_POST['username']);

				// Bind param variable to prepares statement
				$stmt->bind_param('s', $param_username);

				// Attempt to execute statement
				if ($stmt->execute()) {
					
					// Store executed result
					$stmt->store_result();

					if ($stmt->num_rows == 1) {
						$username_err = 'Username sudah terdaftar.';
					} else {
						$username = trim($_POST['username']);
					}
				} else {
					echo "Oops! ${$username}, something went wrong. Please try again later.";
				}

				// Close statement
				$stmt->close();
			} else {

				// Close db connction
				$mysql_db->close();
			}
		}

		// Validate password
	    if(empty(trim($_POST["password"]))){
	        $password_err = "Please enter a password.";     
			}else{
	        $password = trim($_POST["password"]);
	    }
    
		//
		$email = $_POST["email"];
		$notelp = $_POST["notelp"];
		$today = date("Y-m-d H:i:s");
		$param_password = password_hash($password, PASSWORD_DEFAULT);

	    // Check input error before inserting into database

	    if (empty($username_err) && empty($password_err)) {
			$sql = mysqli_query($conn, "INSERT INTO users(username, password, email, notelp, last_login) VALUES('".$username."', '".$param_password."', '".$email."', '".$notelp."', '".$today."')") or die(mysqli_error($conn));

				if($sql){
					header('location: login.php');
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register | Tokoko</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<link rel="shortcut icon" href="https://res.cloudinary.com/izuye/image/upload/v1635379458/prakerin.izzdevs.tk/favicon_pc2sgm.png">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<main>
		<section class="container wrapper">
			<h2 class="login-text" style="font-size: 2rem; font-weight: 800;">Register</h2>
        	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login-email">
        		<div class="input-group <?php (!empty($username_err))?'has_error':'';?>">
        			<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo $username ?>">
					<span class="help-block"><?php echo $username_err;?></span>
        		</div>
				
				<div class="input-group">
        			<input type="text" name="email" id="email" class="form-control" placeholder="Email" value="">
        		</div>

        		<div class="input-group <?php (!empty($password_err))?'has_error':'';?>">
        			<input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $password ?>">
					<span class="help-block"><?php echo $password_err; ?></span>
				</div>

        		<div class="input-group">
        			<input type="number" name="notelp" id="notelp" class="form-control" placeholder="No.Handphone" value="">
        		</div>

        		<div class="input-group">
        			<input type="submit" class="btn btn-block btn-outline-success" value="Register">
        		</div>
        		<p>Sudah punya akun? <a href="login.php">Login</a></p>
        	</form>
		</section>
	</main>
</body>
</html>