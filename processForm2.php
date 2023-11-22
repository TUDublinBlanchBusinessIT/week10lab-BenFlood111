<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $subTenKG = $_POST['subTenKG'];    
    $overTenKG = $_POST['overTenKG'];

    
    $_SESSION['subTenKG'] = $subTenKG;
    $_SESSION['overTenKG'] = $overTenKG;

    
    header('Location: finalStep.php');
    exit();
} else {
    
    header('Location: luggage.html');
    exit();
}
?>