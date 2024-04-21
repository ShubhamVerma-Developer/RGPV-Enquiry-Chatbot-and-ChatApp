<?php
  //session_start();
  include_once "php/config.php";
  include_once "need.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../dashboard.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper" style="background: #f8d7da;">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($con, "SELECT * FROM usertable WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src= "<?php $path="../../image/"; echo "$path$img" ?>" alt="">
          <div class="details">
            <span><?php echo $row['name'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $unique_id; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
