<?php

$str = '';
$array = array();

$file = fopen('data/todo.csv', 'r');
flock($file, LOCK_EX);
if ($file) {
    while ($line = fgetcsv($file)) {
      $str .= "<tr>";
      for($i=0; $i < count($line); $i++) {
        $str .= "<td>".$line[$i]."</td>";
        array_push($array, $line);
      }
            $str .= "</tr>";
    }
}

flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>わくわくアンケート集計（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>わくわくアンケート集計（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>
    <table class="answer">
      <thead>
        <tr>
          <?= $str ?>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </fieldset>
</body>

<!-- 背景動画 -->
<html>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/css/jquery.mb.YTPlayer.min.css">
<div id="ytPlayer" data-property="{
        videoURL: 'https://www.youtube.com/watch?v=JouMAHQXx-g',
        autoPlay: true,
        loop: 1,
        mute: true,
        showControls: false,
        showYTLogo: false,
    }">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"></script>
    <script>
        $(function () {
            $("#ytPlayer").YTPlayer();
        });
    </script>

<script>
  const array = <?= json_encode($array) ?>;
  console.log(array);
</script>



</html>