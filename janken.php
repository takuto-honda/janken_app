<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>じゃんけんゲーム</title>
  <link rel="stylesheet" href="./app.css">
</head>
<body>
<div class="preparation">いざ尋常にじゃんけん！...</div>
<br>
<br>
<form action="janken.php" method="POST">
  <div class="box">
    <select name="action">
      <option value="rock" name="rock">グー</option>
      <option value="scissors" name="scissors">チョキ</option>
      <option value="paper" name="paper">パー</option>
    </select>
  </div>
  <button class="action-button" type="submit">決定</button>
</form>
<div class="result">
  <div class="win">おめでとう！<br>君の勝利だ！！</div>
  <div class="draw">あいこ！<br>次はどうする？</div>
  <div class="lose">残念...<br>また頑張ろう！！</div>
</div>
</body>
</html>