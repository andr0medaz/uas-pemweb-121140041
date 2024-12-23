<?php
session_start();
session_unset();
session_destroy();
// untuk redirect ke halaman index setelah logout
header("Location: ../index.php"); 
