<?php
include ('data.php');

if(isset($_GET['list'])){
  $list = $_GET['list'];
  $list_subsection = array();
  foreach($sorted_music as $item){
    if (strtolower($item['List']) == $list){
      $list_subsection[]=$item;
    }
  }
}else {$list_subsection=$sorted_music;}

if (isset($_GET['grade'])){
  $grade=$_GET['grade'];
  $grade_subsection=array();
  foreach($list_subsection as $item){
    if ($item['Grade'] == $grade){
      $grade_subsection[]=$item;
    }
  }
} else {$grade_subsection=$list_subsection;}




?>
