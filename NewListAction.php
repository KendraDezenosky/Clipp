<!-- 
     NewListAction.php
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: February 16, 2020
     This action adds the store the Stores database table and the list item to the Lists table in the database
-->
<?php 
    //Setting default timezone
    date_default_timezone_set("EST");

    // Require the List and Store DAO 
    require_once('./dao/listDAO.php'); 
    require_once('./dao/storeDAO.php');

    // Get the variables from the POST method
    $listName = $_POST['listName'];
    $itemName = $_POST['itemName'];
    $itemDetails = $_POST['itemDetails'];
    $price = $_POST['price'];
    $priceDetails = $_POST['priceDetails'];
    $sale = $_POST['sale'];
    $location = $_POST['location'];
    $postalCode = $_POST['postalCode'];
    $city = $_POST['city'];
    $favourited = $_POST['favourited'];
    $shopperDetails = $_POST['shopperDetails'];

    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new listDAO object and new storeDAO object
        $listDAO = new listDAO();
        $storeDAO = new storeDAO();

        //Create a new list and passes variables as parameters
        $list = new GroceryList($listName, $itemName, $itemDetails, $price, $priceDetails, $sale, date("Y-m-d h:i:s"), $location, $postalCode, $city, $favourited, $shopperDetails);
        
        //Calls storeDAO addStore function with the list object as a parameter
        $getSuccess = $storeDAO->addStore($location);

        //Calls listDAO addList function with the list object as a parameter
        $getSuccess = $listDAO->addList($list);

    }catch(Exception $e){
        echo '<h3>Error on page.</h3>';
    }
    
    
?>