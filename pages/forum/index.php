<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Forum | Grossmont Tech Club</title>
        <?php include '/home/benrud/public_html/club/assets/includes/links.html'; 
		$pageID = "index"; ?>
    </head>
    
    <body>
    
        <?php include '/home/benrud/public_html/club/assets/includes/nav_forum.html'; ?>
        
        <span id="ID">forum</span>
        <div class="container mx-auto"> 
            <h2 style="color: red;">** This area is currently under construction **</h2>
            <h1 id="create">Forum</h1>
            <h3>Latest Posts:</h3>
            <p><a href="create.php">Create</a></p>
			<?php
				
                include '/home/benrud/public_html/club/database.php';
                $pdo = Database::connect();
				
                // retrieves all posts in descending order based on when they were made
				$sql = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 5";
                $count = 0;
                foreach ($pdo->query($sql) as $row) {
					echo '<div class="wrapper">';
					echo '<h4><a href="/club/pages/forum/post/?id='. $row['id'] .'">'. $row['title'] .'</a></h4>';
					echo '<p>User: <a href="/club/pages/forum/user/?user='. $row['user'] .'">'. $row['user'] .'</a></p>';
					echo '<p>Category: <a href="/club/pages/forum/category/?category='. $row['category'] .'">'. $row['category'] .'</a></p>';
					echo '<p><a href="/club/pages/forum/type/?type='. $row['post_type'] .'">'. $row['post_type'] .'</a></p>';
					echo '</div>';
					echo '<br />';
                }
            ?>
			</div>
        </div>

    </body>
</html>