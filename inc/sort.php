<?php
include ('data.php');


$new_array=array();
foreach ($music as $id=>$item){
  $new_array[$id]=$item['Composer'];
}
asort($new_array);
$keys=array_keys($new_array);
$sorted_music=array();
foreach ($keys as  $value) {
  $sorted_music[]=$music[$value];
}

var_dump($sorted_music);
?>
