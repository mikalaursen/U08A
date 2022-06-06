<?php

if (isset($_GET["submit"])) {
	$dessert = $_GET["dessert"];
if ($dessert == "ice") {
$image = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/What_a_lovely_icecream.jpg/640px-What_a_lovely_icecream.jpg";

} else if ($dessert == "tira") {
$image = "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Tiramisu_2022.jpg/640px-Tiramisu_2022.jpg";

} else if ($dessert == "cake") {
$image = "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Apple_coffee_cake.jpg/640px-Apple_coffee_cake.jpg";

}
printf ("<img src="%s">",$image);

}
?>
