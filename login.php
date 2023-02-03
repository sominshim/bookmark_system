<?php
    // 변수에 저장
    $name=$_POST['user_name'];
    $password=$_POST['user_pwd'];

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

    // DB 조회
    $query = "SELECT count(*) from user WHERE username='$name';";
    
    echo mysqli_query($conn, $query);
    mysqli_close($conn);

    //로그인 성공했을 경우

    //로그인 실패했을 경우

    echo "<p>your name is ".$name."</p>";
    echo "<p>your email is ".$email."</p>";
    echo "<p>your password is ".$password."</p>";

    echo "<button class='btn btn-black' onclick='location.href=`index.html`;'>Go to Login</button>";
?>