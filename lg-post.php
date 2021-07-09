<?php  

session_start(); 



$hostname     = "localhost";
$username     = "root";  
$password     = "";   
$databasename = "khushi"; 
$conn = new mysqli($hostname, $username, $password,$databasename); 

    if ($conn->connect_error){
        die("Unable to Connect database: " . $conn->connect_error);
    }

if(isset($_SESSION['email']))   
 {
    // header("Location:hm.php"); 
 }

if(isset($_POST['login']))   
{
     $email = $_POST['email'];
     $pass = md5($_POST['password']);

    $sql = "SELECT * FROM `users` WHERE email='".$email."' AND  password='".$pass."'";
    $result = mysqli_query($conn, $sql);
    // echo $sql;
   
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION['is_login'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['date_time'] = $row['date_time'];
        
        header("location:./hm.php");

    }
         

}
 ?>