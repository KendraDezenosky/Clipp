<!-- 
     ReviewStoresAction.php
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: March 4, 2020
     This action saves the stores and ratings in the Store_Reviews table in the database
-->
<?php 
    // Require the store DAO
    require_once('./dao/storeDAO.php'); 

    //Get the reviews from the post method
    $review1 = $_POST['store1'];
    $review2 = $_POST['store2'];
    $review3 = $_POST['store3'];
    $review4 = $_POST['store4'];
    $shopperDetails = $_POST['shopperDetails'];

    // Split each review on the pipe and save as 2 new variables: store name and store rating
    $review1Split = (explode("|", $review1));
    $reviewName1 = trim($review1Split[0]);
    $reviewScore1 = $review1Split[1];

    $review2Split = (explode("|", $review2));
    $reviewName2 = trim($review2Split[0]);
    $reviewScore2 = $review2Split[1];
    
    $review3Split = (explode("|", $review3));
    $reviewName3 = trim($review3Split[0]);
    $reviewScore3 = $review3Split[1];

    $review3Split = (explode("|", $review4));
    $reviewName4 = trim($review3Split[0]);
    $reviewScore4 = $review3Split[1];
    
    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new storeDAO object
        $storeDAO = new storeDAO();
        
        // Checks if each review is set. There can be between 1 and 4 reviews
        // If it is set, create new store object and call reviewStores method from the store DAO
        if( isset($review1)) { 
            $store1 = new Store($reviewName1, $reviewScore1);
            $getSuccess = $storeDAO->reviewStores($store1, $shopperDetails);
        } 

        if( isset($review2)) { 
            $store2 = new Store($reviewName2, $reviewScore2);
            $getSuccess = $storeDAO->reviewStores($store2, $shopperDetails);
        } 

        if( isset($review3)) { 
            $store3 = new Store($reviewName3, $reviewScore3);
            $getSuccess = $storeDAO->reviewStores($store3, $shopperDetails);
        } 

        if( isset($review4)) { 
            $store4 = new Store($reviewName4, $reviewScore4);
            $getSuccess = $storeDAO->reviewStores($store4, $shopperDetails);
        } 
    }catch(Exception $e){
        echo '<h3>Error on page.</h3>';
    }
    
    
?>