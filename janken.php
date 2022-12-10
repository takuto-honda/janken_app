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

<?php if(!empty($_POST)):?>

  <?php
    // 人間の出し手
    if($_POST['action']=='rock'){
      $human = "グー";
    }elseif($_POST['action']=='scissors'){
      $human = "チョキ";
    }elseif($_POST['action']=='paper'){
      $human = "パー";
    }
    // コンピューターの出し手
    $computer_output = rand(1,3);
    if($computer_output == 1){
      $computer = "グー";
      echo $computer;
    }elseif($computer_output == 2){
      $computer = "チョキ";
      echo $computer;
    }elseif($computer_output == 3){
      $computer = "パー";
      echo $computer;
    }
  ?>

  <div class="result">
    <!-- 勝ち -->
    <?php if($human == "グー" && $computer == "チョキ"):?>
    <div class="win">おめでとう！<br>君の勝利だ！！</div>
    <?php endif;?>
    <?php if($human == "チョキ" && $computer == "パー"):?>
    <div class="win">おめでとう！<br>君の勝利だ！！</div>
    <?php endif;?>
    <?php if($human == "パー" && $computer == "グー"):?>
    <div class="win">おめでとう！<br>君の勝利だ！！</div>
    <?php endif;?>
    <!-- あいこ -->
    <?php if($human == "グー" && $computer == "グー"):?>
    <div class="draw">あいこ！<br>次はどうする？</div>
    <?php endif;?>
    <?php if($human == "チョキ" && $computer == "チョキ"):?>
    <div class="draw">あいこ！<br>次はどうする？</div>
    <?php endif;?>
    <?php if($human == "パー" && $computer == "パー"):?>
    <div class="draw">あいこ！<br>次はどうする？</div>
    <?php endif;?>
    <!-- 負け -->
    <?php if($human == "グー" && $computer == "パー"):?>
    <div class="lose">残念...<br>また頑張ろう！！</div>
    <?php endif;?>
    <?php if($human == "チョキ" && $computer == "グー"):?>
    <div class="lose">残念...<br>また頑張ろう！！</div>
    <?php endif;?>
    <?php if($human == "パー" && $computer == "チョキ"):?>
    <div class="lose">残念...<br>また頑張ろう！！</div>
    <?php endif;?>
  </div>
<?php endif;?>
</body>
</html>