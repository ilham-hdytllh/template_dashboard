<?php

session_start();

if(!isset($_SESSION["status"])){
    header("Location: login.php");
}else{
    header("Location: page/index.php");
};

?>;