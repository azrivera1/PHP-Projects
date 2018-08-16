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
          <h1>accessing methods</h1>
         <div class="code-content">
           <?php
           class Person {
               const AVG_LIFE_SPAN = 79;
               public $firstName = "Samuel Langhorne";
               public $lastName = "Clemens";
               public $yearBorn = 1899;

               public function getFirstName() {
                   return $this->firstName;
               }
               public function setFirstName($tempName) {
                   $this->firstName = $tempName;
               }
           }
           $myObject = new Person();
           $myObject->setFirstName("Sam");
           echo $myObject->getFirstName();
           ?>
         </div>
    </div>
  </body>
</html>
