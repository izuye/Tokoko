<?php
  session_start();


  // Include config
  require_once "../config/config.php";

  //
  $username = $password = '';
  $username_err = $password_err = '';

  // Process submitted form data
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // cek jika form username kosong
    if(empty(trim($_POST['username']))){
      $username_err = 'Please enter username.';
    } else{
      $username = trim($_POST['username']);
    }

    // cek jika form password kosong
    if(empty(trim($_POST['password']))){
      $password_err = 'Please enter your password.';
    } else{
      $password = trim($_POST['password']);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
      // Prepare a select statement
      $sql = 'SELECT id, username, password FROM users WHERE username = ?';

      if ($stmt = $mysql_db->prepare($sql)) {

        // Set parmater
        $param_username = $username;

        // Bind param to statement
        $stmt->bind_param('s', $param_username);

        // Attempt to execute
        if ($stmt->execute()) {

          // Store result
          $stmt->store_result();

          // Check if username exists. Verify user exists then verify
          if ($stmt->num_rows == 1) {
            // Bind result into variables
            $stmt->bind_result($id, $username, $hashed_password);

            if ($stmt->fetch()) {
              if (password_verify($password, $hashed_password)) {

                // Start a new session
                session_start();
				
				//
				$cek = mysqli_query($conn, "SELECT id FROM users WHERE username='$username'");

                // Store data di sessions
                $row = mysqli_fetch_assoc($cek);
                $d = mysqli_fetch_object($cek);
                $_SESSION['loggedin'] = true;
                // profile session
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['email'] = $d->email;
                $_SESSION['notelp'] = $notelp;
                $_SESSION['created_at'] = $d->created_at;
                $_SESSION['last_login'] = $d->last_login;
                if($row['id'] == 1)
                {
                  $_SESSION['admin'] = $username;
                }

        //last login
        $today = date("Y-m-d H:i:s");
        $logintime = "UPDATE users SET last_login = '$today' where username = '$username'";
        mysqli_query($conn, $logintime);

                // Redirect to user to page
                header('location: index.php');
              } else {
                // Display an error for passord mismatch
                $password_err = 'Password salah!';
              }
            }
          } else {
            $username_err = "Username tidak terdaftar.";
          }
        } else {
          echo "Oops! Trjadi kesalahan";
        }
        // Close statement
        $stmt->close();
      }

      // Close connection
      $mysql_db->close();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | Tokoko</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
  <link rel="shortcut icon" href="https://res.cloudinary.com/izuye/image/upload/v1635379458/prakerin.izzdevs.tk/favicon_pc2sgm.png">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <main>
    <section class="container wrapper">
      <h2 class="login-text" style="font-size: 2rem; font-weight: 800;">Login</h2>

          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login-email">
		  <span class="help-block"><?php echo $username_err;?></span>
		  <div class="input-group <?php (!empty($username_err))?'has_error':'';?>">
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo $username ?>">
            </div>
            <span class="help-block"><?php echo $password_err;?></span>
            <div class="input-group <?php (!empty($password_err))?'has_error':'';?>">
			  
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $password ?>">
            </div>

            <div class="input-group">
              <input type="submit" class="btn" value="login">
            </div>
            <p>Belum punya akun? <a href="register.php">Register</a></p>
          </form>
    </section>
  </main>
</body>
</html>