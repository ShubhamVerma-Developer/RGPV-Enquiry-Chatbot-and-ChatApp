<?php require_once "../registration/controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $verified = $fetch_info['verified'];
        $code = $fetch_info['code'];
        $name=$fetch_info['name'];
         $unique_id = $fetch_info['unique_id'];
        if($verified == "verified"){
            if($code != 0){
                header('Location: ../registration/reset-code.php');
            }
        }else{
            header('Location: ../registration/user-otp.php');
        }
    }
}else{
    header('Location: ../registration/index.php');
}





$server_time=date("Y-m-d H:i:s");
//$name=$_SESSION['name'];


if(isset($_POST['text'])){

$msg=mysqli_real_escape_string($con,$_POST["text"]);

//$query=mysqli_query($con,"SELECT * FROM question WHERE question RLIKE '[[:<:]]".$msg."[[:>:]]' or (question LIKE '%{$msg}%')");

$query=mysqli_query($con,"SELECT * FROM question WHERE question LIKE '%{$msg}%'");

//$query=mysqli_query($con,"SELECT * FROM question WHERE question RLIKE '[[:<:]]".$msg."[[:>:]]'");
$count = mysqli_num_rows($query);

    if($count=="0"){

        $data = "I am Sorry but I am not exactly clear how to help you";
        $query4=mysqli_query($con,"insert into chats(unique_id,name,user,chatbot,date)values('$unique_id','$name','$msg','$data','$server_time')");

    }else{
        while($row = mysqli_fetch_array($query)){

                $data= $row['answer'];

                $query4=mysqli_query($con,"insert into chats(unique_id,name,user,chatbot,date)values('$unique_id','$name','$msg','$data','$server_time')");
            }
        }
}

?>