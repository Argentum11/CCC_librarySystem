<?php
    session_start();
    $_SESSION['Book_ID'] = $_POST["Book_ID"];
    $_SESSION['BookName'] = $_POST["BookName"];
    $_SESSION['Author'] = $_POST["Author"];
    $_SESSION['Status'] = $_POST["Status"];
    $_SESSION['Year'] = $_POST["Year"];
    $_SESSION['Price'] = $_POST["Price"];
    echo "Book Conditions set";
?>