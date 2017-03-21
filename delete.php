<?php

  if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    header('Location: select.php');
  }

?>

<!DOCTYPE> 
<html>
<head>
  <title>PHP</title>
</head>
<body>
<a href="insert.php">Add user</a> 
<a href="select.php">See list</a> 
<?php 
  $db = mysqli_connect('localhost', 'root', '', 'php');
  $sql = "DELETE FROM users WHERE id=$id";
  mysqli_query($db, $sql);
  echo '<p>User deleted</p>'; 
  mysqli_close($db); 
?>

</body>
</html> 