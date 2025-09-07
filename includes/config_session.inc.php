<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);


session_start();

if (!isset($_SESSION["last_regenration"])) {
session_regenerate_id();
$_SESSION["last_regenration"] = time();

} else {
   $interval = 60 * 30;
   if (time()- $_SESSION["last_regenration"] >= $interval)
   {session_regenerate_id();
$_SESSION["last_regenration"] = time();
}

}
