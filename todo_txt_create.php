<?php

// var_dump($_POST);
// exit();

//データの受け取り
// $ = $_POST[""];
$name = $_POST["name"];
// $gender = $_POST["gender"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
// $sick = $_POST["sick"];
// $canna = $_POST["canna"];
$other = $_POST["other"];

// var_dump($_name);
// exit();


//データ1件を一行にまとめる（最後に改行を入れる）
// $write_data = [$name, $age, $phone, $mail, $other, $send,];
// $write_data = "{$name} {$gender} {$age} {$phone} {$mail} {$sick} {$canna} {$other} {$send}";
$write_data = array ($name, $age, $phone, $mail, $other,);


//ファイルを開く 因数が`a`に注目
// $file = fopen('./data/todo.txt', 'a');
$file = fopen('data/todo.csv', 'a');
//ファイルをロック
flock($file, LOCK_EX);

//指定したファイルに指定したデータを書き込む
fputcsv($file, $write_data);

//ファイルのロックを解除
flock($file, LOCK_UN);
//ファイルを閉じる
fclose($file);

//データ入力画面に移動する
header("Location:todo_txt_input.php");

?>







