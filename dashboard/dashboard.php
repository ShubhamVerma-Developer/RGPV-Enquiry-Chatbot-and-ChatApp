<?php include_once "need.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


          <link rel="stylesheet" href="../css/chatbot.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/chatapp.css" />
    <title>RGPV Enquiry Chatbot</title>


    <style>

    </style>

</head>
<body>
<?php include_once "sidebar.php"; ?>
<span id="ref">
            <div class="square">
          <div class="sticky" style="margin-top:-10px; height:50px; background:none;">
                                 <div class="chatbot-menubar">
                                 <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m11 5l-7 7l7 7m-7-7h16"/></svg>

                                        RGPV Enquiry Chatbot
                                 </div>
                                  </div>
              <?php
                $query="select * from chats where unique_id='".$fetch_info['unique_id']."'ORDER by date";
                $res=mysqli_query($con,$query);
                while($data=mysqli_fetch_array($res)){
                  $user=$data['user'];
                  $chatbot=$data['chatbot'];
                  $date=$data['date'];
              ?>
              <div class="container1" style="margin-right: 400px;">
               <img src="../image/<?php echo $img ?>" alt="Avatar" style="width:100%;">
                <p id="message"><?php echo $user;?></p>
                <span class="time-right"><?php echo $date;?></span>
              </div>

              <div class="container1 darker" style="margin-left: 400px;">
                <img src="../image/chatbot.png" alt="Avatar" class="right" style="width:100%;">
                <p><?php echo $chatbot;?></p>
                <span class="time-left"><?php echo $date;?></span>
              </div>

            <?php } ?>
            <div class="sticky">
              <div class="row">
                 <div class="col-md-12">
                   <div class="input-group mb-3">
                      <input type="text" class="form-control" id="msg" required>
                        <div class="input-group-append">
                            <button class="fab fa-telegram-plane" type="button" onclick="send()">Send</button>
                        </div>
                    </div>
               </div>
              </div>
            </div>
            </div>
            </span>
            <br/>

            <script type="text/javascript">
              function send(){
                var text=$('#msg').val().toLowerCase();

                 $.ajax({
                            type:"post",
                            url:"../chatbot/mysearch.php",
                            data:{text:text},
                            success:function(data){
                                //alert(data);
                                $('#ref').load(' #ref');
                            }
                  });
                 // window.scrollTo(500, 0);
                window.scrollBy(0, 1000);

                 //window.scrollTop = window.scrollHeight;


              }

            </script>



        </div>






    <script src="../js/sidebar.js"> </script>




</body>
</html>