<?php
    // functie: formulier en database insert fiets
    // auteur: Vul hier je naam in

    echo "<h1>Insert Bier</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertRecord($_POST) == true){
            echo "<script>alert('Bier is toegevoegd')</script>";
        } else {
            echo '<script>alert("Bier is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="soort">Soort:</label>
        <input type="text" id="soort" name="soort" required><br>

        <label for="stijl">Stijl:</label>
        <input type="text" id="stijl" name="stijl" required><br>

        <label for="alcohol">Alcohol:</label>
        <input type="number" id="alcohol" name="alcohol" required><br>

        <!-- Dropdown menu -->
 <label for="brouwcode">Brouwer:</label>
 <select id="brouwcode" name="brouwcode" required>
   <?php
     $brouwers = getBrouwers();
     foreach ($brouwers as $brouwer) {
       $selected = ($brouwer['brouwcode'] == $row['brouwcode']) ? 'selected' : '';
       echo "<option value='{$brouwer['brouwcode']}' $selected>{$brouwer['naam']}</option>";
     }
   ?>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='index.php'>Home</a>
    </body>
</html>
