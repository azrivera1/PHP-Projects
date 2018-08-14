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
         <h1>If Else in PHP</h1>
         <div class="code-content">
             <?php
               $bank_balance = 300;
               $savings = 25;

               if ($bank_balance < 100) {
                 $money = 1000;
                 $bank_balance += $money;
                 echo $bank_balance;
               } elseif ($bank_balance > 200) {
                 $savings += 100;
                 $bank_balance -= 100;
                 echo $bank_balance;
               }
               else {
                 $savings += 50;
                 $bank_balance -= 50;
                 echo $bank_balance;
               }
            ?>
         </div>
    </div>
  </body>
</html>
