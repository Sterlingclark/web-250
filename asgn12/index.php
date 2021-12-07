<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Image Upload Using PHP</title>
</head>
<body>
  <?php if(isset($_GET['error'])): ?>
    <p><?php echo $_GET['error']; ?></p>
  <?php endif ?>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="my_image">
    <input type="submit" name="submit" value="Upload">
  </form>
</body>
</html>
