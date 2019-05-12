<?php
$nombres[0] = ["nombre" => "Jorge Luis", "apellido_paterno" => "Loza", "apellido_materno" => "Gonz&aacute;les", "edad"=>"28 :'("];
$nombres[1] = ["nombre" => "Cristobal Ra&uacute;l", "apellido_paterno" =>"Arrazola", "apellido_materno" => "Loza", "edad"=>"16"];
$nombres[2] = ["nombre" => "Juan Carlos", "apellido_paterno" =>"Arrazola", "apellido_materno" => "Loza", "edad"=>"21"];

var_dump($nombres[0]);
var_dump($nombres[1]);
var_dump($nombres[2]);
echo "<br>";
echo "<br>";
for ($i=0; $i < 3; $i++) {
  echo $nombres[$i]["nombre"] . " " . $nombres[$i]["apellido_paterno"] . " " . $nombres[$i]["apellido_materno"] . " " . $nombres[$i]["edad"] . "<br>";
}
