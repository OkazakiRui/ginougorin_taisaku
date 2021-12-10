<?php
// 画像をobjectとして読み込み
// jpeg : imagecreatefromjpeg
// png : imagecreatefrompng
$img = imagecreatefromjpeg("./img.jpg");

// 画像のpx数を取得
$img_width = imagesx($img);
$img_height = imagesy($img);
$img_size = $img_height * $img_width;

$total_red = 0;
$total_green = 0;
$total_blue = 0;

for($y = 0; $y < $img_height; $y++){
  for($x = 0; $x < $img_width; $x++){
    // imagecolorat : 返り値に10進数のRGBが帰ってくる
    $rgb = imagecolorat($img, $x, $y);
    // 10進数の各色を取得
    $red = ($rgb >> 16) & 0xFF;
    $green = ($rgb >> 8) & 0xFF;
    $blue = $rgb & 0xFF;
    
    $total_red += $red;
    $total_green += $green;
    $total_blue += $blue;
  }
}

// 合計のrgbをそれぞれ画像の合計px数で割る
// 16進数に変換して出力
// dechex( int $number ) : 16進数に変換した文字列の数値を返す
echo '<img src="D05S-colorPicker/img.jpg" alt="">';
$result_color = "#" . dechex($total_red / $img_size) . dechex($total_green / $img_size) . dechex($total_blue / $img_size);
echo '<div style="background: ' . $result_color . '; height: 300px;">' . $result_color . '</div>';