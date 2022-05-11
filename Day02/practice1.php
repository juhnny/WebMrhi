<?php
    header('Content-Type:text/html; charset=utf=8');

    //form 태그의 target에 GET 방식으로 꼽사리 끼운 데이터들
    $aaa = $_GET['aaa'];
    $bbb = $_GET['bbb'];

    echo "$aaa<br>";
    echo "$bbb<hr>";

    //POST로 전송받은 값들
    //다양한 input으로 입력받음
    $cardType = $_POST['card_type'];
    $cardNo = $_POST['select_card_no'];
    $crcNo = $_POST['select_crc_no'];
    $OwnerName = $_POST['owner_name'];
    echo "$cardType<br>";
    echo "$cardNo<br>";
    echo "$crcNo<br>";
    echo "$OwnerName<hr>";

    //input type="file"을 통해 여러 파일을 보내온 경우
    $files = $_FILES['myFiles'];
    $numOfFiles = count($files['name']);
    for($i = 0; $i < $numOfFiles; $i++){
        $srcName = $files['name'][$i];
        $tmpName = $files['tmp_name'][$i];

        $dstName = "./uploads/" . date('YMdhms') . $srcName;
        move_uploaded_file($tmpName, $dstName);
        echo "srcName: $srcName<br>";
        echo "<img src='$dstName' width='200'><br>";
    }


?>