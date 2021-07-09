<?php  

session_start();
?>
<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  

  <style>
    .form-label {
      margin-bottom: 5px;
      margin-right: 16px;

    }

    input.input-box-330 {
      width: 250px;
    }

    .info {
      text-align: center;

    }

    .ll {
      margin-left: 650px;
      font-size: 40px;
    }
  </style>

</head>

<body>

  <lable class="ll"> login form </lable>
  <br>
  <br>

  <form action="lg-post.php" method="post">
    <div class="info">

      <div class="form-label">
        Email:
      </div>
      <input class="input-box-330" type="email" placeholder="enter your email" name="email">
      <br>
      <br>
      <br>
      <br>

      <div class="form-label">
        Password
      </div>
      <input class="input-box-330" type="password" placeholder="enter your password" name="password">
      <br>
      <br>

      <input  class="btn btn-outline-danger" type="submit" name="login" value="LOGIN">



      <a class="btn btn-outline-info" href="rg-form.php">Register</a>
      

  </form>

</body>

</html>
