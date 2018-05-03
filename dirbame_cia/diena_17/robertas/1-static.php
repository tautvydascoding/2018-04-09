<?php

function work($times){
  static $count = 0;
  if($times <= 0) return $count;
  $count++;
  return work($times - 1);
}

echo "Work: " . work(2000000);
