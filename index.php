 <?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);


if(!$con){
 die("Conncetion to  this database is failed due to ".
    mysqli_connect_error());
}


// echo "Succesfully conneceted database";
$name=$_POST['name'];
$age=$_POST['age'];
$reg=$_POST['reg']; 
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip`.`trip` (`name`, `age`, `reg`, `phone`, `desc`, `dt`) VALUES ( '$name', '$age', 
'$reg', '$phone', '$desc', current_timestamp())"; 


if($con->query($sql) == true){
    // echo "Succesfully inserted";

    $insert=true;
}
else{
 echo "ERROR:$sql <br> $con->error";
}

$con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="styles.css">
<body>
    <img src="trav2.jpg" class="bg">
     <div class="containter">
        <h1>Welcome to make my trip</h1>
      <h3>Enter your details and  submit this form to confirm your paraticipation in the trip</h3>

      <?php
     {
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
     
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="number" name="age" id="name" placeholder="Enter your age">
        <input type="text" name="reg" id="name" placeholder="Enter your reg no">
        <input type="number" name="phone" id="name" placeholder="Enter your Phone number"><br>
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other info"></textarea>
   
         <button class="btn">Submit</button>

    </form>
    </div>
    
     <script src="index.js"></script>
</body>
</html>