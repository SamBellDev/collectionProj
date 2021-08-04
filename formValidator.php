<?php

session_start();
if(!isset($_POST)) {
    session_unset();
    header('Location: index.php');
} else {
    if ($_POST['coinName'] !='' && $_POST['yearMinted'] !='' && $_POST['material'] !='' && $_POST['diameter'] !=''){
        $_SESSION['coinName'] = $_POST['coinName'];
        $_SESSION['yearMinted'] = $_POST['yearMinted'];
        $_SESSION['material'] = $_POST['material'];
        $_SESSION['diameter'] = $_POST['diameter'];
        header('Location: index.php');
    } else {
        session_abort();
        header('Location: index.php');
    }
}