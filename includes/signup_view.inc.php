<?php
function check_signup_errors(): void
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if (!empty($_SESSION['errors_signup'])) {
        echo "<br>";
        foreach ($_SESSION['errors_signup'] as $error) {
            echo '<p class="form-error">' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</p>';
        }
        unset($_SESSION['errors_signup']);
    }
}