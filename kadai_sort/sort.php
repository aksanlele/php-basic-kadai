<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 課題</title>
</head>

<body>
    <p>
        <?php

        $nums = [15, 4, 18, 23, 10];

        //関数を定義する
        function sort_2way($array, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }

            //配列$arrayの要素を1つずつ順番に出力する
            //($arrayには$numsを引数として渡す)
            foreach ($array as $element) {
                echo $element . '<br>';
            }
        }

        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);

        ?>
    </p>
</body>

</html>