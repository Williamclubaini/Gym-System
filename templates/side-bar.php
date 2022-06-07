<?php include 'controller/logout.php';?>
<div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">Hercules Gym <a href="" class="menu_option float-right"></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Menu</li>
                <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>                        
                <li><a href="session.php"><i class="fa fa-clock-o"></i><span>Session</span></a></li>
                <li><a href="make-payments.php"><i class="fa fa-money"></i><span>Make Payments</span></a></li>
                 
                <li><a href="transaction-h.php"><i class="fa fa-folder"></i><span>Transaction History</span></a></li>
                
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="fa fa-lock"></i><span>Account</span></a>
                    <ul>
                        <a href="dashboard.php?logout"><i class="fa fa-sign-out"></i> Login Out</a> 
                    </ul>
                </li>
            </ul>
        </nav>        
    </div>