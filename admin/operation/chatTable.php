

<?php
       include('../connection.php');
       include('header.php');

        ?>

<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
             <div class="col-lg-12">

                        <h2>All Chats</h2>
                        <a href="../dashboard.php" type="button" class="btn btn-xs btn-info" style="font-size:20px; background:#007bff; font-weight: bold;">Return to Dashboard</a>


                         <!--<a href="queAdd.php?action=add" type="button" class="btn btn-xs btn-info" style="font-size:20px; background:#007bff; font-weight: bold;">Add New</a>-->
                        <div class="table-responsive">

                            <table style="border:solid 2px;" class="tablecs">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>unique_id</th>
                                        <th>name</th>
                                        <th>user</th>
                                        <th>chatbot</th>
                                        <th>date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                $query = 'SELECT * FROM chats';
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                        while ($row = mysqli_fetch_assoc($result)) {


                            echo '<tr>';
                            echo '<td>'. $row['id'].'</td>';
                            echo '<td>'. $row['unique_id'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['user'].'</td>';
                            echo '<td>'. $row['chatbot'].'</td>';
                            echo '<td>'. $row['date'].'</td>';




                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="chatShow.php?action=edit & id='.$row['id'] . '" > SHOW </a> ';
                            //echo ' <a  type="button" class="btn btn-xs btn-warning" href="chatEdit.php?action=edit & id='.$row['id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="chatDel.php?type=chats&delete & id=' . $row['id'] . '">DELETE </a> </td>';
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
