<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="user.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>CreateUser</title>
</head>

<body>

  <?php
  include 'dataconnect.php';
?>
  <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $balance=$_POST['balance'];
     
      $sql="INSERT INTO `users` (`name`, `email`, `balance`) VALUES ('$name', '$email', '$balance')";
       $result = mysqli_query($conn, $sql);
 
        if($result)
        {
          echo "<script> alert('Success! User is created');
                               window.location='transfer.php';
                     </script>";
        }
        else
        {
          echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
           
           /* echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';*/
        }
      }
    
  ?>




  <!-------- nav bar-------->
  <?php
  include 'navbar.php';
  ?>


  <div class="row content">
    <div class="col-md-6 mb-3">
      <img src="user2.png" class="rounded-circle" alt="image">
    </div>
    <div class="col-md-6">
      <h3 class="signin-text mb-3">Create User</h3>
      <form action="\banksystem\createuser.php" method="post">
        <div class="form-group">
          <label class="form-label" for="name">Name</label>
          <input type="name" name="name" id="name" class="form-control" required>
          &nbsp;&nbsp;&nbsp;
        </div>
        <div class="form-group">
          <label class="form-label" for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
          &nbsp;&nbsp;&nbsp;
        </div>
        <div class="form-group">
          <label class="form-label" for="balance">Balance</label>
          <input type="number" id="balance" name="balance" class="form-control" required>
          &nbsp;&nbsp;&nbsp;
        </div>
        <button class="btn-class" type="submit" value="submit">Submit</button>
      </form>

    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>