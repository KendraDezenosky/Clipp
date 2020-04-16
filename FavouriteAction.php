<!-- 
     FavouriteAction.php
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: February 16, 2020
     This action changes the status of a list to 'Favourited'
-->

<?php 
    // Require the list DAO
    require_once('./dao/listDAO.php'); 

    // get the variables from the POST method
    $listName = $_POST['listName'];
    $favourited = $_POST['favourited'];
    $shopperDetails = $_POST['shopperDetails'];

    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new listDAO object
        $listDAO = new listDAO();

        //call the list DAO favourite list function with the list name, boolean, and shopper details
        $getSuccess = $listDAO->favouriteList($listName, $favourited, $shopperDetails);
    }catch(Exception $e){
        echo '<h3>Error on page.</h3>';
    }
    
    
?>