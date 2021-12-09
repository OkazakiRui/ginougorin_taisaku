<?php
$ary1 = ["okazaki", "higa", "airi", "ryosei", "iida"];
$ary2 = ["okazaki", "rui",  "airi", "tanaka", "ryosei", "yumeki"];
$intersect = array_intersect($ary1, $ary2);
foreach($intersect as $value){
  echo $value . "<br />";
}