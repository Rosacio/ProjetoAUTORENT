<?php
    session_start();
    include ('connection.php');

if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$email = validate($_POST['email']);
$pass = validate($_POST['password']);

if(empty($email)) {
    header("Location: ../entrar.php?erro=User Name is required");
    exit();
}
else if(empty($pass)) {
    header("Location: ../entrar.php?erro=Password is required");
    exit();
}

$sql = "SELECT * FROM entrar where email='$email' AND pass='$pass'";

$result = mysqli_query($pdo, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['email'] === $email && $row['pass'] === $pass) {
        echo "Logged In!";
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: ../home.php");
        exit();
    }
    else{
        header("Location ../entrar.php?Error Email ou Palavra Pass incorreta");
        exit();
    }
}
else {
    header("Location: ../entrar.php");
    exit();
}

?>