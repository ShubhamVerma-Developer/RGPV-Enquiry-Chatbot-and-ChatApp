
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>update successful</title>
</head>
<body>
<?php
			                $id=$_POST['id'];
                            $question= $_POST['question'];
                            $answer=$_POST['answer'];


	   include('../connection.php');

	 			$query = 'UPDATE question set question ="'.$question.'",
					answer ="'.$answer.'"
					WHERE id ="'.$id.'"';
					$result = mysqli_query($con, $query);

?>
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "queTable.php";
		</script>
 </body>
</html>