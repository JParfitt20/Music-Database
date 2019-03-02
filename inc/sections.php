<?php
// Setting section for page
$section = null;


if(isset($_GET['instrument'])){
  $output = array();
  if ($_GET['instrument'] == 'piano'){
    $section = "Piano";
  } else if ($_GET['instrument'] == 'flute'){
    $section = "Flute";
  }
  foreach ($music as $item){
    if (strtolower($item['Instrument']) == strtolower($section)){
      $output[] = $item;
    }
  }
} else {
  $output = $music;

}




// if(isset($_GET['grade'])){
//   $output_2 = array();
//   if ($_GET['grade'] == "1"){
//     $grade = 1;
//   } else if ($_GET['grade'] == "2"){
//     $grade = 2;
//   }
//   foreach ($output as $item){
//     if ($item['Grade'] == $grade){
//       $output_2[] = $item;
//     }
//   }
//
// }

// if(isset($_GET['list'])){
//   if ($_GET['list'] == 'a'){
//     $section = "A";
//   } else if ($_GET['list'] == 'b'){
//     $section = "B";
//   } else if ($_GET['list'] == 'c'){
//     $section = "C";
//   }
//   foreach ($music as $item){
//     if (strtolower($item['List']) == strtolower($section)){
//       $output[] = $item;
//     }
//   }
// }
// ifse {
//   $output=$music;}
?>
