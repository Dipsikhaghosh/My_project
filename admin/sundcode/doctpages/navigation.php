   


                    <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">


                            <?php if(isset($_SESSION['doctor'])){?>
                             <!-- doctor -->

                                <li><a href="index.html">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <a href="about.html" class="active">View Bookings</a></li>

                                <li><a href="index.html">Find Doctor</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Edit profile<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="#services" class="drop-text">change profile details</a></li>
                                        <li><a href="index.html" class="drop-text">change password</a></li>
                                    </ul>
                                </li>
                                
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Routine <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="viewroutine.php" class="drop-text">view routine</a></li>
                                        <li><a href="changeroutine.php" class="drop-text">change routine</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            <?php }elseif(isset($_SESSION['user'])){?> 
                                <!-- user -->

                                <li><a href="index.html">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <a href="about.html" class="active">View Bookings</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Edit profile<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="#services" class="drop-text">change profile details</a></li>
                                        <li><a href="index.html" class="drop-text">change password</a></li>
                                    </ul>
                                </li>
                                
                              <!--  <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                
                                    <label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Routine <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="viewroutine.php" class="drop-text">view routine</a></li>
                                        <li><a href="changeroutine.php" class="drop-text">change routine</a></li>
                                    </ul>
                                </li> -->

                                <li><a href="contact.html">Contact Us</a></li>
                                 

                                 <?php }else{?>


                                <li><a href="index.html">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">><a href="index.html">Home</a></li>
                                <li><a href="about.html" class="active">View Doctor</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                   <!--  <label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Edit profile<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="#services" class="drop-text">change profile details</a></li>
                                        <li><a href="index.html" class="drop-text">change password</a></li>
                                    </ul>
                                </li>
                                
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                    <!-- <label for="drop-2" class="toggle toogle-2">routine<span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Routine <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="viewroutine.php" class="drop-text">view routine</a></li>
                                        <li><a href="changeroutine.php" class="drop-text">change routine</a></li>
                                    </ul>
                                </li> --> 
                                <li><a href="contact.html">Contact Us</a></li>
                                  <?php
                         
                    }?>
                            </ul>
                        </nav>