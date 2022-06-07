  <div class="header">
			<div class="header-left">
				<a href="dashboard.php" class="logo">
					<img src="../assets/images/fit-11.jpeg" width="35" height="35" alt=""> <span>Hercules Gym</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span><?php echo $_SESSION['name'];?></span>
                    </a>
                </li>
            </ul>
            
        </div>