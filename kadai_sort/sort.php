<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
         $nums = array(15, 4, 18, 23, 10);
         $array = $nums;  
        function sort_2way($array, $order) {
          if ($order === true) {
            echo "昇順にソートします。<br>";
            sort($array);
            foreach ($array as $num){
              echo $num . '<br>';
            }
          } else {
            echo "降順にソートします。<br>";
            rsort($array);
            foreach ($array as $num){
              echo $num . "<br>";
            }
          }
        }
        sort_2way($array, TRUE);
        sort_2way($array, FALSE);

        ?>
    </p>
</body>
</html>


