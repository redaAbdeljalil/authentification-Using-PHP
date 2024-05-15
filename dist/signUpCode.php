    <?php
    include 'db_conn.php';
    $Username = $_POST['Username'] ?? "";
    $email = $_POST['email'] ?? "";
    $mdp = $_POST['mdp'] ?? "";

    if (isset($_POST['SignUp'])) {
        $sql = "INSERT INTO users (Username, email, mdp) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $Username, $email, $mdp);
        if (mysqli_stmt_execute($stmt)) {
            header('location: index.php');
            exit;
        } 
        else {
            echo "Error: " .mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
    ?>
