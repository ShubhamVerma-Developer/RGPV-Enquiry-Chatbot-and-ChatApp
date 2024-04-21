<!DOCTYPE html>
<html lang="en">


<?php
       
       include('../connection.php');
       include('header.php');
       
        ?>

        <style>
        .input-container {
          display: -ms-flexbox;
          display: flex;
          width: 100%;
          margin-bottom: 15px;
        }

        .icon {
          padding: 10px;
          background: #28a745;
          color: white;
          min-width: 50px;
          text-align: center;
        }

        .input-field {
          width: 100%;
          padding: 10px;
          outline: none;
        }

        .input-field:focus {
          border: 2px solid dodgerblue;
        }


        .btn {
          background-color: #004085;
          color: white;
          padding: 15px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
          font-weight: bold;
          border-radius: 500px;
        }

        .btn:hover {
          opacity: 1;
        }

        </style>
<body>

<?php 
$query = 'SELECT * FROM usertable
              WHERE
              unique_id ='.$_GET['unique_id'];
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
              while($row = mysqli_fetch_array($result))
              {   
                $user_id=$row['user_id'];
                $unique_id=$row['unique_id'];
                $name=$row['name'];
                $mobile=$row['mobile'];
                $email=$row['email'];
                $password=$row['password'];
                $code=$row['code'];
                $verified=$row['verified'];
                $status=$row['status'];
                $img=$row['img'];
             
              }
              
              $unique_id = $_GET['unique_id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="input-container">
                             <i class="fa fa icon">id</i>
                                <input class="form-control"placeholder="user_id" name="user_id" value="<?php echo $user_id; ?>" />
                            </div>
                            <div class="input-container">
                             <i class="fa fa-user icon"></i>
                              <input class="form-control" placeholder="unique_id" name="unique_id" value="<?php echo $unique_id; ?>">
                            </div>
                            <div class="input-container">
                            <i class="fa fa-user icon"></i>
                              <input class="form-control" placeholder="name" name="name" value="<?php echo $name; ?>">
                            </div> 
                            <div class="input-container">
                                                         <i class="fa fa-mobile icon"></i>
                              <input class="form-control" placeholder="mobile" name="mobile" value="<?php echo $mobile; ?>">
                            </div> 
                           <div class="input-container">
                                                        <i class="fa fa-envelope icon"></i>
                              <input class="form-control" placeholder="email" name="email" value="<?php echo $email; ?>">
                            </div> 
                            <div class="input-container">
                                                         <i class="fa fa-lock icon"></i>
                              <input class="form-control" placeholder="password" name="password" value="<?php echo $password; ?>">
                            </div>
                            <div class="input-container">
                                                         <i class="fa fa-code icon"></i>
                              <input class="form-control" placeholder="password" name="code" value="<?php echo $code; ?>">
                             </div>
                            <div class="input-container">
                                                         <i class="fa fa-check icon"></i>
                              <input class="form-control" placeholder="verified" name="verified" value="<?php echo $verified; ?>">
                            </div>
                            <div class="input-container">
                                                         <i class="fa fa-circle icon"></i>
                              <input class="form-control" placeholder="status" name="status" value="<?php echo $status; ?>">
                            </div>
                            <div class="input-container">
                                                         <i class="fa fa-image icon"></i>
                              <input class="form-control" placeholder="img" name="img" value="<?php echo $img; ?>">
                            </div>

                            <button type="submit" class="btn btn-default">Update Record</button>
                    </form>
                    </div>
                </div>
                
            </div>

        </div>

    </div>
</body>

</html>

