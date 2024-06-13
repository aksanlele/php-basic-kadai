<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編 課題</title>
 </head>
 
 <body>
     <p>
         <?php
         // 連想配列に値を代入する
         $item_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

         //配列$itm_dataのインデックスと値を1つずつ順番に出力
         foreach ($item_data as $key => $value) {

            echo "{$key}：{$value}<br>";

         }
         ?>
     </p>
 </body>
 
 </html>