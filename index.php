<?php
include 'model/data.php';
include 'controller/post_handler.php';
?>
<?php include 'templates/header-2.php';?>
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="#"><i class="fa fa-user-circle-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Login to your account</div>
                 <form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="form-group">
                     <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" required>
                     <small class="text-danger"><?php echo $error2[0] ?? ''; ?></small>
                </div>
                <div class="form-group">
                    <label class="form-label">Password<a href="forgot-password.php" class="float-right small">I forgot password</a></label>
                    <input type="password" name="password" class="form-control"  placeholder="Password" required>
                     <small class="text-danger"><?php echo $error2[1] ?? ''; ?></small>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
            </div>
            <div class="text-center text-muted">
                Don't have account yet? <a href="register.php">Sign up</a>
            </div>
        </div> 
<?php include 'templates/footer-2.php';?>