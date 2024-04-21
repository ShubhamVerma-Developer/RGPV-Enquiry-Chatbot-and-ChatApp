<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Create a New Password</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="new-password.php" class="sign-in-form" method="POST" autocomplete="off">
                    <h2 class="title">New Password</h2>
                    <?php
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="input-field">
                    <i class="fas fa-user"></i>
                        <input type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div class="input-field">
                    <i class="fas fa-lock"></i>
                        <input type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="btn solid" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>