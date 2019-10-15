<?php 
session_start();
include 'header.php'; 
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">

            <?php 

            echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
        
            ?>
                <h3 class="mb-3">User Login</h3>

                <form action="login.php" method="post">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label><br>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>