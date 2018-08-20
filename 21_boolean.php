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
         <h1>Boolean</h1>
         <div class="code-content">
         <?php
           $a = 1;
           $b = 2;
           // true
           echo ($a AND $b);
           // true
           echo ($a or $b);
           // false
           echo ($a XOR $b);
           // false
           echo !$a;
         ?>
       </div>
    </div>
  </body>
</html>
