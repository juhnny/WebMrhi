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
    
    //유효성 검사 생략

    //중복 검사
    $db = mysqli_connect("localhost", "iwibest", "de2154178!", "iwibest");
    $query = "SELECT * FROM signup_practice WHERE user_id = '$userId'";
    $result = mysqli_query($db, $query);
    if($result){
        $numRow = mysqli_num_rows($result);
        if($numRow > 0) {
            echo "중복된 아이디입니다.<br><br>";
            return;
        }
    }

    //비밀번호 암호화 생략

    //DB에 저장
    $query = "INSERT INTO signup_practice(user_id, user_pw, user_name, user_email, user_zipcode, user_address1, user_address2, user_phone) 
    VALUES ('$userId', '$pw', '$userName', '$email', '$zipCode', '$address1', '$address2', '$phoneNum')";

    $result = mysqli_query($db, $query);
    if($result){
        echo "저장 완료";

        $query = "SELECT user_no, user_id FROM signup_practice WHERE user_id = '$userId'";
        $result = mysqli_query($db, $query);
        if($result){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $no = $row['user_no'];
            $id = $row['user_id'];
            echo "저장된 회원번호: $no, 아이디: $id";
        }
    } else {
        echo "저장 실패";
    }
?>
