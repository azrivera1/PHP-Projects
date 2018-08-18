<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    <div class="container">
         <h1>array_key_exists</h1>
         <div class="code-content">
           <?php
           $authors = array("charles dickens", "jane austin", "william shakespeare");
           $authorsAssociative = array(
               "quarky" => "Charles Dickens",
               "brillant" => "Jane Austin",
               "poetic" => "William Shakespeare",
           );

           echo array_key_exists('poetic', $authorsAssociative);
           echo $authorsAssociative['quarky'];
           ?>
         </div>
    </div>
  </body>
</html>
