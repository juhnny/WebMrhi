<?php
    

    $files = $_FILES['myFiles'];
    //파일을 3개 보냈으면 $files 배열도 세칸일것 같지만 다소 특이하게도
    //파일을 한개만 보낼 때처럼 meta data 5칸으로 이뤄져있고
    //대신 각 메타 데이터마다 파일 개수만큼의 정보를 갖고 있다.
    $size = count($files);  //그러니 $size는 파일을 몇개를 보내던지 5로 일정
    $numOfFiles = count($files['name']);

    echo "메타데이터 종류: $size<br>";
    echo "그 안에 든 파일 개수: $numOfFiles<br>";

    //name, type, size, 
    for($i = 0; $i < $numOfFiles; $i++){
        $name = $files['name'][$i];
        $tmpName = $files['tmp_name'][$i];

        $dstName = "./uploads/" . date('YMdhms') . $name;
        move_uploaded_file($tmpName, $dstName);

        echo "<img src='$dstName' width='100'><br>";
    }


?>