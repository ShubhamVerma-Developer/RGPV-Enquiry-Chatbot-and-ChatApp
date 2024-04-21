<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/registration.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body style="border:9px solid;">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="index.php" class="sign-in-form" method="POST" autocomplete="">
          <input type="submit" value="Admin login" class="btn solid" name="admin login" onclick="location.href = '../admin/index.php';">
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
             <div class="link forget-pass text-left">
                         <a href="forgot-password.php">Forgot password?</a>
                        </div>
            <input type="submit" value="login" class="btn solid" name="login">
          </form>

          <form action="index.php" class="sign-up-form" method="POST" autocomplete="">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>"/>
            </div>
             <div class="input-field">
             <i class="fas fa-user"></i>
             <input type="number" name="mobile" placeholder="Mobile no." required />
             </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="cpassword" placeholder="Confirm password" required />
             </div>
            <input type="submit" class="btn" name="signup" value="Signup" />
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
           Welcome to RGPV Enquiry Chatbot System
            </p>
            <button class="btn" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/rgpv.svg" class="image" alt="" height="500px"/>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome to RGPV Enquiry Chatbot System
            </p>
            <button class="btn" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/rgpv.svg" class="image" alt="" height="500px"/>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
