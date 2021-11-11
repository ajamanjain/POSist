<?php

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'include/db_con.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from adminlogin where Name ='$name' AND Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['Email'] = $email;
        $_SESSION['Name'] = $name;
        header("location: admin/index.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin | Login</title>
	<link rel="stylesheet" type="text/css" href="css/admin_login.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

<body id="page-login">
	<div class="login-container">
		
		<div class="login-box">
			<div class="login-form">
			<h2 style="color:black;">Admin Login	 </h2>
			<br>
				<form method="post">
      <?php if($showError){ ?>
<div class="alert alert-danger" role="alert" style="border-radius: 50px;">
 <?php echo htmlentities($showError);?></div>
<?php } ?>

				<input type="text" placeholder=" Name" name="name" required="" autocomplete="off">
				<br>
				<input type="email" placeholder="Email" name="email" required="" autocomplete="off">
				<br>
				<input type="password" placeholder="Password" name="password" required="" autocomplete="off">
				<br>
				<button type="submit" name="login">Login</button>
				<a href="#">Forgot your password?</a>
			</form>	
			</div>
		</div>
	</div>
	
</body>







</body>
</html>










