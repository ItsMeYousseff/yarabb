<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$username = trim($_POST['username'] ?? '');
$pwd      = trim($_POST['pwd'] ?? '');
$email    = trim($_POST['email'] ?? '');

try {
    require_once __DIR__ . '/db.inc.php';
    require_once __DIR__ . '/signup_model.inc.php';
    require_once __DIR__ . '/signup_contr.inc.php';
    require_once __DIR__ . '/config_session.inc.php';

    $errors = [];

    if (is_input_empty($username, $pwd, $email)) {
        $errors['empty_input'] = 'Fill in all fields!';
    }
    if (is_email_invalid($email)) {
        $errors['invalid_email'] = 'Invalid email used!';
    }
    if (is_username_taken($pdo, $username)) {
        $errors['username_used'] = 'Username already taken';
    }
    if (is_email_registered($pdo, $email)) {
        $errors['email_used'] = 'Email already used';
    }

    if ($errors) {
        $_SESSION['errors_signup'] = $errors;
        header('Location: ../index.php');
        exit;
    }

    

   create_user($pdo,$pwd,$username,$email);


    header('Location: ../index.php?signup=success');
    exit;
    
    $pdo - null;
    $stmt = null;





   


} catch (PDOException $e) {
    die('Query failed: ' . $e->getMessage());
}