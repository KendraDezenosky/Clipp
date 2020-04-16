<!-- 
     MyLists.php
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: January 26, 2020
     This page shows all lists that were favourited by the shopper. The lists can be deleted or updated with the new prices
-->

<?php 
     // include the header banner
     include "./header.html" ;
 ?>
<!DOCTYPE html>
<html lang="en">


<!-- JQuery link -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Ajax Links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

<!-- Bootstrap links -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- CSS Stylesheet link -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Font Awesome script for icons -->
<script src="https://kit.fontawesome.com/24a6b1f962.js" crossorigin="anonymous"></script>

<!--source: https://developers.google.com/identity/sign-in/web-->
<meta name="google-signin-scope" content="profile email">

<!--source: https://developers.google.com/identity/sign-in/web/sign-in-->
<meta name="google-signin-client_id" content="158438822057-0dkrbgfe23fsi7tst3t74jnqtdmf98qt.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- ------------------------------------------------------------------------------------------------------ -->

<!-- Google Sign In -->
    <!-- source: https://developers.google.com/identity/sign-in/web-->
    <meta name="google-signin-scope" content="profile email">
    <!--source: https://developers.google.com/identity/sign-in/web/sign-in-->
    <meta name="google-signin-client_id" content="158438822057-0dkrbgfe23fsi7tst3t74jnqtdmf98qt.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!-- Scripts -->
     <script src="scripts/LoginScript.js"></script>
    <script>FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
          });
     </script>
     <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&autoLogAppEvents=1&version=v6.0&appId=212543986814632"></script>

    
<!-- Scripts -->
    <script src="scripts/LoginScript.js"></script>
     <script src="scripts/MyListsScript.js"></script>

<header>

</header>

<!-- <body> -->
</br>
<div class="jumbotron">
      <div class="display-4" id="myLists" style="text-align: center;">My Favourite Lists</div>
</div> 
<body onLoad="buildHtmlTable('#excelDataTable')">
     <table id="excelDataTable" class ="table table-hover table-striped"  style="width: 90%; border:1" >
     </table>
     </br>

     
     <!-- Login Pop Up & User Authentication -->
     <div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                    <!-- Pop up name set and Font Awesome icon included -->
                    <div class="modal-header">
                         <span id="modalCenterTitle"><i class="fas fa-user-circle"></i> Select a login method</span>
                         <!-- Close button created -->
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeLogin">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
                    <!-- Section for login options with appropriate buttons -->
                    <div class="main">
                         <div id="my-signin2" class="loginbtn"></div>
                         <div class="fb-login-button loginbtn" data-width="120px" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="false"></div>
                         <button id="g-signOut" class="btn btn-primary logoutbtn" style="width:240px">Sign out</button>
                    </div>
               </div>
          </div>
     </div>
     
     <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
     <script>document.getElementById("g-signOut").onclick = function() {onSignOut()};</script>
     
</body>
</html>
