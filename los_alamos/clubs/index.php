<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Home Page</title>
        <?php include '/home/benrud/public_html/club/assets/includes/links.html'; ?>
    </head>
    
    <body>
        <div class="container">
			<?php
            if ($_GET['user_type'] == 'admin' && strlen($_GET['username']) > 0) {
                include 'admin.php';
            }
            elseif ($_GET['user_type'] == 'member' && strlen($_GET['username']) > 0) {
                include 'member.php';
            }
			else {
				include 'login.html';
			}
            
            ?>
        </div>
    </body>
</html>