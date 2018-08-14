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
          <h1>str_replace in PHP</h1>
          <div class="code-content">
              <?php
                 $my_name = "Gilbert Rivera";
                 $my_name2 = str_replace('', '', $my_name);
                 echo $my_name2;
                 echo strlen($my_name2);
                 echo "<br/>";
                 $password = "abcd";
                 if(strlen($password) < 6) {
                    echo "password is weak";
                 } else {
                    echo "password is strong";
                 }
              ?>
          </div>
    </div>
  </body>
</html>
