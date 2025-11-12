<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //関数を定義する
        function sort_2way($array, $order) {
            //$orderが昇順の場合、「昇順にソートします」と出力する
            if ($order){
                echo '昇順にソートします。<br>';
                sort ($array);
            }
            else{
                echo '降順にソートします。<br>';
                rsort ($array);
                }
                foreach ($array as $num){
                    echo $num. '<br>';
                }
            }
        $nums = [15, 4, 18, 23, 10];
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>