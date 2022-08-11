 <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../image/<?php echo $img ?>" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"><?php echo $fetch_info['name'] ?></span>
                    <span class="name" style="font-size:11px;"><?php echo $email; ?></span>
                    <span class="name" style="font-size:11px;"><?php echo $unique_id; ?></span>


                </div>

            </div>

            <i class='bx bx-chevron-right toggle'></i>

        </header>

        <div class="menu-bar">
            <div class="menu">

               <li class="search-box">

                   <!-- <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search..."/>
                    <form action="profile.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                         <div class="field image">

                                                  <input type="file" name="image" style="font-size:10px; padding:10px; align:center;" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                                                </div>
                                                <input type="submit" class="btn" name="image" value="upload" />
                                                </form>-->


                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                     <li class="nav-link">
                      <a href="../dashboard/dashboard.php">
                        <i class='bx bx-home-alt icon' ></i>
                       <span class="text nav-text">Chatbot</span>
                       </a>
                          </li>


                       <li class="nav-link">
                        <a href="../dashboard/chatapp/users.php">
                           <i class='bx bx-home-alt icon' ></i>
                       <span class="text nav-text">Chatapp</span>
                      </a>
                  </li>



                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>


                       <li class="nav-link">
                                              <a href="../registration/new-password.php">
                                             <i class='bx bx-lock-alt' style="color:rgba(20,19,19,0.9); padding:20px;"></i>
                                                  <span class="text nav-text">Password</span>
                                              </a>
                                          </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                     <a href="chatapp/php/logout.php?logout_id=<?php echo $unique_id; ?>" class="logout">
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