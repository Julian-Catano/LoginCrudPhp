<?php
session_start();

if(!isset($_SESSION['correo'])){
    header("Location: inicio.php");
    exit();
}