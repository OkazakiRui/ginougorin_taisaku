<?php
$ary = ["one", "two", "three", "two"];
$newAry = array_unique($ary);
foreach ($newAry as $key => $value) {
  echo $key . " : " . $value . "<br />";
}