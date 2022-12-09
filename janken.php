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
<div class="preparation">じゃんけん！...</div>
<select name="sources" id="sources" class="custom-select sources select-box" placeholder="Source Type">
  <option value="rock">グー</option>
  <option value="scissors">チョキ</option>
  <option value="paper">パー</option>
</select>

<div class="result">
  <div class="win">おめでとう！君の勝利だ！！</div>
  <div class="draw">あいこ！次はどうする？</div>
  <div class="lose">残念...また頑張ろう！！</div>
</div>
</body>
</html>