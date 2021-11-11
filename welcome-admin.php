
<?php   

session_start();

if(!isset($_SESSION['Email'])){
	header('location:Admin-login.php');
}

?>


<h1>Welcome <?php echo $_SESSION['Name'];?></h1>


<h1>Welcome <?php echo $_SESSION['Email'];?></h1>








<a href="include/logout.php">Logout </a>


