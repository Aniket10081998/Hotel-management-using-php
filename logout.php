<?php
session_start();
session_unset();
echo"<script>document.location.href='login.php'</script>";
?>