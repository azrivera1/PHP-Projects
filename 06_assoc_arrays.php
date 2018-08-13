<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Associative Arrays in PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    <div class="container">
          <h1>Associative Arrays in PHP</h1>
          <div class="code-content">
            <?php
               $student = array(
                  'first_name' => 'Julien',
                  'last_name' => 'Ortiz',
                  'city_name' => 'Tucson'
               );
               echo $student['first_name'] . " " . $student['last_name'] . " from " . $student['city_name'];
            ?>
          </div>
    </div>
  </body>
</html>
