<?php
session_start();

unset($_SESSION['UI']);
unset($_SESSION['login']);

header('location: dashboard');


?>