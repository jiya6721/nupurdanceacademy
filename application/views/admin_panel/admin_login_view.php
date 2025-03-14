<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Admin Login</h2>
        <form method="post" action="<?=base_url('admin_login/login_validation'); ?>">
            <div class="form-group">
                <label>Enter Email</label>
                <input id="email" type="email" class="form-control" name="email" required>
                    <!-- <div class="invalid-feedback"> -->
                <!-- <input type="text" name="name" class="form-control" required> -->
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-primary">
               
            </div>
            <?php  
                if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata("error"); ?>
                    </div>
                <?php endif; ?>
                
        </form>
    </div>
</body>
</html>
