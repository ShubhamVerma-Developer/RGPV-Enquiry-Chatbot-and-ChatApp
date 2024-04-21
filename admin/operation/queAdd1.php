<?php
       include('../connection.php');
       include('header.php');
        ?>
<body>
             <div class="col-lg-12">
                <?php
                                            $question=$_POST['question'];
                                            $answer=$_POST['answer'];
					switch($_GET['action']){
						case 'add':
								$query = "INSERT INTO `question`(`question`, `answer`)
								VALUES ('".$question."','".$answer."');";
								mysqli_query($con,$query)or die ('Error in updating Database');
						break;

						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "queTable.php";
		</script>
                    </div>
                </div>

            </div>


</body>

</html>

