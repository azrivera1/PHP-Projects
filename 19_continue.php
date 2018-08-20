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
         <h1>continue</h1>
         <div class="code-content">
           <?php
             $j = 10;
             while($j > -10) {
               $j--;
                 if($j == 0) continue;
                 echo  (10 / $j) . "<br>";
             }
           ?>
         </div>
    </div>
  </body>
</html>
