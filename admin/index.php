<?php require_once "../registration/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
     <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                 <form action="index.php" class="sign-in-form" method="POST" autocomplete="">
                          <input type="submit" value="User login" class="btn solid" name="admin login" onclick="location.href = '../registration/index.php'">
                            <h2 class="title">Sign in</h2>
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
                              <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Password" name="password" required/>
                            </div>
                             <!--<div class="link forget-pass text-left">
                                         <a href="forgot-password.php">Forgot password?</a>
                                        </div>-->


                        <input class="btn solid" type="submit" name="admin-login" value="Admin login">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>