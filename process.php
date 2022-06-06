<?php

if (isset($_GET['submit'])) {
	$pet_type = $_GET['pet_type'];
if ($pet_type == "cat") {
$image = 'https://upload.wikimedia.org/wikipedia/commons/a/a3/June_odd-eyed-cat.jpg';

} else if ($pet_type == "dog") {
$image = 'https://upload.wikimedia.org/wikipedia/commons/4/47/American_Eskimo_Dog.jpg';

} else if ($pet_type == "bird") {
$image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Pet_European_Starling_Bird.jpg/1199px-Pet_European_Starling_Bird.jpg?20110616143917';

}
printf ('<img src="%s">',$image);

}
?>
