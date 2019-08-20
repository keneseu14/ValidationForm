

<!DOCTYPE HTML>  
<html>
<head>
	<title>Validation Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="img"> 

<?php
// define variables and set to empty values

$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  //Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])  && !empty($_POST['comment']) && !empty($_POST['gender'])){
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['comment'] = $_POST['comment'];
    $_SESSION['gender'] = $_POST['gender'];
    header("location: information.php");
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 <div class="form">
  <h1>PHP Form Validation</h1>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">  
     Name <input type="text" name="name" placeholder="Name"/>
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Email<input type="text" name="email" placeholder="Email"/>
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Username <input type="text" name="username" placeholder="Username"/>
    <span class="error">*<?php echo $usernameErr;?></span>
    <br><br>
    Password <input type="password" name="password" placeholder="Password"/>
    <span class="error">*<?php echo $passwordErr;?></span>
    <br><br>
    Comment <textarea name="comment" rows="5" cols="40" placeholder="Comment here"></textarea>
    <br><br>
    Gender
    <br>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
</div>
</body>
</html>