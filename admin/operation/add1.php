<?php
       include('../connection.php');
       include('header.php');

        ?>
<body>
             <div class="col-lg-12">
                <?php

                                            $unique_id= rand(time(), 100000000);
                                            $name=$_POST['name'];
                                            $mobile=$_POST['mobile'];
                                            $email=$_POST['email'];
                                            $password=$_POST['password'];
                                            $encpass = password_hash($password, PASSWORD_BCRYPT);
                                            $code = rand(999999, 111111);
                                            $verified= "notverified";
                                            $status="Offline now";
                                            $img="profile.png";



					switch($_GET['action']){
						case 'add':


								$query = "INSERT INTO `usertable`(`unique_id`, `name`, `mobile`, `email`, `password`, `code`, `verified`, `status`, `img`)
								VALUES ('$unique_id','".$name."','$mobile','".$email."','".$encpass."', '".$code."','".$verified."', '".$status."', '".$img."');";


								mysqli_query($con,$query)or die ('Error in updating Database');


						break;

						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
                    </div>
                </div>

            </div>


</body>

</html>

