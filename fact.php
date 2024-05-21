<html>
    <head>
        <title>fact of n number</title>
    </head>
    <body>
        <form method="post">
                 enter the number to sum of numbers: <br>
                 <input type="number" name="number" id="no">
                 <input type="submit">
        </form>

        <?php
          if($_POST){
            $fact=1;
            $n=$_POST['number'];
            echo "fact of nth integer is: <br>";
            for($i= 1;$i<=$n;$i++){
                $fact=$fact*$i;
          }
          echo "$fact";
        }
        ?>

    </body>
</html>