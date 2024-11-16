<?php
session_start();
include 'serverdb.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    // Check if passwords match
    if ($password !== $cpassword) {
        echo "Passwords do not match";
        exit(); // Stop further execution
    }

    // Hash passwords
    $password = password_hash($password, PASSWORD_BCRYPT);
    $cpassword = password_hash($cpassword, PASSWORD_BCRYPT);

    // Check if email already exists
    $email_check_query = "SELECT * FROM regis WHERE email='$email'";
    $result = mysqli_query($con, $email_check_query);

    if ($result) {
        $email_count = mysqli_num_rows($result);
        if ($email_count > 0) {
            echo "Email already exists";
        } else {
            // Insert new user
            $insert_query = "INSERT INTO regis (username, email, mobile, password, cpassword) 
                            VALUES ('$username', '$email', '$mobile', '$password', '$cpassword')";
            $insert_result = mysqli_query($con, $insert_query);

            if ($insert_result) {
                $_SESSION['success_message'] = "Inserted Successfully";
                header("Location: index.php");
                exit();
            } else {
                echo "Insert Failed: " . mysqli_error($con);
            }
        }
    } else {
        echo "Query Failed: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <?php include 'style2.php' ?>
    <?php include 'links.php' ?>
</head>

<body>
    <?php
    if (isset($_SESSION['success_message'])) {
        echo "<script>alert('{$_SESSION['success_message']}');</script>";
        unset($_SESSION['success_message']);
    }
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light">
                    <article class="card-body">
                        <h4 class="card-title text-center">Create Account</h4>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="form-group">
                                <label for="username">Full Name</label>
                                <input name="username" id="username" class="form-control" placeholder="Your Full Name" type="text" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input name="email" id="email" class="form-control" placeholder="Your Email" type="email" required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Phone Number</label>
                                <input name="mobile" id="mobile" class="form-control" placeholder="Your Phone Number" type="number" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" id="password" class="form-control" placeholder="Create password" type="password" required>
                            </div>

                            <div class="form-group">
                                <label for="cpassword">Repeat Password</label>
                                <input name="cpassword" id="cpassword" class="form-control" placeholder="Repeat password" type="password" required>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
                            </div>

                            <p class="text-center footer-text">Have an account? <a href="logins.php">Log In</a></p>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
