<?php
	include '/home/benrud/public_html/club/database.php';
	$pdo = Database::connect();
	
	// retrieves all posts in descending order based on when they were made
	$sql = "SELECT * FROM posts WHERE id = '". $_GET['id'] ."';";
	$count = 0;
	foreach ($pdo->query($sql) as $row) {
		$date = explode('-', $row['date_time']);
		$date_day = explode(' ', $date[2]);
		$time = explode(':', $date_day[1]);
		if ($time[0] > 12) {
			$time_hour = $time[0] - 12;
			$cycle = 'PM';
		}
		else {
			$time_hour = $time[0];
			$cycle = 'AM';
		}
		
		$title = $row['title'] .'</h4>';
		$category = $row['category'];
		$description = $row['description'];
		$date = $date[1] . '/' . $date_day[0] . '/' . $date[0];
		$time = $time_hour . ':' . $time[1] . ':' . $time[2] . ' ' . $cycle;
		$tags = $row['tags'];
		$user = $row['user'];
		$type = $row['post_type'];
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title><?php echo $title; ?> | Forum | Grossmont Tech Club</title>
        <?php include '/home/benrud/public_html/club/assets/includes/links.html'; ?>
    </head>
    
    <body>
    
        <?php include '/home/benrud/public_html/club/assets/includes/nav.html'; ?>
        
        <div class="container mx-auto">
        	<h1><?php echo $title; ?></h1>
            <h4>Posted by <?php echo '<a href="/club/pages/forum/user/?user='. $user .'">'. $user .'</a>'; ?></h4>
            <p id="description"><?php echo $description; ?></p>
            <hr />
            
        </div>

    </body>
</html>