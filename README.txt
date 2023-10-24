## The page concept and general overview --------- 
The page concept is logging into a website through a login form, whereas afterwards it is possible to access, 
view and uploade images and view other restricted content that is only accesable after access required trough login.
If no user, one can register to the website through a register form. 


## List of URL’s and what they do --------- 
Within the mvc file structure, the /mvc-main/app/partials/menu.php/ file has the href links to the different menu navbar buttons.
These buttons follow the same URL structure. The structure is the given localhost port than a '/' than a word which will be read as a controller, 
if the controller exist othervise read as defeaul 'HomeController.php'.
Next word after the '/' sign will be read as a method within that specified controller class. Example: localhost:8080/Controller/ControllerFunction/ControllerFunction
This is all initliasied within the Router's constructor method. 

The /app/partials/head.php/ contains a script tag that contains a url to fontawesome, which is retrived from frontawesome website, this enables for example access to the websites icons.


## How to set up the project --------- 
*** Which folder PHP should be started from in order to run the project correctly ***
When starting the php enovirment within the mvc directory, the mvc-main is ran. Than php scripts can be accessed through a web browser by typing localhost:8080 in the address bar. 
This would open the default index.php, which it setup in a way that starts the project correctly, by starting a new session, require other files and creates a new router object.
*** Where to find the db_config.php to set up the database ***
The file is found within the core directory, /mvc-main/app/core/db_config.php/. 
*** Where to find the migration.sql file which contains all SQL code to set up the database ***
The file is found within the install directory, /mvc-main/install/my_migrations.sql/. This file does not execute by it self, 
these is an SQL script that can be ran in multiple ways and serves as a blueprint for creating the excact database structure for operating with the given project.
*** What you do with AJAX and where to find both JS and PHP code for it ***
I use a function with a simple AJAX call using the 'XMLHttpRequest' object. This is done with vanilla JS. 
It takes an URL as first argument and a HTTP method that utilised the mvc's already specified APIController,
and its function for retrieving the users within the database in a structured JSON format. 
Than the readystate and the status within the HTML request checks if the resquest is successful.
Lastly the intterHTML text of a simple div is changed upon the respond retrieved from the server. 

The is writin within script tags on the restricted.php file, located at /mvc-main/app/views/home/restricted.php/.


## Security --------- 
*** That XSS is not possible ***
Cross-site scripting was managed by the mvc structure by 'filter_var' function with its 'filter_sanatice_string' flag, hovwer this was a deprecated function with PHP 8 and above.
And so the 'htmlspecialchars' function was used instead, these ensure that special characters are converted into HTML characteres and so blocks the abbility to exploit inserting 
script tags within or other malicious JavaScript content.
*** That SQL injection is not possible ***
SQL injections are avoided by using parameterized queries, seperating the SQL code, helps for preventing malicous code intering your queries. 
Filter_var also plays a role here, by validating and sanitising the input variables.
*** That only images can be uploaded (not PDF, EXE or PHP files, etc.) ***
A variable is created which is an array that holds the pre-defined allowed exention, such as png, jpeg and more. 
Than 'in_array' function within PHP uses this defined array as one of the arguments for ensuring the right extensions before uploading the files.  
*** How passwords are protected ***
Paswords are hashed before they are stored in the database, and when then used for login purposes the 'password_verify' function is used 
for checking if the match for the hashed password and the user defined password.
In some extend the regex, if written write, is also pushing the user to create a stronger password and hence also protecting the password.

## List of known errors --------- 
*** Describe what you tried and what you think is wrong ***
Before integrating the code within the mvc structure, the images uploaded worked fine and displayed nicely within a css grid. 
This is no longer the case, and it is suspected that maybe if data uri schemes for images where used, like converting the image to base64 encoding, would have helped.

I have created a hover function over the images, that then shows and X icon for deleting images, but deleting images both in database and aswell in the upload or 
assets folder within the mvc gave some issues.

Utilising the ApiController and its functions worked fine, but creating the GET localhost:8080/xx/mvc/public/api/users specific structure gave some strange erros, 
and because confusion started to play a role, I didn't manage to create exactly this path where i included my SDU handle.

I worked on a modal in JS for sliding down over the page when for example wrong password inputted og regex requirments were not forfilled, but I couldnt make it work with plain css.
Also didnt help that every example found were done with bootstrap.
 


