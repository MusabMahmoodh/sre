    <header class="app-header navbar">
        <div class="hamburger hamburger--arrowalt-r navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
        <!-- end hamburger -->
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <strong>Venera</strong>
        </a>

        <div class="hamburger hamburger--arrowalt-r navbar-toggler sidebar-toggler d-md-down-none mr-auto">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
        <!-- end hamburger -->

        <div class="navbar-search">
            <button type="submit" class="navbar-search-btn">
                <i class="mdi mdi-magnify"></i>
            </button>
            <input type="text" class="navbar-search-input" placeholder="Find User a user, team, meeting ..">
        </div>
        <!-- end navbar-search -->

        <ul class="nav navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-ring"></i>
                    <span class="notification hertbit"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notification-list animated flipInY nicescroll-box">

                    <div class="dropdown-header">
                        <strong>Notification</strong>
                        <span class="badge badge-pill badge-theme pull-right"> new 5</span>
                    </div>
                    <!--end dropdown-header -->

                    <div class="wrap">

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>A New Order has Been Placed </strong>
                                    </div>
                                    <small>2 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Order Updated</strong>
                                    </div>
                                    <small>10 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>A New Order has Been Placed </strong>
                                    </div>
                                    <small>30 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong> Order has Been Rated </strong>
                                    </div>
                                    <small>32 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown -->
                    </div>
                    <!-- end wrap -->

                    <div class="dropdown-footer ">
                        <a href="">
                            <strong>See all messages (150) </strong>
                        </a>
                    </div>
                    <!-- end dropdown-footer -->
                </div>
                <!-- end notification-list -->

            </li>
            <!-- end nav-item -->

            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-forum"></i>
                    <span class="notification hertbit"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right message-list animated flipInY nicescroll-box">

                    <div class="dropdown-header">
                        <strong>Messages</strong>
                        <span class="badge badge-pill badge-theme pull-right"> new 15</span>
                    </div>
                    <!-- end dropdown-header -->
                    <div class="wrap">

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification online"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Natalie Wall</strong>
                                    </div>
                                    <p class="text-muted">Anyways i would like just do it</p>
                                    <small>2 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification offline"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Steve johns</strong>
                                    </div>
                                    <p class="text-muted">There is Problem inside the Application</p>
                                    <small>10 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification buzy"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Taniya Jan</strong>
                                    </div>
                                    <p class="text-muted">Please Checkout The Attachment</p>
                                    <small>30 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification away"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Tim Johns</strong>
                                    </div>
                                    <!-- end u-name -->
                                    <p class="text-muted">Anyways i would like just do it</p>
                                    <small>32 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->
                    </div>
                    <!-- end wrap -->
                    <div class="dropdown-footer ">
                        <a href="">
                            <strong>See all messages (150) </strong>
                        </a>
                    </div>
                    <!-- end dropdown-footer -->
                </div>
                <!-- end message-list -->
            </li>
            <!-- end nav-item -->


            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-cards"></i>
                    <span class="notification hertbit"></span>
                </a>
                <!-- end navlink -->
                <div class="dropdown-menu dropdown-menu-right task-list animated flipInY nicescroll-box">

                    <div class="dropdown-header">
                        <strong>Task List</strong>
                        <span class="badge badge-pill badge-theme pull-right"> new 3</span>
                    </div>
                    <!-- end dropdown-header -->
                    <div class="wrap">
                        <a href="#" class="dropdown-item">
                            <strong>Task 1</strong>
                            <small class="pull-right">50% Complete</small>
                            <div class="progress xs">
                                <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <strong>Task 2</strong>
                            <small class="pull-right">20% Complete</small>

                            <div class="progress xs">
                                <div class="progress-bar bg-success" style="width: 20%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>

                        <!-- end dropdown-item -->
                        <a href="#" class="dropdown-item">
                            <strong>Task 3</strong>
                            <small class="pull-right">80% Complete</small>

                            <div class="progress xs ">
                                <div class="progress-bar bg-warning" style="width: 80%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <strong>Task 4</strong>
                            <small class="pull-right">60% Complete</small>

                            <div class="progress xs ">
                                <div class="progress-bar bg-info" style="width: 60%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>
                        <!-- end dropdown-item -->
                    </div>
                    <!-- end wrap -->
                    <div class="dropdown-footer ">
                        <a href="">
                            <strong>view all task (20) </strong>
                        </a>
                    </div>
                    <!-- end dropdown-footer -->

                </div>
                <!-- dropdown-menu -->
            </li>
            <!-- end navitem -->

            <li class="nav-item dropdown">
                <a class="btn btn-round btn-theme btn-sm" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                    <span class=""><?php echo $GLOBALS["user"]['data']['display_name']; ?>
                        <i class="fa fa-arrow-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right user-menu animated flipInY ">
                    <div class="wrap">
                        <div class="dw-user-box">
                            <div class="u-img">
                                <img src="<?php echo get_avatar_url($GLOBALS["user"]['data']['ID']); ?>" alt="<?php echo $GLOBALS["user"]['data']['display_name']; ?>" />
                            </div>
                            <div class="u-text">
                                <h5><?php echo $GLOBALS["user"]['data']['display_name']; ?></h5>
                                <p class="text-muted"><?php echo $GLOBALS["user"]['data']['user_email']; ?></p>
                                <a target="_blank" href="<?php echo get_edit_profile_url( $GLOBALS["user"]['data']['ID'] ); ?>" class="btn btn-round btn-theme btn-sm">View Profile</a>
                            </div>
                        </div>
                        <!-- end dw-user-box -->

                        <a class="dropdown-item" target="_blank" href="<?php echo get_edit_profile_url( $GLOBALS["user"]['data']['ID'] ); ?>">
                            <i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" target="_blank" href="<?php echo get_edit_profile_url( $GLOBALS["user"]['data']['ID'] ); ?>">
                            <i class="fa fa-wrench"></i> Settings</a>

                        <div class="divider"></div>

                        <a class="dropdown-item" href="<?php echo wp_logout_url(); ?>">
                            <i class="fa fa-lock"></i> Logout</a>
                    </div>
                    <!-- end wrap -->
                </div>
                <!-- end dropdown-menu -->
            </li>
            <!-- end nav-item -->


        </ul>

        <div class="hamburger hamburger--arrowalt-r navbar-toggler aside-menu-toggler ">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </header>