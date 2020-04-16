
<?php 
    // require the list DAO
    require_once('./dao/listDAO.php'); 

    // get the variable from the GET method
    $shopperDetails = $_GET["shopperDetails"];

    // tries the DAO and sets errors if information is incorrect
    try{
        //Creates new listDAO object
        $listDAO = new listDAO();

        //Calls listDAO search group ID function with the shopper details as a parameter
        echo $listDAO->searchGroupIdList($shopperDetails);

    }catch(Exception $e){
        echo '<h3>Error on page.</h3>';
    }
    
    
?>