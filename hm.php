<?php  

 session_start(); 

    //Checks if logged in
    if( $_SESSION["is_login"] == false )
    {
      echo "<script>
      alert('first you need to login');
      window.location.href='lg-form.php';
      </script>";
    }
  
 ?>

<html>
  <head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

       <title> Home </title>
  </head>
  <body   background="33.png"  style="background-repeat: no-repeat; background-size: cover; margin-left: 402px;">
  <a style="margin-left: -388px;" class="btn btn-outline-success" href='lg-form.php'>BACK</a> 
    <br>
    <br>
<?php
      echo "hello, ";
   
  
      if(!isset($_SESSION['is_login'])) 
       {
         //   header("Location:lg-post.php");  
       }

          $hostname     = "localhost";
          $username     = "root";  
          $password     = "";   
          $databasename = "khushi"; 
          $conn = new mysqli($hostname, $username, $password,$databasename); 

          $userId = $_SESSION['id'];
         
          
       $query = "SELECT * FROM `users` WHERE id= '".$userId."' ";
      //  print_r($query);
      //  die();
       $result = mysqli_query($conn,$query);

//        print_r($result);
// die ();

       if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        // die();
      //   echo '<pre>';
      //   print_r($row);
      //  die();
        
        echo $row['first_name']  ;
        echo $row['last_name']  ;
        echo "  you had createed your profile on :";

        // echo $row['date_time'] ;
        $date=date_create($row['date_time']);
        echo date_format($date,"d/ m / y  H:i:s"); 
        
        
        }
       
       ?>
      
        <br>
        <br>
       <div style="margin-left: 1px;">
          <a class="btn btn-outline-dark" href='lo.php'> LOGOUT</a> 
        <a class="btn btn-outline-danger" href='view.php'>All users</a> 
          
      </div>

</body>
</html>
