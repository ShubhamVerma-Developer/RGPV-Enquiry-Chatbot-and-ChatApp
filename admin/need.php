<?php require_once "../registration/controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
//$unique_id = $_SESSION['unique_id'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $verified = $fetch_info['verified'];
        $code = $fetch_info['code'];
        $unique_id=$fetch_info['unique_id'];
        $img=$fetch_info['img'];
        $name=$fetch_info['name'];
        $status=$fetch_info['status'];

        if($verified == "verified"){
            if($code != 0){
                header('Location: ../registration/reset-code.php');
            }
        }else{
            header('Location: index.php');
        }
    }
}else{
    header('Location: index.php');
}
$select_sql2 = mysqli_query($con, "SELECT * FROM admin WHERE email = '{$email}'"); $result = mysqli_fetch_assoc($select_sql2); $_SESSION['unique_id'] = $result['unique_id'];


?>
