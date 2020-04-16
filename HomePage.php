<!-- 
     HomePage.php
     Authors: Kendra Dezenosky, Ibrahim Mekraldi, Solomon Shleifman, Danyao Wang, Anuja Thomas
     Date created: January 26, 2020

     This is the first loaded view for the shopper. It provides a brief description of the application and the services we offer.
     Please note that some comments and function names will be removed or altered upon publication to the public.
-->

<!DOCTYPE html>
<html lang="en">

<?php 
     // Include a link to the header HTML page for the banner 
     include "./header.html" 
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

<body>
     <!-- Background image with text overlay -->
     <div class="container-image text-center">
          <img src="images/berries.jpg" style="width: 100%;" alt="Berries">
          <div class="text-image-overlay" style="background: rgba(230, 255, 250, 0.8); border-radius: 20px; padding: 20px; box-shadow: 0 0 20px gray;">
               <h2>ABOUT US</h2>
               <h4>Gone are the days of paper lists and coupon clipping.</h4>
               <p>At Clipp our mission is to make savings accessible to all. Use Clipp as your One Stop Shop for savings on groceries. </p>
          </div>
     </div>

     <!-- Services section -->
     <div class="container-fluid bg-grey text-center">
          <h2>SERVICES</h2>
          <h4>What we offer</h4>
          <br>
          <!-- In one row, display each service with a Font Awesome icon to represent it -->
          <div class="row">
               <div class="col-sm-4">
                    <i class="fas fa-store fa-4x"></i>
                    <h5>SELECT YOUR STORES</h5>
                    <p>Customize how many stores you would like to visit for your shopping list. </p>
               </div>
               <div class="col-sm-4">
                    <i class="fas fa-tags fa-4x"></i>
                    <h5>FIND THE SALES</h5>
                    <p>Clipp will tell you which stores have your items on sale</p>
               </div>
               <div class="col-sm-4">
                    <i class="fas fa-certificate fa-4x"></i>
                    <h5>GET THE BEST DEAL</h5>
                    <p>If your items are not on sale, Clipp will tell you which store has the best price for you.</p>
               </div>
               <div class="col-sm-4">
                    <i class="fas fa-star fa-4x"></i>
                    <h5>GET CUSTOMIZED LISTS</h5>
                    <p>Review your stores to get customized lists based on your preferences</p>
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

     <!-- Section for Documentation -->
     <div class="accordion" id="accordionExample">
          <!-- Cards created for each heading that can be pressed to drop down with info -->
          <div class="card">
               <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <h3>Introduction</h3>
                         </button>
                    </h2>
               </div>

               <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                         <p>Welcome to the <strong style="color:blue;"> Clipp</strong> application. These topics will help you better navigate our services</p> 
                         <p>The topics include:</p>
                         <ul>
                              <li>Signing in</li>
                              <li>New List page</li> 
                              <li>My Favourite Lists page</li>
                              <li>FAQ page</li>
                         </ul>
                    </div>
               </div>
          </div>

          <div class="card">
               <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <h3>Sign In</h3>
                         </button>
                    </h2>
               </div>
          
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body"> 
                         <p>The sign-in page allows you to sign in using the method that suits you best. This allows for the following:</p>
                         <ul>
                              <li>Sign into the <strong style="color:blue;">Clipp</strong> application using a <strong style="color:blue;">Google account</strong> or <strong style="color:blue;">Facebook account</strong>.</li>
                              <li>Allows the <strong style="color:blue;">Clipp</strong> application to elevate the overhead of managing user validations</li>
                              <li>Both <strong style="color:blue;">Google</strong> and <strong style="color:blue;">Facebook</strong> take care of the authentication of the user signing in</li>  
                         </ul>   
                    </div>
               </div>
          </div>
     
          <div class="card">
               <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                         <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <h3>New List</h3>
                         </button>
                    </h2>
               </div>
     
               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                         <p class="docunetation">The new list page allows you to add and delete items from the list. It also allows you to save your list to your favourites page.</p>
                         <h4><u>Shopping List pop up:</u></h4>
                         <p> When you click on the new list button <strong style="color:blue;">a shopping list</strong> pop-up comes up to give you the ability to:</p>
                         <ul>
                              <li>Name <strong style="color:blue;">the shopping list</strong> </li>
                              <li>Add your postal code and give the name of the city associated with that postal code</li> 
                              <li>Choose how many stores you would like to visit between <strong style="color:blue;">1 and 4</strong>.</li> 
                         </ul>
                         </br>
                         <img src="images/new_list_popup_empty.png" alt="">
                         </br>
          
                         <p class="documentation">The form is designed to help you create a successful list</p>
                         <ul>
                              <li>It has <strong style="color:blue;">validation</strong> in place that will not allow you to submit the form until all the fields are entered</li>
                              <li>It checks if you already have created a list with that name</li> 
                              <li>It checks if your postal is in a valid format and whether it matches your city</li>
                         </ul>  

                         <img src="images/new_list_popup_filled.png" alt="">
                         </br>

                         <h4><u>New List page:</u></h4>      
                         <p>Once a list has been created, you are taken to the new list page, where you can:</p>
                         <ul>
                              <li>Enter items in the grocery item box to add the item to the grocery list.</li>
                              <li>Once you add items to the list, we will process the request per item and show you which store in your region has the best deals.</li>
                              <li>Once a list is completed, you can press the <strong style="color:blue;">Mark as Complete</strong> button. </li>
                         </ul>
               
                         <img src="images/new_list_page_filled2.png" alt="">
                         </br>
          
                         <h4><u>Alert personalized list:</u></h4>
                         <p>Once a list has been marked as complete, you'll be alerted that you can review the stores in your list for more personalized lists in the future.</p>
                         <img src="images/alert_personalized.png" alt="">
                         </br>
                         
                         <h4><u>Rate each store:</u></h4>    
                         <p>Another pop up will appear that lets you rate the stores you have visisted:</p>
                         <ul>
                              <li>1 being the <strong style="color:blue;">least favourite</strong> and 5 being the <strong style="color:blue;">most favourite</strong>.</li>
                              <li>After you <strong style="color:blue;">submit your review </strong> you are returned to your list view.</li>
                         </ul>

                         <img src="images/pop_up_rate_store.png" alt="">
                         </br>

                         <p>Once a list is completed and stores are reviewed: </p>
                         <ul>
                              <li>You can save the list you've created to your favourites by clicking the <strong style="color:blue;">star</strong>.</li>
                              <li>You can search through the items on the grocery list.</li>
                              <li>You can choose how many items from the list you wish to view at a time. This ranges from <strong style="color:blue;">10, 25, 50</strong> and <strong style="color:blue;">100</strong></li>     
                         </ul>
                         </br>

                         <h4><u>Toggle to receive personalized lists:</u></h4>
                         <p>Another great feature that is available is the <strong style="color:blue;">ability to toggle for personalized list</strong> based on past store reviews. This gives you a more customized experience to be able to shop for the items at your <strong style="color:blue;">favourite stores</strong></p>
                         <img src="images/new_list_star_button.png" alt="">
                         </br>

                   </div>
               </div>
          </div>
     </div>

     <div class="card">
          <div class="card-header" id="headingFour">
               <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                         <h3>My Favourite Lists</h3>
                    </button>
               </h2>
          </div>
     
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
               <div class="card-body"> 
                    <p><strong style="color:blue;">The favourites page</strong> allows:</p>
                    <ul>
                         <li>View all saved lists that you've created.</li>
                         <li>Favourite <strong style="color:blue;">up to 10</strong> lists to view</li>
                         <li>Favourited lists will be <strong style="color:blue;">updated</strong> with the current price and store location to compare against the original sales.</li>
                    </ul>
               </div>
          </div>
     
     </div>

     <div class="card">
          <div class="card-header" id="headingFive">
               <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                         <h3>FAQ</h3>

                    </button>
               </h2>
          </div>
     
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
               <div class="card-body"> 
                    <p><strong style="color:blue;">The frequently asked question page (FAQ)</strong> allows the user to view common questions about <strong style="color:blue;">Clipp</strong>.</p>    
               </div>
          </div>
     
     </div>

     
</div>


     <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
     <script>document.getElementById("g-signOut").onclick = function() {onSignOut()};</script>
     
</body>

</html>