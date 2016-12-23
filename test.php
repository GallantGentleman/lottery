<?php

$url = "http://gallant.zzz.com.ua/uploads/";

$style = "style='border: 1px solid #f6f6f6; margin: 5px;'";

$users = [
  [
    'id' => 1,
    'pieces' => 3,
    'img' => 'image1.jpg'
  ],
  [
    'id' => 2,
    'pieces' => 1,
    'img' => 'image2.jpg'
  ],
  [
    'id' => 3,
    'pieces' => 2,
    'img' => 'image3.jpg'
  ],
  [
    'id' => 4,
    'pieces' => 2,
    'img' => 'image4.jpg'
  ],
  [
    'id' => 5,
    'pieces' => 2,
    'img' => 'image5.jpg'
  ]
];

echo "<div style='padding: 4px; border: 1px solid #d2d2d2;'>";

for ($i = 0; $i < count($users); $i++) {
  $url_n = $url.$users[$i]['img'];
  for($j = 0; $j < $users[$i]['pieces']; $j++) {
    $array[]['id'] = $users[$i]['id'];
    echo "<img $style src='$url_n' width='40' height='40'>";
  }
}

echo "</div>";

$count = count($array)-1;

$r = rand(0, $count);

$winner = $array[$r]['id'];

$winner_id = $array[$r]['id'];

$url_w = $url.$users[$winner-1]['img'];

// echo "<table border='1'>";
//
// echo "<tr>";
// echo "<td>COUNT</td>";
// echo "<td>".$count."</td>";
// echo "</tr>";
//
// echo "<tr>";
// echo "<td>RANDOM INT</td>";
// echo "<td>".$r."</td>";
// echo "</tr>";
//
// echo "<tr>";
// echo "<td>WINNER</td>";
// echo "<td>".$winner."</td>";
// echo "</tr>";
//
// echo "<tr>";
// echo "<td>WINNER ID</td>";
// echo "<td>".$winner_id."</td>";
// echo "</tr>";
//
// echo "<tr>";
// echo "<td>URL IMAGE</td>";
// echo "<td>".$url_w."</td>";
// echo "</tr>";
//
// echo "<table>";
//
// echo "<pre style='padding: 10px; background: #d2d2d2;width: 400px;border-radius: 20px;display:inline-block'>";
// echo print_r($array);
// echo "</pre>";
//
// echo "<pre style='padding: 10px; background: #d2d2d2;width: 400px;border-radius: 20px;'>";
// echo print_r($users);
// echo "</pre>";

echo "<h3>Выиграл пользователь с ID #".$users[$winner-1]['id']."</h3>";
echo "<br>";
echo "<img $style src='$url_w'>";
