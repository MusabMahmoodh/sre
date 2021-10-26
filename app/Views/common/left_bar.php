            <nav class="sidebar-nav" id="sidebar-nav-scroller">
                <ul class="nav">                   

                    <li class="nav-title">Apps</li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="mdi mdi-cash-multiple"></i> Finance
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url("/account/list_all"); ?>"> Manage Accounts</a>
                            </li>
                            <?php if(isset($_SESSION['account']['id'])){ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url("/accgroup/list_all"); ?>"> Manage Group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url("/accentry/list_all"); ?>"> Manage Entry</a>
                            </li>
                            <li class="nav-item nav-dropdown">
                                <a class="nav-link nav-dropdown-toggle" href="#">
                                    <i class="mdi mdi-chart-areaspline"></i>Reports
                                </a>
                                <ul class="nav-dropdown-items">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url("/accreport/list_all"); ?>"> Balance Sheet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url("/accreport/profit_loss"); ?>"> Profit and Loss</a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <!--<li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="mdi mdi-store"></i> Inventory
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url("/inventory/list_all"); ?>"> Manage Inventory</a>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </nav>