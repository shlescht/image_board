<?php
echo "primer parametro es lugar del arreglo.<br>";
echo 'segundo lugar el valor del lugar en el arreglo.<br>';
echo 'array = [<i>"caca"</i> => <b>"ex"</b>, <i>"popo"</i> => <b>"cre"</b>, <i>"mierda"</i> => <b>"mento"]</b><br>';
echo 'imprime:<br>';
$array = ["caca" => "ex", "popo" => "cre", "mierda" => "mento"];
echo $array["caca"].$array["popo"].$array["mierda"];
$array["uno"] = "chis";
echo "<br>".$array["uno"]."<br>";

var_dump($array);
