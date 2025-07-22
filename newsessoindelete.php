<?php

 session_start();
 session_unset();
 session_destroy();
echo "Session destroyed successfully. <a href='sessionstore.php'>Go back to store session</a>";
exit();
?>