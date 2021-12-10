<?php

  $err = [
    "name" => false,
    "mail" => false,
    "number" => false,
  ];

  if($_POST){
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $number = $_POST["number"];
  
    $err = [
      "name" => false,
      "mail" => false,
      "number" => false,
    ];

    if ($name == "") {
      $err["name"] = true;
    }
    
    // preg_match(パターン, 評価対象) : 許容なら 1
    if (!preg_match("[@]", $mail)) {
      $err["mail"] = true;
    }
    
    if($number < 1 || $number > 10) {
      $err["number"] = true;
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    span{
      color:red;
    }
  </style>
</head>
<body>
  <form action="#" method="POST">
    <label>name[必須項目] : <input value="<?php echo $name ?>" type="text" name="name">
      <span><?php echo $err["name"] ? "入力してください" : ""; ?></span>
    </label><br>
    <label>mail[@が含まれているか] : <input value="<?php echo $mail ?>" type="text" name="mail">
    <span><?php echo $err["mail"] ? "メールアドレスが正しくありません" : ""; ?></span>
    </label><br>
    <label>number[1-10の整数] : <input value="<?php echo $number ?>" type="number" name="number">
      <span><?php echo $err["number"] ? "正しい値を入力してください" : ""; ?></span>
    </label><br>
    <button type="submit">submit</button>
  </form>
</body>
</html>