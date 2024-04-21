<?php
  include_once "php/config.php";
  include_once "need.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: ../../registration/index.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
<?php include_once "sidebar.php"; ?>
  <div class="wrapper">
    <span class="chat-area">
      <header style="color:white;">
        <?php 
          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          $sql = mysqli_query($con, "SELECT * FROM usertable WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon" style="color:white;"><i class="fas fa-arrow-left"></i></a>
        <img src= "<?php $path="../../image/"; $img=$row['img']; echo "$path$img"; ?>" alt="">
        <div class="details">
          <span><?php echo $row['name'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">
      </div>
             <form action="#" class="typing-area">
               <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
               <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
               <button><i class="fab fa-telegram-plane"></i></button>
             </form>
         </div>
         <script src="javascript/chat.js"></script>
         <script src="../../js/sidebar.js"> </script>
       </body>
</html>
