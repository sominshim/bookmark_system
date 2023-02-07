<?php
    $not_user = False;
    $not_pwd = False;
?>

<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="./config/login.css">
   <meta charset="utf-8">
   <title>BookMark System</title>
</head>
<body>

<div class="sidenav">
    <div class="login-main-text">
    <h2>Application<br> Login Page</h2>
    <p>Login from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
    <div class="login-form">
        <form method="post" action="login.php" name="loginform">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" placeholder="User Name" name="user_name" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>

            <button type="submit" class="btn btn-black">Login</button>
        </form>
        <?php
                if ($not_user == True) {
                    echo "<p>사용자이름이 존재하지 않습니다.</p>";
                }
                if ($not_pwd == True) {
                    echo "<p>비밀번호가 존재하지 않습니다.</p>";
                }
            ?>
        <button class="btn btn-secondary" onclick="location.href='register_page.php';">Go to Register</button>
    </div>
    </div>
</div>
</body>