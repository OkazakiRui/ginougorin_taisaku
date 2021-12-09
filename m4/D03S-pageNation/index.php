<?php
$json = file_get_contents("./data.json");
// 第二引数
// true => 連想配列のオブジェクト
// false => オブジェクト
$ary = json_decode($json, true);

// データの数を数える
$data_length = count($ary);
// echo $data_length;

// 最大ページ数を決める
// ceilで小数点を削除
$maxpage = ceil($data_length / 10);

// page_id : 現在のページ数
// isset : 値がセットされているかつnullでない場合にtrueを返す
if(isset($_GET["page_id"])){
  $now = $_GET["page_id"];
} else {
  // ページ数がない時は1にする
  $now = 1;
}

// aryの何番目からのデータを取得するかを決める
$start_index = ($now - 1) * 10;

// js slice と同じような感じ
// 第1引数 : 配列
// 第2引数 : 開始のindex
// 第3引数 : 第2引数から何番目まで切り取るか
$display_data = array_slice($ary, $start_index, 10, true);

// 10件データを表示する
foreach($display_data as $data) {
  echo "title : " . $data["title"] . "<br />" . "description : " . $data["description"] . "<br />" . "score : " . $data["score"] . "<hr />";
}

?>
<div style="margin: 16px auto; width: fit-content; display: flex; gap: 8px;">
  <?php
  for ($i=$now-5; $i <= $now+5; $i++) { 
    if(!($i < 1 || $i > $maxpage)){
      echo "<a href='?page_id=" . $i . "'>" . $i . "</a>";
    }
  } 
  ?>
</div>