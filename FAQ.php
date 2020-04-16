<!-- 
     FAQ.html
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: March 10, 2020
     The FAQ includes the bootstrap navbar to be included in each page.
     This page is where user can get answers to frequently asked questions
-->

<!DOCTYPE html>
<html lang="en">

<?php 
    // include the header banner
     include "./header.html" ;
 ?>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- CSS Stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/24a6b1f962.js" crossorigin="anonymous"></script>

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

<!-- Accordion of FAQ information. Each header drops down information -->
<body class="container-fluid bg-grey text-left">
   
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h3>How do I add items to my grocery list?</h3> 
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p>To add item to the list click on the <strong style="color:blue;">New List button</strong>. A pop-up will appear prompting you for the following information:</p>
                    <ul>
                        <li>List name</li>
                        <li>Postal code</li>
                        <li>City</li>
                        <li>Number of stores you would like to visit</li>
                    </ul>
                    <p>Once submitted, this will take you to the <strong style="color:blue;">next page</strong> where you will be able to add items to your list by entering them into the Grocery Item field. </p>
                    </br>
                </div>
            </div>
        </div>
  
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h3> How do I save my list to favourites?</h3>
                    </button>
                </h5>
            </div>
    
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <p>To save a list to <strong style="color:blue;">favourites</strong>, your list must follow the following guidelines:</p>
                    <ul>
                        <li>Your list must have items entered into it</li>
                        <li>Your list must be marked as complete</li>
                    </ul>

                    <p>Once a list has been marked as complete, you can favourite it by pressing the star button that has become visible</p>
                    </br>
                </div>
            </div>
        </div>
  
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h3>Can't sign into clipp?</h3>
                    </button>
                </h5>
            </div>
            
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <p>To sign into <strong style="color:blue;">Clipp</strong> follow the steps below:</p>
                    <ul>
                        <li>Click on the <strong style="color:blue;">sign in button</strong> on the navigation bar.</li>
                        <li>This will prompt the user to sign in with a <strong style="color:blue;">Google account</strong> or <strong style="color:blue;">Facebook account</strong>.</li>
                    </ul>
                    </br>
                </div>
            </div>
        </div>
    </div>

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