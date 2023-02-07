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
