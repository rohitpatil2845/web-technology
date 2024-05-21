<html>
   <head>
      <title>palindrome</title>
   </head>

   <body>
      <form method="post">
           enter the string: <br>
           <input type="string" name="string" id="no">
           <input type="submit">
      </form>

         <?php
           if($_POST)
           {

             $string=$_POST['string'];
             if($string== strrev("$string")){
               echo $string. " is a palimdeome <br> revrese of string is " .strrev($string);
             }

              else{
               echo $string. " is not a palimdeome <br> revrese of string is " .strrev("$string");

              }

           }

?>

   </body>
</html>