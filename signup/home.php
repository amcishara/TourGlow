<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div style="background-color: #1690A7;">
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
     </div>
     <div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae neque consectetur ullam unde porro cum voluptatum est itaque? Commodi consequatur tempora delectus similique nulla perspiciatis non natus, totam veniam deleniti id nesciunt aut asperiores, deserunt aliquid nemo incidunt provident pariatur eaque ad earum eius? Voluptate ducimus laboriosam blanditiis sed corporis!</p>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>