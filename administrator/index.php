<?php include '../model/data.php'; ?>
<?php include '../controller/post_handler.php'; ?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <title>www.herculesgym.com</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head> 
<body style="background-image: url('../assets/images/fit-5.jpeg');">

    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="index.php" method="POST" class="form-signin">
						<div class="account-logo">
                            <h1 class="text-center">Login</h1>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                            <small class="text-danger"><?php echo $error6[0] ?? ''; ?></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                            <small class="text-danger"><?php echo $error6[1] ?? ''; ?></small>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="admin" class="btn btn-primary account-btn">Login</button>
                        </div>
                       
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>