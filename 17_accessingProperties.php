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
         <h1>accessing properties</h1>
         <div class="code-content">
           <?php
           class Person {
               public $firstName = "Samuel Langhorne";
               public $lastName = "Clemens";
               public $yearBorn = 1899;
           }

           $myObject = new Person();
           echo $myObject->firstName . "<br>";
           $myObject->firstName = "S. L.";
           echo $myObject->firstName;
           ?>
         </div>
    </div>
  </body>
</html>
