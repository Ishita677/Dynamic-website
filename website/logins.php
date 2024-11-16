<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'style2.php' ?>
    <?php include 'links.php' ?>
    <style>
        body {
            background: url('images/bgg.jpg') center/cover no-repeat fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .footer-text {
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php
    include 'serverdb.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "select * from regis where email = '$email' ";
        $query = mysqli_query($con, $email_search);
        $email_count =  mysqli_num_rows($query);
        if ($email_count) {
            $email_pass =  mysqli_fetch_assoc($query);
            $db_pass = $email_pass["password"];
            $pass_decode = password_verify($password, $db_pass);
            if ($pass_decode) {
                echo "Login Successful";
                ?>
                <script>
                    location.replace("index.php");
                </script>
            <?php
        } else {

            echo "Password Incorrect";
        }
    } else {
        echo "Invalid Email";
    }
}

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-light">
                <article class="card-body">
                    <h4 class="card-title text-center">Login</h4>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input name="email" id="email" class="form-control" placeholder="Your Email" type="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" id="password" class="form-control" placeholder="Your Password" type="password" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Log In</button>
                        </div>

                        <p class="text-center footer-text">Don't have an account? <a href="register.php">Sign Up Here</a></p>
                    </form>
                </article>
            </div>
        </div>
    </div>
</div>
</body>

</html>
