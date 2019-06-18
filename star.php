<!DOCTYPE html>
<html>
<head>
	<title>Star Rating</title>
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.starrr{
			color: green;
		}
	</style>
</head>
<body>
<h1>Star Rating</h1>
<span class="starrr">
<?php
	$rating = 2;
	for( $i = 0; $i < $rating; $i++ ) {
		echo '<i class="fa fa-star"></i>';
	}

	$emptyStar = 5 - $rating;

	for( $j = 0; $j < $emptyStar; $j++ ) {
		echo '<i class="fa fa-star-o"></i>';
	}
?>
<select>
	<option value="1">1 Star</option>
	<option value="2">2 Star</option>
	<option value="3">3 Star</option>
	<option value="4">4 Star</option>
	<option value="5">5 Star</option>
</select>
</span>
</body>
</html>