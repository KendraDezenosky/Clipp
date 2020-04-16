<!-- 
     LoginAction.php
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: February 16, 2020
     This action adds the shopper to the shoppers database table
-->

<?php 
    // Require the Shopper DAO
    require_once('./dao/shopperDAO.php'); 

    // get variables from POST method
    $shopperName = $_POST['shopperName'];
    $email = $_POST['email'];
    $details = $_POST['details'];   

    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new shopperDAO object
        $shopperDAO = new shopperDAO();

        //Create a new shopper and passes variables as parameters
        $shopper = new Shopper($shopperName, $email, $details);

        //Calls shopperDAO addShopper function with the shopper object as a parameter
        $getSuccess = $shopperDAO->addShopper($shopper);

    }catch(Exception $e){
        $error = $e->getMessage();
        echo '<p>' . $error . '</p>';            
    }

?>