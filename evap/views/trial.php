<?php
session_start();
echo "Trying.........". '<br>';
print_r ($_SESSION);
echo '<br>';

echo $_SESSION['user_role_id'];
?>