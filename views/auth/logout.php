<?php
require_once "../../_config/config.php";

unset($_SESSION['user']);
session_unset();
session_destroy();
echo "<script>window.location='".base_url('views/auth/login.php')."';</script>";
?>