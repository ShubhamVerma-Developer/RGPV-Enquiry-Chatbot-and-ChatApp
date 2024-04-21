 <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../../image/<?php echo $img ?>" alt="">
                </span>

                <div class="text logo-text">

                        <?php
                          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
                          $sql = mysqli_query($con, "SELECT * FROM usertable WHERE unique_id = {$user_id}");
                          if(mysqli_num_rows($sql) > 0){
                            $row = mysqli_fetch_assoc($sql);
                          }else{
                            header("location: users.php");
                          }
                        ?>
                    <span class="name"><?php echo $name ?></span>
                    <span class="name" style="font-size:11px;"><?php echo $email; ?></span>
                    <span class="name" style="font-size:11px;"><?php echo $unique_id; ?></span>


                    </div>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">


                </li>

                 <ul class="menu-links">


                                     <li class="nav-link">
                                      <a href="../dashboard.php">
                                        <i class='bx bx-bot icon' ></i>
                                       <span class="text nav-text">Chatbot</span>
                                       </a>
                                          </li>


                                       <li class="nav-link">
                                        <a href="users.php">
                                           <i class='bx bx-chat icon' ></i>
                                       <span class="text nav-text">Chatapp</span>
                                      </a>
                                  </li>






                                       <li class="nav-link">
                                                              <a href="../../registration/new-password.php">
                                                             <i class='bx bx-lock icon'></i>
                                                                  <span class="text nav-text">Password</span>
                                                              </a>
                                                          </li>

                                </ul>
            </div>

            <div class="bottom-content">
             <li class="nav-link">
                          <a href="../../admin/dashboard.php?login_id=<?php echo $unique_id; ?>">
                           <i class='bx bx-user icon' ></i>
                           <span class="text nav-text">admin login</span>
                            </a>
                            </li>
                <li class="">
                     <a href="php/logout.php?logout_id=<?php echo $unique_id; ?>" class="logout">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

   <!-- <section class="home">
        <div class="text">RGPV Enquiry Chatbot</div>
    </section>-->




