<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title><?php echo $_GET['type'] ?> Posts | Forum | Grossmont Tech Club</title>
        <?php include '/home/benrud/public_html/club/assets/includes/links.html'; ?>
    </head>
    
    <body>
    
        <?php include '/home/benrud/public_html/club/assets/includes/nav.html'; ?>
        
        <div class="container mx-auto"> 
        	<h1><?php echo $_GET['type'] ?> Posts</h1>
            <?php
				
                include '/home/benrud/public_html/club/database.php';
                $pdo = Database::connect();
				
                // retrieves all posts in descending order based on when they were made
				$sql = "SELECT * FROM posts WHERE post_type = '". $_GET['type'] ."' ORDER BY date_time DESC;";
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
					
					echo '<div class="wrapper">';
					echo '<h4><a href="/club/pages/forum/post/?id='. $row['id'] .'">'. $row['title'] .'</a></h4>';
					echo '<p>User: <a href="#">'. $row['user'] .'</a></p>';
					echo '<p>Category: <a href="/club/pages/forum/category/?category='. $row['category'] .'">'. $row['category'] .'</a></p>';
					echo '</div>';
					echo '<br />';
                }
            ?>
            
        </div>

    </body>
</html>