<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $luggage = isset($_POST['luggage']) ? 1 : 0;

    
    $_SESSION['passengerFN'] = $firstname;
    $_SESSION['passengerSN'] = $surname;
    $_SESSION['luggage'] = $luggage;

    if ($luggage == 1) {
        header("Location: luggage.html");
        exit();
    } else {
        header("Location: finalStep.php");
        exit();
    }
} else {
    echo "Invalid request method";

}

?>