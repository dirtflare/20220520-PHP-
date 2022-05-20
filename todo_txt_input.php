<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
            h1 {color: green; }
            
  </style>
  <title>アンケート（入力画面）</title>
</head>

<body>
  <a href="./todo_txt_read.php">アンケート結果画面</a>
<form action="todo_txt_create.php" method="POST">
  <fieldset>
    <div class="container">
    <!-- タイトル -->
    <h1>わくわくアンケート</h1>

    <!-- 名前 -->
    <div class="wright_name">
    ・お名前： <input type="text" name="name" placeholder=那須トウコ>
    </div>

    <!-- 性別 -->
    <!-- <div class="gender_select">
    ・お性別：
      <input class="form-check-input" type="radio" name="gender" id="gender1" value="0" >
      <label class="form-check-label">男性</label>
      <input class="form-check-input" type="radio" name="gender" id="gender2" value="1" >
      <label class="form-check-label">女性</label>
      <input class="form-check-input" type="radio" name="gender" id="gender3" value="2" >
      <label class="form-check-label">超越</label>
    </div> -->

    <!-- 年齢 -->
    <!-- <div class="age-group">
    <label for="age">・ご年齢：</label>
      <select class="form-control" id="age" name="age">
          <option value="">選択してください</option>
          <option value="1">〜19歳</option>
          <option value="2">20歳〜29歳</option>
          <option value="3">30歳〜39歳</option>
          <option value="4">40歳〜49歳</option>
          <option value="5">50歳〜59歳</option>
          <option value="6">60歳〜</option>
    </select>
    </div> -->

    <!-- 年齢第二案 -->
    <div class="age-group">
    <label>・ご年齢： <input type="text" name="age" placeholder=18></label>
    </div>

    <!-- 電話番号 -->
    <div class="phone_number">
        <label>・お電話：
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="090-1234-5678">
        </label>
    </div>

    <!-- メールアドレス -->
    <div class="mail_form">
      <label>・メール：
      <input type="email" id="mail" name="mail" placeholder="nas_info@sample.com">
    </label>
    </div>


    <!-- 症状選択 -->
    <!-- <div class="sick-group" id="sick"> -->
    <!-- ・主症状：
    <select name="sick">
      <option value="stress">ストレス</option>
      <option value="pain" selected>痛み</option>
      <option value="sleep">不眠</option>
      <option value="nas" disabled>NAS</option>
      <option value="sick">鬱・不安</option>
    </select>
    </div> -->

    <!-- ・興味のある成分
    <div class="canna-group" id="canna" name="canna"> -->
    <!-- ・興味のある成分： -->
      <!-- <label><input type="checkbox" name="canna">CBD</label>
      <label><input type="checkbox" name="canna">CBN</label>
      <label><input type="checkbox" name="canna">CBG</label>
      <label><input type="checkbox" name="canna">CBC</label>
      <label><input type="checkbox" name="canna">THCV</label>
    </div> -->

    <!-- その他 テキスト入力 -->
    <label>・ご意見：</label>
    <div class="other">
    <textarea name="other" rows="3" cols="30" placeholder=ご記入ください。></textarea>
    </div>

    <!-- 送信 -->
    <!-- <div class="send_button" id="send" name="send"> -->
    <button>送信</button>
    <!-- </div> -->
    </div>
  </fieldset>
</form>

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

</html>

</body>

</html>