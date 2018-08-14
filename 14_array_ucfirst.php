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
         <h1>Up & Running with PHP</h1>
         <div class="code-content">
           <?php
            function first_names($f1, $f2, $f3) {
               $f1 = ucfirst(strtolower($f1));
               $f2 = ucfirst(strtolower($f2));
               $f3 = ucfirst(strtolower($f3));

               return array($f1, $f2, $f3);
             }

             function last_names($l1, $l2, $l3) {
               $l1 = ucfirst(strtolower($l1));
               $l2 = ucfirst(strtolower($l2));
               $l3 = ucfirst(strtolower($l3));

               return array($l1, $l2, $l3);
             }

             $first = first_names("sheila", "FREDY", "rUsty");
             echo $first[0] . " " . $first[1] . " " . $first[2] . "<br>";
             $last = last_names("easton", "MAC", "WeST");
             echo $last[0] . " " . $last[1] . " " . $last[2];
           ?>
         </div>
    </div>
  </body>
</html>
