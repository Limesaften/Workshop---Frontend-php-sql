<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	require_once('dbcon.php');
	$filmid = filter_input(INPUT_GET, 'filmid', FILTER_VALIDATE_INT)
		or die('Missing/illegal filmid parameter');
	$sql = 'SELECT title, description, rating FROM film WHERE film_id = ?';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('i', $filmid);
	$stmt->execute();
	$stmt->bind_result($title, $description, $rating);
		while($stmt->fetch()){ 
	
	?>
	<h1><?=$title?></h1>
	<p><?=$description?></p>
	<p>Rating <?=$rating?></p>
	<?php
		}
		$catsql = 'SELECT category_id FROM film_category WHERE film_id = ?';
		$catstmt = $link->prepare($catsql);
		$catstmt->bind_param('i', $filmid);
		$catstmt->execute();
		$catstmt->bind_result($catid);
	
		while($catstmt->fetch()){
			?>
		<a href="filmlist.php?categoryid=<?=$catid?>">Klik her for at se film i samme kategori</a>
			<?php
			
		}
			?>

</body>
</html>