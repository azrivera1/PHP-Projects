<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays in PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    <div class="container">
          <h1>Arrays in PHP</h1>
          <div class="code-content">
            <?php
               $fruits = array('apple', 'grapes', 'strawberries', 'banana');
               array_push($fruits, 'pear');
               echo $fruits[4];
               echo "<hr>";
               unset($fruits[1]);
               echo "<pre>";
               var_dump($fruits);
               echo "</pre>";
            ?>
         </div>
    </div>
  </body>
</html>
