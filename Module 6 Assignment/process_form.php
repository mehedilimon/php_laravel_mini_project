<?php

// Validate form inputs
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $profile_pic = $_FILES['profile_pic'];

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format!";
    exit();
  }

  // Save profile picture to server
  $uploads_dir = 'D:\PHP Laravel Course OSTAD\Assignment\Module 6 Assignment\uploads';
  $filename = uniqid() . '_' . $profile_pic['name'];
  $tmp_name = $profile_pic['tmp_name'];
  move_uploaded_file($tmp_name, $uploads_dir . $filename);

  // Save user data to CSV file
  $user_data = array($name, $email, $filename, date('Y-m-d H:i:s'));
  $file = fopen('users.csv', 'a');
  fputcsv($file, $user_data);
  fclose($file);

  // Start new session and set cookie
  session_start();
  setcookie('name', $name, time() + (86400 * 30), '/');

  header('Location: view_users.php');
  exit();
} else {
  echo "All fields are required!";
  exit();
}

?>
<?php

// Validate form inputs
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $profile_pic = $_FILES['profile_pic'];

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format!";
    exit();
  }

  // Save profile picture to server
  $uploads_dir = 'D:\PHP Laravel Course OSTAD\Assignment\Module 6 Assignment\uploads';
  $filename = uniqid() . '_' . $profile_pic['name'];
  $tmp_name = $profile_pic['tmp_name'];
  move_uploaded_file($tmp_name, $uploads_dir . $filename);

  // Save user data to CSV file
  $user_data = array($name, $email, $filename, date('Y-m-d H:i:s'));
  $file = fopen('users.csv', 'a');
  fputcsv($file, $user_data);
  fclose($file);

  // Start new session and set cookie
  session_start();
  setcookie('name', $name, time() + (86400 * 30), '/');

  header('Location: view_users.php');
  exit();
} else {
  echo "All fields are required!";
  exit();
}

?>
