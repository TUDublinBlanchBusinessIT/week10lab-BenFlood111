<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $passengerFN = $_POST["passengerFN"];
    $passengerSN = $_POST["passengerSN"];
    $luggage = isset($_POST["luggage"]) ? 1 : 0;

    
    $_SESSION['passengerFN'] = $passengerFN;
    $_SESSION['passengerSN'] = $passengerSN;
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