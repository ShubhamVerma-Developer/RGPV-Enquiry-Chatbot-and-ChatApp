
<?php

       include('../connection.php');
       include('header.php');

        ?>

<body>
<?php

			if (!isset($_GET['do']) || $_GET['do'] != 1) {


			switch ($_GET['type']) {
				case 'question':
					$query = 'DELETE FROM question
							WHERE
							id = ' . $_GET['id'];
						$result = mysqli_query($con, $query) or die(mysqli_error($con));

?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "queTable.php";
			</script>

			<?php
			//break;
				}
			}
			?>

</body>
</html>