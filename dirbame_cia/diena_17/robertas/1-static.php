<?php

function work($times){
  static $count = 0;
  if($times <= 0) return $count;
  $count++;
  return work($times - 1);
}

// @ $times ~ 2.000.000 -> Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 262144 bytes)
echo "Work: " . work(100);
