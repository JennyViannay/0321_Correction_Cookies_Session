<?php
//require 'inc/head.php';
session_start();
session_destroy();
header('Location: index.php');