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
          <h1>Conditions</h1>
          <div class="code-content">
            <?php
               $number_1 =21;
               $number_2 =22;
                 if($number_1 > $number_2) {
                    echo "number one is bigger";
                 } else if($number_1 == $number_2) {
                 echo "The numbers are equal";
                 }
                 else {
                    echo "number two is bigger";
                 }
                 echo "<hr>";
                 if($number_1 != 20) {
                    echo "no, they are not equal";
                 } else {
                    "yes they are equal";
                 }
                 echo "<hr>";
                 $user_logged_in = false;
                 if($user_logged_in) {
                    echo "Welcome";
                 } else {
                    echo "please log in";
                 }
            ?>
         </div>
    </div>
  </body>
</html>
