<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
           function sort_2way($array, $order){
            if ($order == true){
              sort($array); // numsをarrayに変更
              echo "昇順にソートします。<br>";
              
              foreach($array as $item) { // $arrayを利用
                echo "$item<br>";
              }
              
            } else {
              rsort($array); // numsをarrayに変更
              echo "降順にソートします。<br>";
              
              foreach($array as $item) { // $arrayを利用
                echo "$item<br>";
              }
            }   
          }
    
          // 関数の外で配列を定義
          $nums = array(15, 4, 18, 23, 10 );
          
          // 関数を呼び出し、実際の配列を引数として渡す
          sort_2way($nums, TRUE);
          sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
