<?php include "db_con.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    <a href="index.php">&#8592;</a>
    <?php
        $sql = "SELECT * FROM images ORDER by id DESC";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res) > 0) {
          while ($images = mysqli_fetch_assoc($res)) { ?>

          <div class="alb">
            <img src="uploads/<?=$images['image_url']?>">
          </div>
    <?php } }?>
  </body>
</html>