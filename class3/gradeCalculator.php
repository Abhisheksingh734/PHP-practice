<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
      <form action="" method="post">
        <input type="text" name="sub1" placeholder="Enter subject 1 marks"><br>
        <input type="text" name="sub2" placeholder="Enter subject 2 marks"><br>
        <input type="text" name="sub3" placeholder="Enter subject 3 marks"><br>
        <input type="text" name="sub4" placeholder="Enter subject 4 marks"><br>
        <input type="text" name="sub5" placeholder="Enter subject 5 marks"><br>
        <button type="submit" name="submit">Submit</button>
      </form>

      <?php
        if(isset($_POST['submit'])){
            $sub1 = $_POST['sub1'];
            $sub2 = $_POST['sub2'];
            $sub3 = $_POST['sub3'];
            $sub4 = $_POST['sub4'];
            $sub5 = $_POST['sub5'];
            $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
            $percentage = $total / 5; 
            echo $percentage;  
        }
        ?>
    

 </body>
 </html>
