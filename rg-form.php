<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "khushi";
$conn = new mysqli($hostname,$username,$password,$databasename);

if($conn->connect_error){
    die("unable to connect database: ".$conn->connect_error);
}
 
if(isset($_POST['submit'])){

//   if ($_POST["password"] === $_POST["confirm_password"]) {
//     // success!
//  }
//  else {
//     // failed :(
//  }

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $filename = $_FILES['image']["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
        $folder = "image/".$filename;
    $password = md5($_POST['password']);//md5 
    
    if (move_uploaded_file($tempname, $folder))  {
      $msg = "Image uploaded successfully";

    
   $sql = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `number`, `password`, `image`) VALUES ('$firstname','$lastname','$email','$number','$password','$folder')";

//   $sql= "INSERT INTO users('first_name','last_name','email','number','password','image')VALUES('$firstname','$lastname','$email','$number','$password','abc')";
    if (mysqli_query($conn, $sql)) {
       
        header("location:./lg-form.php");
       
        
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    
}else{
  $msg = "Failed to upload image"; 
}  
}


 ?>

  



<!-- .............html form................. -->
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.form-label {
	margin-bottom: 5px;
	margin-right: 16px;
    
}

input.input-box-330 {
	width: 250px;
}
.info{
    text-align: center;
    
}
.ll{
    margin-left: 600px;
    font-size: 40px; 
}
.error {
    color: #FF0000;
    }


</style>

<script>
function validateForm() {
  var x = document.forms["myForm"]["first_name"].value;
  var y = document.forms["myForm"]["email"].value;
  var z=document.forms["myform"]["password"].value; 
  

  if (x==null || x=="") {
    alert("first Name must be filled out");
    return false;

   } else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }


}
</script>

</head>

<body>

<form name="myform" action="rg-form.php" onsubmit="return validateForm()"  method = "post"  enctype="multipart/form-data">

<lable class= "ll"> Registration form </lable>

 <div class= "info" >
      <div class="form-label">
	       Firstname:
	  </div>
    	<input class="input-box-330" type="text" id="fname" placeholder="enter your First-name" name="first_name" required autocomplete="first_name">
        <br><br>

        <div class="form-label">
        lastname:
        </div>
        <input class="input-box-330" type="text"  id="lname"  placeholder="enter your last-name" name="last_name" required ><br><br>

      

        <div class="font-label">
        email:
        </div>
        <input class="input-box-330" type="email" id="email" placeholder="enter your email" name="email" required>
       <br><br>

       <div class="font-label">
        Mobile number:
        </div>
        <input class="input-box-330" type="tel" id="number" placeholder="enter your number" name="number"><br><br>
  
        <div class="font-label">
        password:
        </div>
        <input class="input-box-330" type="password" id="password" placeholder="your password" name="password" required/>
        <br><br>

        <div class="font-label">
        Confirm Password:
        </div>
        <input class="input-box-330" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <br><br>

       <div class="font-label">
        profile pic:
        </div>
        <input class="input-box-330" type="file" id="image" placeholder="select photo" name="image" id="file">
        <br><br>

        <button class="btn btn-outline-info" type="submit"  name="submit" value="submit"  >Register Now</button>
        <a   class="btn btn-outline-danger" href="lg-form.php">Login</a>
 </div>   
						

</form>
</body>
</html>