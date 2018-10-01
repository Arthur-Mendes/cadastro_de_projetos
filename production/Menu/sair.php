<?php
session_start();

unset($_SESSION['setor']);
HEADER("Location: ../login.php");
exit;