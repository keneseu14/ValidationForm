<?php 
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $comment = $_SESSION['comment'];
    $gender = $_SESSION['gender'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="AI">
     <div class="logo">
          <h1 id="welcome">Welcome <?php echo $name;?> !</h1>
     </div>
    <h1 id="welcome">Your Information</h1>
    <div class="container">
       <div class="info">
            <h3>Name</h3>
            <p><?php echo $name;?></p>
       </div>
       <div class="info">
            <h3>Email</h3>
            <p><?php echo $email;?></p>
       </div>
       <div class="info">
            <h3>Username</h3>
            <p><?php echo $username;?></p>
       </div>
       <div class="info">
            <h3>Password</h3>
            <p><?php echo $password;?></p>
       </div>
       <div class="info">
            <h3>Comment</h3>
            <p><?php echo $comment;?></p>
       </div>
       <div class="info">
            <h3>Gender</h3>
            <p><?php echo $gender;?></p>
       </div>
       <div class="btn">
            <button onclick="goBack();">Back</button>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>