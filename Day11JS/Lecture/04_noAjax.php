<?php
    header('Content-Type:text/html; charset=utf-8');

    // form요소를 이용하여 GET방식으로 전달된 데이터 방식
    $name= $_GET['name'];
    $email= $_GET['email'];

    //echo "$name 님이 등록하셨습니다 : $email";
    // form요소를 사용하면 ooo.html 페이지가 ooo.php 로 완전 페이지 전환됨
    // 즉, 기존 html페이지가 없어짐. 그럼..어떻게??
    // echo 시킬때 <>태그문 사용가능하죠. 그러니.. 기존 html화면을 모두
    // 다시 echo로 씀.

    // echo ("
    // <!DOCTYPE html>
    // <html>
    //     <head>
    //         <meta charset='UTF-8'>
    //         <title>no ajax</title>
    //     </head>
    //     <body>
            
    //         <h3>회원가입 페이지</h3>
    
    //         <form action='./04_noAjax.php' method='get'>
    //             <input type='text' name='name' placeholder='이름'>
    //             <input type='text' name='email' placeholder='이메일'>
    
    //             <input type='submit' value='회원가입'>
    //         </form>
    
    //         <hr>
    //         <textarea id='ta' cols='30' rows='3'>$name 님이 등록하셨습니다 : $email</textarea>
    //     </body>
    // </html>
    // ")

?>

<!-- php영역밖에 있으면 그냥 echo -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>no ajax</title>
    </head>
    <body>
        
        <h3>회원가입 페이지</h3>

        <form action="./04_noAjax.php" method="get">
            <input type="text" name="name" placeholder="이름">
            <input type="text" name="email" placeholder="이메일">

            <input type="submit" value="회원가입">
        </form>

        <hr>
        <textarea id="ta" cols="30" rows="3"><?php echo "$name 님이 등록하셨습니다 : $email" ?></textarea>

    </body>
</html>