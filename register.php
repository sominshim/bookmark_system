<?php
    // 변수에 저장
    $useremail = $_POST['user_email'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    define("DB_HOST", "127.0.0.1");
    define("DB_PORT", "3300");
    define("DB_NAME", "bookmark");
    define("DB_USER", "root");
    define("DB_PASS", "dnwnxpr3557*");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT) or die('db connect error');

    if($conn->connect_errno){
        echo '[DB 연결실패] : '.$conn->connect_error.''; 
    } else {
        //echo '[연결성공]';
    }
    // 중복 확인
    $query = "SELECT username FROM user WHERE username = '$username';";
    $result = mysqli_query($conn, $query);
    
    if ($username == $result){
        $duplicated = True;
    } elseif ($password != $password_confirm) {
        $confirm_pwd = False;
    }

    // 레코드 삽입 
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (username, email, pwd) VALUES('$name', '$email', '$encrypted_password')";

    mysqli_close($conn);

    header( 'Location: register-ok.php' );
?>