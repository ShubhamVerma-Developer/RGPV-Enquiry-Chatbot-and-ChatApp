

<?php
       include('../connection.php');
       include('header.php');

        ?>

<body>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
             <div class="col-lg-12">

                        <h2>List of All Question</h2>
                        <a href="../dashboard.php" type="button" class="btn btn-xs btn-info" style="font-size:20px; background:#007bff; font-weight: bold;">Return to Dashboard</a>


                         <a href="queAdd.php?action=add" type="button" class="btn btn-xs btn-info" style="font-size:20px; background:#007bff; font-weight: bold;">Add New</a>
                        <div class="table-responsive">

                            <table style="border:solid 2px;" class="tablecs">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>question</th>
                                        <th>answer</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                $query = 'SELECT * FROM question ORDER BY ID DESC';
                    $result = mysqli_query($con, $query) or die (mysqli_error($con));

                        while ($row = mysqli_fetch_assoc($result)) {


                            echo '<tr>';
                            echo '<td>'. $row['id'].'</td>';
                            echo '<td>'. $row['question'].'</td>';
                            echo '<td>'. $row['answer'].'</td>';




                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="queShow.php?action=edit & id='.$row['id'] . '" > SHOW </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="queEdit.php?action=edit & id='.$row['id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="queDel.php?type=question&delete & id=' . $row['id'] . '">DELETE </a> </td>';
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
