<?php

function login($username, $password) {
    global $conn;

    $sql = "SELECT id, username, password FROM usuarios WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $dbUsername, $dbPassword);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($dbUsername && password_verify($password, $dbPassword)) {
        session_start();
        $_SESSION['username'] = $dbUsername;
        $_SESSION['id'] = $id;
        return true;
    } else {
        return false;
    }
}





?>