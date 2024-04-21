

<?php
       include('../connection.php');
       include('header.php');
       
        ?>

<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
             <div class="col-lg-12">

                        <h2>List of all users</h2>
                        <a href="../dashboard.php" type="button" class="btn btn-xs btn-info" style="font-size:20px; background:#007bff; font-weight: bold;">Return to Dashboard</a>


                         <a href="add.php?action=add" type="button" class="btn btn-xs btn-info" style="font-size:20px; background:#007bff; font-weight: bold;">Add New</a>
                        <div class="table-responsive">

                            <table style="border:solid 2px;" class="tablecs">
                                <thead>
                                    <tr>
                                        <th>user_id</th>
                                        <th>unique_id</th>
                                        <th>name</th>
                                        <th>mobile</th>
                                        <th>email</th>
                                        <!--<th>password</th>-->
                                        <th>code</th>
                                        <th>verified</th>
                                        <th>status</th>
                                        <th>img</th>
                                        <th>operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM usertable';
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));
                  
                        while ($row = mysqli_fetch_assoc($result)) {


                            echo '<tr>';
                            echo '<td>'. $row['user_id'].'</td>';
                            echo '<td>'. $row['unique_id'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['mobile'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            //echo '<td style="-webkit-text-security: disc;">'. $row['password'].'</td>';
                            echo '<td>'. $row['code'].'</td>';
                            echo '<td>'. $row['verified'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo "<td> <img src='../../image/" .  $row['img'] . "'/>    </td>";



                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="show.php?action=edit & unique_id='.$row['unique_id'] . '" > SHOW </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & unique_id='.$row['unique_id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=usertable&delete & unique_id=' . $row['unique_id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>


</body>



</html>
