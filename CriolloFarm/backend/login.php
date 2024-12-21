<?php
session_start();
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        // Prepare SQL query
        $stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password using password_verify()
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['username'];
                header('Location: ../index.php?page=home');
                exit(); // Important to stop further script execution
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
        }

        $stmt->close();
    } else {
        echo "Please fill in both username and password.";
    }
}

$conn->close();
?>
