<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>asgn03 Static Properties and Mehtods</title>
</head>

<body>
  <h1>Inheritance Examples</h1>

  <?php
  include 'Bird.php';

  $bird = new Bird;
  $fly_catcher = new YellowBelliedFlyCatcher;
  $kiwi = new Kiwi;
  echo '<p>The generic bird count is "' . $bird::$instatnce_count . '".</p>';
  echo '<p>The fly catcher count is  "' . $fly_catcher::$instatnce_count . '".</p>';
  echo '<p>The Kiwi count is  "' . $kiwi::$instatnce_count . '".</p>';

  $genericBird = Bird::create();
  $yellowFlyCatcher = YellowBelliedFlyCatcher::create();
  $kiwiBird = Kiwi::create();
  echo '<p>The generic bird count after using the create method is "' . $genericBird::$instatnce_count . '".</p>';
  echo '<p>The fly catcher count after using the create method is  "' . $yellowFlyCatcher::$instatnce_count . '".</p>';
  echo '<p>The Kiwi count after using the create method is  "' . $kiwiBird::$instatnce_count . '".</p>';


  ?>
</body>

</html>