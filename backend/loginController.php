<?php
    session_start();
    
    if(isset($_GET['msg']))
    {
        echo "<divclass='msg'>" .$_GET['msg']. "</div>";
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'conn.php';
    $query = "SELECT * FROM users WHERE username = :username";
    $statement=$conn->prepare($query);
    $statement->execute([
        ":username" => $username
    ]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ( $statement->rowCount() < 1)
    {
        $msg = "account bestaat niet";
        header("location: ../login.php?msg=$msg");
    }

    else if ( !password_verify($password,$user['password']))
    {
        $msg = "wachtwoord niet juist!";
        header("location: ../login.php?msg=$msg");
    }

    else{
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user["username"];
    $naming = $user["naam"];
    $_SESSION['name'] = $naming;
    header("location: $base_url/index.php?msg=$naming");
    exit;
    }
?>

