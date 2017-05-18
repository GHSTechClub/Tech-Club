<?php
$name = $_GET['username'];
echo '<h2>Welcome, ' . $name . '!</h2>';
echo '<h4>You\'re the admin!</h2>';
?>

<table class="table table-striped">
	<thead>
    	<th>Name</th>
        <th>Description</th>
        <th>Advisor</th>
        <th>President ID</th>
        <!--<th>Approve</th>
        <th>Deny</th>-->
    </thead>
    <tbody>
		<?php
        include '/home/benrud/public_html/club/database.php';
        $pdo = Database::connect();
        $sql = 'SELECT * FROM club_requests;';
        foreach ($pdo->query($sql) as $request) {
            echo '
            <tr>
				
					<td><a href="club_request.php?id=' . $request['id'] . '&username=' . $name . '">' . $request['name'] . '</a></td>
					<td>' . $request['description'] . '</td>
					<td>' . $request['advisor'] . '</td>
					<td>' . $request['president'] . '</td>
					
				
			</tr>';
        }
        ?>
    </tbody>
</table>

<!-- <td><button class="btn btn-success" type="button">Approve</button></td>
				<td><button class="btn btn-danger" type="button">Deny</button></td> -->