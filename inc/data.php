<?php
$music = [];
$music[]= [
  'Title' => 'Minuet in G',
  'Composer' => 'Mozart, Wolfgang Amadeus',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'A',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Allegretto',
  'Composer' => 'Diabelli, Anton',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'A',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Andante',
  'Composer' => 'Attwood, Thomas',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'A',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'The Flying Trunk',
  'Composer' => 'Adair, Yvonne',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'B',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Quasi adagio',
  'Composer' => 'Bartok, Bela',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'B',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Flying Above the Clouds',
  'Composer' => 'Bullard, Alan',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'B',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Baby Bouncer',
  'Composer' => 'Wedgwood, Pam',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'C',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Jazz! Goes the Weasel',
  'Composer' => 'Maxner, Rebekah',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'C',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Rhyme Time',
  'Composer' => 'Milne, Elissa',
  'Instrument' => 'Piano',
  'Grade' => 1,
  'List' => 'C',
  'Location' => 'LCM Piano Handbook Grade 1'
];
$music[]=[
  'Title' => 'Allegretto',
  'Composer' => 'Kohler, Ernesto',
  'Instrument' => 'Flute',
  'Grade' => 1,
  'List' => 'A',
  'Location' => 'LCM Flute Handbook Grade 1'
];
$music[]=[
  'Title' => 'Allegretto',
  'Composer' => 'Diabelli, Antonio',
  'Instrument' => 'Flute',
  'Grade' => 1,
  'List' => 'B',
  'Location' => 'LCM Flute Handbook Grade 1'
];
$music[]=[
  'Title' => 'Reflections',
  'Composer' => 'Turnbull, Kit',
  'Instrument' => 'Flute',
  'Grade' => 1,
  'List' => 'C',
  'Location' => 'LCM Flute Handbook Grade 1'
];
$music[]=[
  'Title' => 'Example',
  'Composer' => 'Example',
  'Instrument' => 'Piano',
  'Grade' => 2,
  'List' => 'C',
  'Location' => 'LCM Flute Handbook Grade 1'
];
$music[]=[
  'Title' => 'Example',
  'Composer' => 'Example',
  'Instrument' => 'Flute',
  'Grade' => 2,
  'List' => 'C',
  'Location' => 'LCM Flute Handbook Grade 1'
];




//Sorting function
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



?>
