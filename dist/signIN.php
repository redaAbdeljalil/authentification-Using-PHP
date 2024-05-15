  <?php
  include 'db_conn.php'; 
  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['users']); 
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    if (!mysqli_stmt_execute($stmt)) {
      echo "Error: " .mysqli_error($conn);
      exit;
    }
    $result = mysqli_stmt_get_result($stmt);
    if ($result->num_rows == 1) {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      if (password_verify($_POST['mdp'], $row['mdp'])) {
        $_SESSION['id'] = $row["id"];
        header('location: profile.php');
        exit;
      } 
      else {
        echo "Incorrect username or password.";
      }
    } 
    else {
      echo "Incorrect username or password.";
    }
    mysqli_stmt_close($stmt);
    mysqli_free_result($result);
  }
  
