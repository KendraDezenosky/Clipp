
<?php 
// GetStoresAction.php
// Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
// Date created: February 16, 2020
// This action gets the stores from the list to populate the review form

// Require the storeDAO page
require_once('./dao/storeDAO.php'); 

    // Get variables from POST method
    $listName = $_POST['listName'];
    $postalCode = $_POST['postalCode'];
    $shopperDetails = $_POST['shopperDetails'];

    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new storeDAO object
        $storeDAO = new storeDAO();

        //Set array of stores based on storeDAO getAllStores function 
        $stores = $storeDAO->getAllStores($listName, $postalCode, $shopperDetails);

        // For each store in the array, echo with a pipe to be parsed later
        foreach($stores as $store) {
            echo $store . "|";
        }
    }catch(Exception $e){
        echo '<h3>Error on page.</h3>';
    }
    
    
?>