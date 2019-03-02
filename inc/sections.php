<?php
// Setting section for page
$section = null;

include('subsections.php');

if(isset($_GET['instrument'])){
  $output = array();
  if ($_GET['instrument'] == 'piano'){
    $section = "Piano";
  } else if ($_GET['instrument'] == 'flute'){
    $section = "Flute";
  } else {$output=$grade_subsection;}
  foreach ($grade_subsection as $item){
    if (strtolower($item['Instrument']) == strtolower($section)){
      $output[] = $item;
    }
  }
} else {
  $output = $grade_subsection;

}

?>
