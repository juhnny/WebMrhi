<?php
    header('Content-Type:text/html; charset=utf-8');

    $userId = $_POST['userId'];
    $pw = $_POST['pw'];
    $pwConfirm = $_POST['pwConfirm'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $zipCode1 = $_POST['zipCode1'];
    $zipCode2 = $_POST['zipCode2'];
    $zipCode = "$zipCode1-$zipCode2";
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $phoneNum1 = $_POST['phoneNum1'];
    $phoneNum2 = $_POST['phoneNum2'];
    $phoneNum3 = $_POST['phoneNum3'];
    $phoneNum = "$phoneNum1-$phoneNum2-$phoneNum3";
    
    // $db = mysqli_connect("localhost", , ,);
    $query = "SELECT * FROM signup_practice WHERE user_id = '$userId'";
    $result = mysqli_query($db, $query);
    if($result){
        $numRow = mysqli_num_rows($result);
        if($numRow > 0) {
            echo "중복된 아이디입니다.";
            return;
        }
    }

    $query = "INSERT INTO signup_practice(user_id) VALUES ('$userId')";
    // $query = "INSERT INTO dd_topic(topic_name, topic_last_post_datetime) 
    // VALUES ('$topic', '$now')
    // ON DUPLICATE KEY UPDATE topic_last_post_datetime = '$now'"; 
    $result = mysqli_query($db, $query);
    if($result){
        echo "<h1>$userId</h1> 저장 완료";
    } else {
        echo "저장 실패";
    }
?>