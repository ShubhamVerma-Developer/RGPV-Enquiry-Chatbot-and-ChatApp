
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update successful</title>
</head>
<body>
<?php
			                $user_id=$_POST['user_id'];
                            $unique_id= $_POST['unique_id'];
                            $name=$_POST['name'];
                            $mobile=$_POST['mobile'];
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $encpass = password_hash($password, PASSWORD_BCRYPT);
                            $code=$_POST['code'];
                            $verified=$_POST['verified'];
                            $status=$_POST['status'];
                            $img=$_POST['img'];

	   include('../connection.php');

	 			$query = 'UPDATE usertable set name ="'.$name.'",
					mobile ="'.$mobile.'", email="'.$email.'",
					password="'.$encpass.'" ,verified="'.$verified.'",
					status="'.$status.'", img="'.$img.'"
					WHERE unique_id ="'.$unique_id.'"';
					$result = mysqli_query($con, $query) or die(mysqli_error($con));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>