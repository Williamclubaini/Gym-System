<?php
include 'model/data.php';
include 'controller/post_handler.php';
?>
<?php include 'templates/header-2.php';?>
        <div class="card mt-5">
            <div class="text-center mb-5">
                <a class="header-brand" href="#"><i class="fa fa-user-circle-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Create new account</div>
                 <form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="form-group">
                    <label class="form-label">Member Type</label>
                     <select class="custom-select" name="membertype">
                        <option value="trainee">Trainee</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">intermediate</option>
                        <option value="expert">Expert</option>
                    </select>
                    <small class="text-danger"><?php echo $error1[5] ?? ''; ?></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                    <small class="text-danger"><?php echo $error1[0] ?? ''; ?></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    <small class="text-danger"><?php echo $error1[1] ?? ''; ?></small>
                </div>

                  <div class="form-group">
                    <label class="form-label">Contact</label>
                    <input type="tel" name="contact" pattern="^\d{10}" class="form-control" placeholder="Contact" required>
                    <small class="text-danger"><?php echo $error1[2] ?? ''; ?></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Occupation</label>
                    <input type="text" name="occupation" class="form-control" placeholder="Occupation" required>
                    <small class="text-danger"><?php echo $error1[3] ?? ''; ?></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Location" required>
                    <small class="text-danger"><?php echo $error1[4] ?? ''; ?></small>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <small class="text-danger"><?php echo $error1[6] ?? ''; ?></small>
                </div>

                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span>
                    </label>
                </div>

                <div class="form-footer">
                    <button type="submit" name="register" class="btn btn-primary btn-block">Create new account</button>
                </div>

                </form>
            </div>
            <div class="text-center text-muted">
                Already have account? <a href="index.php">Sign in</a>
            </div>
        </div>

<?php include 'templates/footer-2.php';?>