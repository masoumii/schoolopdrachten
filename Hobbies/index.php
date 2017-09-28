
<?php
//////////////////////////////////////////////////////////////////
// HTML in PHP
$hobbies = [
    'Hacking',
    'Drinking',
    'Streaking',
    'Doing nothing',
    'Sleeping',
    'LARPing',
    'Stalking',
];

foreach ($hobbies as $hobby) {
	echo 
"<li>".$hobby."</li>";
}



//////////////////////////////////////////////////////////////////
?>


<?php
// PHP In HTML
$hobbies = [
    'Hacking',
    'Drinking',
    'Streaking',
    'Doing nothing',
    'Sleeping',
    'LARPing',
    'Stalking',
];
?>


<hr>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<li><?php echo $hobbies[0]; ?></li>
<li><?php echo $hobbies[1]; ?></li>
<li><?php echo $hobbies[2]; ?></li>
<li><?php echo $hobbies[3]; ?></li>
<li><?php echo $hobbies[4]; ?></li>
<li><?php echo $hobbies[5]; ?></li>
<hr>
</body>
</html>
