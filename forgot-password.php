<?php include 'model/data.php';?>
<?php include 'controller/post_handler.php';?>
<?php include 'templates/header-2.php';?>
        <div class="card">
            <div class="text-center mb-5">
                <a class="header-brand" href="#"><i class="fa fa-lock brand-logo"></i></a>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="card-title">Forgot password</div>
                <p class="text-muted">Enter your email address and your new password. will reset your password.</p>
                <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    <small class="text-danger"><?php echo $error3[0] ?? '';?></small>
                </div>
                <div class="form-group">
                    <label class="form-label">New Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    <small class="text-danger"><?php echo $error3[1] ?? '';?></small>
                </div>
                <div class="form-footer">
                    <button type="submit" name="forgot_password" class="btn btn-primary btn-block">Reset password</button>
                </div>
            </form>
            </div>
            <div class="text-center text-muted">
                Forget it, <a href="index.php">Send me Back</a> to the Sign in screen.
            </div>
        </div>        
<?php include 'templates/footer-2.php';?>