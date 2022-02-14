<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    
</head>
<body>
    <?php
      $e = 4;
      $t = 22;

     function boyAge(){
       global $e;
       $d = "this boy is $e years old";
       echo $d;
      };
      boyAge(); 

      $d = "this boy is $t years old";
      echo $d;

    ?>
</body>
</html>