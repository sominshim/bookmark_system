<?php
    // 변수에 저장
    $username=$_POST['user_name'];
    $password=$_POST['password'];

    define("DB_HOST", "127.0.0.1");
    define("DB_PORT", "3300");
    define("DB_NAME", "bookmark");
    define("DB_USER", "root");
    define("DB_PASS", "dnwnxpr3557*");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT) or die('db connect error');

    if($conn->connect_errno){
        echo '[연결실패] : '.$conn->connect_error.''; 
    } else {
        //echo '[연결성공]';
    }

    // DB 조회 (user tbl - username의 pwd 조회)
    // DB pwd 와 일치하는지 확인
    $query = "SELECT pwd from user WHERE username='".$username."';";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $encrypted_password = $row['pwd'];
    }
    if ( is_null ($encrypted_password)) {
        if (is_null($encrypted_password)){
            $not_user = True;
        } else {
            if ( password_verify( $password, $encrypted_password ) ) {
                header( 'Location: login-ok.php' );
            } else {
                $not_pwd =True;
            }
        }
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="ko">
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
                <input type="text" class="form-control" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-black">Login</button>
            <?php
                if ($not_user == True) {
                    echo "<p>사용자이름이 존재하지 않습니다.</p>";
                }
                if ($not_pwd == True) {
                    echo "<p>비밀번호가 존재하지 않습니다.</p>";
                }
            ?>
        </form>
        <button class="btn btn-secondary" onclick="location.href='register_page.php';">Go to Register</button>
    </div>
    </div>
</div>
</body>