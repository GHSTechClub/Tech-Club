<?php 
if (isset($_GET['name'])) {
	$members = array();
	$members[] = $_GET['members'];
	$members[] = $_GET['member1'];
	
	$members = serialize($members);
	
	include '/home/benrud/public_html/club/database.php';
	$pdo = Database::connect();
	$sql = 'INSERT INTO club_requests(name,description,advisor,president,vice_president,secretary,members) VALUES(?,?,?,?,?,?,?);';
	$q = $pdo->prepare($sql);
	$q->execute(array($_GET['name'],$_GET['description'],$_GET['advisor'],$_GET['president'],$_GET['vice_president'],$_GET['secretary'],$members));
	Database::disconnect();
	
	header ('Location: index.php?user_type=admin&username=Jeremy');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Club Create | Los Alamos Testing Site</title>
		<meta charset="utf-8" />
		<?php include '../../assets/includes/links.html'; ?>
		<script src="club.js"></script>
	</head>
	<body>
		<div class="container">
			<h1>Create a Club</h1>
			<p>This request must be accompanied by a paper form and will be processed by Mr. Hersch. We are assuming that you will be the president of this club when it is created. If you do not want to be the president, either continue with this form and transfer presidency to someone else after the club is approved or have the actual future president fill this out. Virtually everything here can be edited later.</p>
            <h2>Stuff the school needs to know</h2>
			<div> <!-- style="width: 35%;" -->
				<form action="request.php" method="get" class="form">
                    
                    <div class="row">
                    	<div class="col-sm-6">
                        	<h4>What is the name of your Club?</h4>
                            <p>The name of your club should be somewhat descriptive so that people can get a basic idea of what a club is about just by hearing/seeing the name.</p>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                                <label for="name">Club Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Ex: Math Club" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-6">
                        	<h4>What is the purpose of your club?</h4>
                            <p>Give us a brief description of what your club's objective is. A mission statement, if you will.</p>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                                <label for="description">Club Description:</label>
                                <textarea name="description" rows="4" class="form-control" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-6">
                        	<h4>Who will advise your club?</h4>
                            <p>This must be a staff member who consents and agrees to help guide the club.</p>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                                <label for="advisor">Advisor Name</label>
                                <input type="text" class="form-control" name="advisor" placeholder="Ex: Todd Benrud" />
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                    	<div class="col-sm-6">
                        	<h4>Who will lead your club?</h4>
                            <p>Tell us which student will be leading your club.</p>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                                <label for="choice">Are you going to be the president?</label>
                                <div>
                                	<span><input type="radio" name="choice" value="yes" checked="checked"> Yes</span>
  									<span><input type="radio" name="choice" value="no"> No</span>
                                </div>
                            </div>
                        	<div class="form-group">
                                <label for="president">President's Name</label>
                                <input type="text" class="form-control" name="president" placeholder="Ex: George Washington" />
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                    	<div class="col-sm-6">
                        	<h4>Who will lead your club if the president cannot?</h4>
                            <p>Tell us which student will be helping the president to lead your club.</p>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                                <label for="vice_president">Vice President's Name</label>
                                <input type="text" class="form-control" name="vice_president" placeholder="Ex:John Adams" />
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                    	<div class="col-sm-6">
                        	<h4>Who will lead your club if the vice president cannot?</h4>
                            <p>Tell us which student will be helping the vice president to lead your club.</p>
                        </div>
                        <div class="col-sm-6">
                        	<div class="form-group">
                                <label for="secretary">Secretary's Name</label>
                                <input type="text" class="form-control" name="secretary" placeholder="Ex: Thomas Jefferson" />
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                    	<div class="col-sm-6">
                        	<h4>Who will initially be in your club?</h4>
                            <p>Tell us who will initially be in the club, not counting the people above.</p>
                        </div>
                        <div class="col-sm-6">
                        	<div class="members">
                                <div class="form-group">
                                    <label for="members">Members</label>
                                    <input type="text" class="form-control" name="members" placeholder="Member" />
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success add form-control" type="button">Add Member</button>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                    	<input type="submit" value="Submit for Evaluation" class="btn btn-success form-control" />
                    </div>
				</form>
			</div>
            <h2>Stuff the website needs to know</h2>
            <p>What types of posts do you want members to be able to make? Ex: Question, announcement, request for help, etc.</p>
		</div>
	</body>
</html>