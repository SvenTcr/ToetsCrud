<?php
// auteur: Sven Boender
// functie: verwijder een bestemming op basis van de id
include 'functions.php';

// Haal bestemming uit de database
if(isset($_GET['idbestemming'])){

    // test of insert gelukt is
    if(deleteRecord($_GET['idbestemming']) == true){
        echo '<script>alert("Bestemming: ' . $_GET['idbestemming'] . ' is verwijderd")</script>';
        echo "<script> location.replace('index.php'); </script>";
    } else {
        echo '<script>alert("Bestemming is NIET verwijderd")</script>';
    }
}
?>

