<?php
$datetime = date('Y-m-d H:i:s') ;

if(isset($_POST['create_post_title'])){
	require('/home/benrud/public_html/club/database.php');
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO posts (title,description,date_time,tags,user,post_type,category) VALUES(?, ?, ?, ?, ?, ?, ?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($_POST['create_post_title'],$_POST['create_post_description'],$datetime,$_POST['create_post_tags'],$_POST['create_post_user'],$_POST['create_post_type'],$_POST['create_post_category']));
	Database::disconnect();
	header("Location: index.php");
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Create a Post | Grossmont Tech Club</title>
        <?php include '/home/benrud/public_html/club/assets/includes/links.html'; ?>
    </head>
    
    <body>
    
        <?php include '/home/benrud/public_html/club/assets/includes/nav.html'; ?>
        
        <div class="container mx-auto"> 
        	<h1>Create Post</h1>
            <form method="post" action="create.php">
            	<div class="form-group">
                    <label for="create_post_user">Username:</label>
                    <input type="text" name="create_post_user" maxlength="10" class="form-control" id="create_post_user">
                </div>
                <div class="form-group">
                    <label for="create_post_type">Post Type:</label>
                    <select class="form-control" id="create_post_type" name="create_post_type">
                    	<option selected disabled>Select</option>
                        <option>Help Wanted!</option>
                        <option>Question</option>
                        <option>Discussion</option>
                        <option>Announcement</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="create_post_type">Category:</label>
                    <select class="form-control" id="create_post_category" name="create_post_category">
                    	<option selected disabled>Select</option>
                        <option>mobile</option>
                        <option>web</option>
                        <option>game</option>
                        <option>desktop</option>
                        <option>other</option>
                    </select>
                </div>
            	<div class="form-group">
                    <label for="create_post_title">Title of Post:</label>
                    <input type="text" name="create_post_title" class="form-control" id="create_post_title">
                </div>
                <div class="form-group">
                	<label for="create_post_description">Description of Your Post:</label>
                	<textarea class="form-control" id="create_post_description" name="create_post_description" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                	<label for="create_post_tags">Tags:</label>
                	<textarea class="form-control" id="create_post_tags" name="create_post_tags" rows="1" placeholder="Tags"></textarea>
                </div>
                <div id="woah"></div>
                <button type="submit" class="btn btn-default">Create</button>
                
            </form>
            <br />
        </div>

    </body>
</html>

<script>
function displayVals() {
	var value = $( '#create_post_category' ).val();
	$('#woah').html(value);
}

$( '#create_post_category' ).change( displayVals );
displayVals();
</script>