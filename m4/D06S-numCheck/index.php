<?php
if($_GET["num"] < 50) {
  echo "小さすぎます。";
}
if($_GET["num"] > 50) {
  echo "大きすぎます。";
}
if($_GET["num"] == 50) {
  echo "50です。";
}