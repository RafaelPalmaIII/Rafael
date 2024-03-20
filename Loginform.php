<!DOCTYPE html>

<html>

    <head>
        <title>LOGIN</title>
        <!-- includes Bootstrap CSS library-->  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            
            <!-- Form for user login, submits data to index.php using POST method -->
            <form action="index.php" method="post" class="mt-5">

                <h2 class="mb-4">LOGIN</h2>

                <!-- Check if the 'error' parameter is set in the URL and display error message-->
                <?php if (isset($_GET['error'])) { ?>
                    <p class="text-danger"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="uname" class="form-control" placeholder="User Name">
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <a href="Account_Info.php" class="mr-2">Create Account</a>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            
