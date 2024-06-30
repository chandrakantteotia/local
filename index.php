<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
  <form method="POST">
    <input type="text" name="nm" placeholder="entewr here name"><br>
    <input type="text" name="em" placeholder="enter here email"><br>
    <input type="submit" name="sb">
    </form>
    <?php
    $con=mysqli_connect('localhost','root','','form');
    if(isset($_POST['sb']))
    {
      $name=$_POST['nm'];
      $email=$_POST['em'];
      $query="INSERT INTO content(NAME,EMAIL) VALUES ('$name','$email')";
      $run = mysqli_query($con,$query);
    }
    if( $run )
    {
      echo "thank's for sumit";
      // break;
    }
    else
    {
      echo "failed";
    }
    ?>

</body>
</html>