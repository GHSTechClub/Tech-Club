<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Internal Search Testing Ground</title>
</head>

<body>
	<form action="index.php" method="GET">
    	<input type="text" name="path" <?php echo 'value="' . $_GET['path'] . '"' ?> />
        <button type="submit">Submit</button>
    </form>
	<?php 
		include 'find.php';
		
		if(strlen($_GET['path']) > 0) {
			$directory = find_all_files($_GET['path']);
		}
		else {
			$directory = "Error";
		}
		echo '<ul>';
		foreach ($directory as $file) {
			echo '<li>' . $file . '</li>';
		}
		echo '</ul>';
	?>
</body>
</html>