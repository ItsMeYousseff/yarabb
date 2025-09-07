
<?php
require_once __DIR__ . '/signup_model.inc.php';

// DEBUG guards (temporary)
if (!file_exists(__DIR__ . '/signup_model.inc.php')) {
    die('Model file missing at: ' . __DIR__ . '/signup_model.inc.php');
}
if (!function_exists('get_username')) {
    die('Model loaded but get_username() not defined. Included files: ' . print_r(get_included_files(), true));
} // test




function is_input_empty(string $username, string $pwd, string $email): bool {
    return $username === '' || $pwd === '' || $email === '';
}

function is_email_invalid(string $email): bool {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_username_taken(PDO $pdo, string $username): bool {
    return (bool) get_username($pdo, $username);
}

function is_email_registered(PDO $pdo, string $email): bool {
    return (bool) get_email($pdo, $email);
}

function create_user(PDO $pdo, string $pwd, string $username, string $email): void {
    set_user($pdo, $pwd, $username, $email);
}


