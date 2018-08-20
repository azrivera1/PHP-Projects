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
         <h1>foreach</h1>
         <div class="code-content">
           <?php
             $p1 = array("Copier", "Inkjet", "Laser", "Photo");
             echo "p1 element: " . $p1[2] . "<br>";
             $p2 = array('copier' => "Copier & Multipurpose",
                         'inkjet' => "Inkjet & Printer",
                         'Laser'  => "Laser Printer",
                         'photo'  =>  "Photographic Paper");
             echo "p2 element: " . $p2['inkjet'] . "<br>";

             $paper = array("Copier", "Inkjet", "Laser", "Photo");
             $j = 0;
             foreach($paper as $item) {
               echo "$j: $item"."<br>";
               ++$j;
             }

             $paper = array('copier' => "Copier & Multipurpose",
                         'inkjet' => "Inkjet & Printer",
                         'Laser'  => "Laser Printer",
                         'photo'  =>  "Photographic Paper");

              foreach($paper as $item => $description) {
                echo "$item: $description"."<br>";
              }
           ?>
         </div>
    </div>
  </body>
</html>
