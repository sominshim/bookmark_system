
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
    <h2>Application<br> Register Page</h2>
    <p>Register from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
    <div class="login-form">
        <!-- register form -->
        <form method="post" action="register.php" name="registerform">
            <div class="form-group">
                <label>Email Adress</label>
                <input type="email" class="form-control" placeholder="Email Adress" name="user_email" required >
            </div>
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" placeholder="User Name" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" pattern="{6,64}" name="password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" pattern="{6,64}" name="password_confirm" required>
            </div>

            <button type="submit" class="btn btn-black" value="Register">Register</button>
            <?php
                if ( $duplicated = True ) {
                    echo "<p>사용자이름이 중복되었습니다.</p>";
                }
                if ( $confirm_pwd = False ) {
                    echo "<p>비밀번호가 일치하지 않습니다.</p>";
                }
            ?>
        </form>
    </div>
    </div>
</div>
</body>