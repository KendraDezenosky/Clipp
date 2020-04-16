<!-- 
     DeleteItemAction.php
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: February 16, 2020
     This action removes an item from the database list table
-->
<?php 
    // require the list DAO
    require_once('./dao/listDAO.php'); 

    // get variables from POST method
    $listName = $_POST['listName'];
    $itemDetails = $_POST['itemDetails'];
    $shopperDetails = $_POST['shopperDetails'];

    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new listDAO object
        $listDAO = new listDAO();

        //Calls listDAO removeItem function with the list name, item details, and shopper details as parameters
        $getSuccess = $listDAO->removeItem($listName, $itemDetails, $shopperDetails);
    }catch(Exception $e){
        echo '<h3>Error on page.</h3>';         
    }
    
    
?>