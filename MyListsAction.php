<?php 
// MyListsAction.php
// Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
// Date created: February 16, 2020
// This page deals with the actions required for popoulating the My Lists page. It calls the appropriate method to get the shopper's lists

    // Require a link to the listDAO 
    require_once('./dao/listDAO.php'); 

    // Sets variable from the information that was sent through a POST method
    $shopperDetails = $_GET['shopperDetails'];
    
    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new listDAO object
        $listDAO = new listDAO();
        
        //Calls listDAO fetchMyList function with the shopper details as a parameter
        echo $listDAO->fetchMyList($shopperDetails);

    }catch(Exception $e){
        echo '<h3>Error on page.</h3>';
    }
    
    
