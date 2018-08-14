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
        <h1>PHP tags in HTML</h1>
        <div class="code-content">
            <?php
               function the_title() {
                  echo "Title of the post";
               }

               function the_date() {
                  echo date('Y m d');
               }
            ?>
            <h1><?php the_title();?></h1>
            <p>Published on: <?php the_date(); ?></p>
        </div>
    </div>
  </body>
</html>
