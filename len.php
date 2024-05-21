<html>
   <head>
      <title>string length</title>
   </head>

   <body>
      <form method="post">
          enter the string:<br>
          <input type="text" name="text1" id="no" >
          <br>

          enter the string to be search:<br>
          <input type="text" name="text2" id="no1">
          <input type="submit" >
       </form>

       <?php 
       
          if($_POST){

            $instr=$_POST['text1'];
            $search=$_POST['text2'];
             $count=0;
              for($i= "0";$i<strlen("$instr");$i++){
            
               if(substr($instr,$i, 1)== $search){

                  $count= $count+1;


          }

         }

         echo"".$count."";
       
      }
       
       
       ?>
   </body>
</html>