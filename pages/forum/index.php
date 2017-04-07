<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Forum | Grossmont Tech Club</title>
        <?php include '/home/benrud/public_html/club/assets/includes/links.html'; ?>
    </head>
    
    <body>
    
        <?php include '/home/benrud/public_html/club/assets/includes/nav.html'; ?>
        
        <div class="container mx-auto"> 
        	<h2 style="color: red;">** This area is currently under construction **</h2>
            <h1>Forum</h1>
            <h2>Latest Posts:</h2>
            <p><a href="create.php">Create</a></p>
			<?php
                include '/home/benrud/public_html/club/database.php';
                $pdo = Database::connect();
				
                // retrieves all posts in descending order based on when they were made
				$sql = "SELECT * FROM posts ORDER BY date_time DESC";
                $count = 0;
                foreach ($pdo->query($sql) as $row) {
					echo "<h3>". $row['id'] ."</h3>";
					echo "<p>". $row['title'] ."</p>";
					echo "<p>". $row['description'] ."</p>";
					echo "<p>". $row['date_time'] ."</p>";
                	echo "<p>". $row['tags'] ."</p>";
					echo "<p>". $row['user'] ."</p>";
					echo "<p>". $row['post_type'] ."</p>";
                }
            ?>
			</div>
        </div>

    </body>
</html>