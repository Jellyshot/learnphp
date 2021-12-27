<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array배우기</title>
</head>
<body>
    <h1>Array Example</h1>
    <?php
     $coworker = array( '정승목', '김희교', '고은희' ); #배열 선언 및 지정

     $coworkers = array(
         '반장' => '정승목',
         '부반장' => '김희교',
         '총무' => '고은희');
        
         echo $coworkers[0]. "<br>";
        //  위에서 key와 value 값으로만 입력했기 때문에 index값으로 출력이 되지 않는다. value값으로만 입력할 경우는 index값으로 출력 가능.
        echo $coworker[0]. "<br>"; //이때는 출력 ok

         echo $coworkers['부반장']. "<br>";
         
         var_dump($coworkers) ."\n";
        //  string은 byte로 계산하며 한글은 한글자에 3byte이다.
        
         echo count($coworkers). "<br>";
         var_dump(count($coworkers)). "<br>";

        // 배열에 새로운 요소 추가하기 (1차원 배열)
        array_push($coworker, '고유비');
        var_dump($coworker) ."<br>";
    //array(4) { [0]=> string(9) "정승목" [1]=> string(9) "김희교" [2]=> string(9) "고은희" [3]=> string(9) "고유비" }

    //  2차원배열에 새로운 요소 추가하기
        $coworkers["유하르방"] = "고유비";
        '<p>' .var_dump($coworkers) .'</p>';
    // array(4) { ["반장"]=> string(9) "정승목" ["부반장"]=> string(9) "김희교" ["총무"]=> string(9) "고은희" ["유하르방"]=> string(9) "고유비" }


    ?>
</body>
</html>