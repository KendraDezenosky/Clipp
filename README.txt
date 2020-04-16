Clipp Details
=============
Author: Kendra Dezenosky
Last Updated: April 6, 2020
----------------------------

LANGUAGES, LIBRARIES, AND FRAMEWORKS:  
    * HTML
    * CSS
    * JavaScript
    * Bootstrap 
    * AJAX
    * PHP 

FOLDER STRUCTURE:
    * CSS
        - style.css sheet for entire application
    * DAO: database connection classes
        - AbstractDAO: main connection
        - ListDAO, ShopperDAO, storeDAO: queries for each table
    * images
        - All graphics including logos and screenshots for documentation page 
    * Model: object classes 
        - Lists, Shoppers, stores
        - Getters and setters for each class
        - These are used to pass objects through methods
    * Scripts
        - All Javascript Scripts
    * SQL 
        - init.sql script to run to create schema

HEADER
    * When the page is resized, the header becomes a drop down menu 
    * Buttons are only visible once logged in
    * Header will be shown at the top of each page

DATABASE CONNECTION:
    * init.sql contains script to create the schema
    * MySQL Workbench 8.0 used for development
    * AbstractDAO creates connection 
    * ListDAO, shopperDAO, storeDAO extend AbstractDAO  
        - Contain queries to run in database
    * Action pages (ie/ NewListAction, ReviewStoresAction, etc.)
        - Ajax or $.get methods in JavaScript call Action pages
        - Action page takes data from forms/javascript pages
        - Calls appropriate DAO page method with the variables

    JavaScript function > Action page > DAO > extends AbstractDAO 

ALGORITHMS:
    * Algorithm to limit number of stores is functional but has a bug where it breaks on 3rd item
    * AI algorithm will take the reviewed stores and prioritize the higher reviewed stores
    * Currently the AI toggle does nothing
    * In future iterations this will switch the algorithm from the standard algorithm to the AI algorithm

INSTRUCTIONS FOR IMPLEMENTATION OF CLIPP:
    1. Open MySQL Workbench and run the init.sql to create the schema
    2. Run a localhost on an approved port
    3. Place the source code in the htdocs folder to run through XAMPP
    4. Open the HomePage as the first page
    5. Login to see full functionality 

INSTRUCUTIONS FOR TRANSITION TO PRODUCTION ENVIRONMENT:
    * Using Open source program - Ngrok which allows us to expose web server running on a local machine
    1. Place source code in htdocs folder
    2. Download Ngrok for Windows: https://ngrok.com/download
    3. Unzip and run the .exe file
    4. Run the following line, replacing **** with your port number: ngrok http ****
    5. Close the command
    6. Add the file path to this URL: https://69322d72.ngrok.io/clipps-dev2/Homepage.php

INSTRUCTIONS FOR TESTING INSTALLATION:
    1. One server must be running the Ngrok file 
    2. The URL can then be ran on any device
    
    * Due to Google restrictions, all ports must be authorized so login does not work yet
    * We are unable to authorize ports as the Google API was created by a team member no longer participating
