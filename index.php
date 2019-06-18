<?php
// Report runtime errors
ini_set("display_errors", "1");
error_reporting(E_ALL);


include 'person.php';

$person = new Person();

$myinfo = $person->getAll(2);
// print_r($myinfo);

// die();

echo '
	<table>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Age</th>
	</tr>
	';

	echo '

	<tr>
	<td>'.$myinfo['id'].'</td>
	<td>'.$myinfo['name'].'</td>
	<td>'.$myinfo['age'].'</td>
	</tr>';


// 	foreach($myinfo as $info) :
// echo '
// 	<tr>
// 	<td>'.$info['id'].'</td>
// 	<td>'.$info['name'].'</td>
// 	<td>'.$info['age'].'</td>
// 	</tr>';
// 	endforeach;

echo '
</table>';