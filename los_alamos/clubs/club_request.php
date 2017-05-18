<?php
include '/home/benrud/public_html/club/database.php';
        $pdo = Database::connect();
        $sql = 'SELECT * FROM club_requests WHERE id = ' . $_GET['id'] . ';';
        foreach ($pdo->query($sql) as $request) {
			$title = $request['name'];
			$desc = $request['description'];
		}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<?php
include '/home/benrud/public_html/club/assets/includes/links.html';
?>
</head>

<body>
	<div class="container">
		<h1><?php echo $title; ?></h1>
    	<p><?php echo $desc; ?></p>
    </div>
</body>
</html>