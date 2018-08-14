<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>var_dump in PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    <div class="container">
          <h1>var_dump in PHP</h1>
          <div class="code-content">
            <?php
               $student = array(
                  'first_name' => 'Juan',
                  'last_name' => 'Rivers',
                  'country_name' => 'Mexico',
                  'age' => 29,
                  'user_logged_in' => true
               );
               var_dump($student);
            ?>
         </div>
    </div>
  </body>
</html>
