<?php
  //$article = "example";
  include '/home/benrud/public_html/club/database.php';
  $pdo = Database::connect();
  //$sql = 'SELECT * FROM popular ORDER BY views DESC';
  $sql = 'SELECT * FROM popular WHERE article = "example"';
  foreach ($pdo->query($sql) as $row) {
    $article = $row['article'];
  }
  
  if(isset($article)) {
    //update pre-existing data
    //$article = "dank meme";
    $viewsNew = $row['views'];
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE popular SET views=". $viewsNew ." WHERE article='example';";
    $q = $pdo->prepare($sql);
    //$q->execute(array("example", 1));
  } else {
    //create a new entry into the database and set the views to 1
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO popular (article, views) values(?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array("example", 1));
    $article = "L I T L I Z A R D";
  }
  
  Database::disconnect();
?>
<!doctype html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width">
      <title>Meemees</title>
      <?php include '/home/benrud/public_html/club/assets/includes/links.html'; ?>
  </head>
  
  <body>
    <?php
      $viewsNew = $viewsNew + 1;
      echo $viewsNew;
      echo $article;
    ?>
  </body>
</html>