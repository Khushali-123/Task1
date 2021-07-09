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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





</head>

<body  background="33.png"  style="background-repeat: no-repeat; background-size: cover; margin-left: -1px;">


<!-- <a class="btn btn-outline-success" href='product.php'>BACK</a> 

<a class="btn btn-outline-success" href='hm.php'>BACK to HOME</a>  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="hm.php">Home </a>
      </li>
      
      
      
    </ul>
  </div>
</nav>

<h1 style="text-align: center;">Records</h1>



<?php
 

 $hostname = "localhost";
$username = "root";
$password = "";
$databasename = "khushi";
$conn = new mysqli($hostname,$username,$password,$databasename);

if($conn->connect_error){
    die("unable to connect database: ".$conn->connect_error);
}




$sql= "SELECT * FROM `users`";
$qurry = mysqli_query($conn, $sql);


 ?>

<table  class="table table-striped">

<thead class="thead-dark">
  

<tr>

<th>Id</th>


<th>name</th>

<th>email</th>
<th>image</th>



<th>number</th>




</tr>
</thead>
<br>
<br>

<?php
echo "<tr>";

$a= 1;

while($row = mysqli_fetch_array($qurry))

  {
  echo "<tr>";

  // echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $a . "</td>";
  $a=$a+1;
  
  
  echo "<td>" . $row['first_name'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";
?>
<td>
<img src="<?php echo $row['image'] ?>" width="100" height="100"  />
</td>
<?php
  echo "<td>" . $row['number'] . "</td>";

  echo "</tr>";

  }
?>
</table>







</body>

</html>
