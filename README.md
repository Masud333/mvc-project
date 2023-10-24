# Description

This repository contains a project that demonstrates how to create a simple web application using the Model-View-Controller (MVC) pattern in PHP. The project consists of the following files:

- index.php: The main file that handles the requests and responses of the web application. It uses the Front Controller pattern to route the requests to the appropriate controllers and views.
- core/: A folder that contains the core classes of the MVC framework, such as Application, Controller, Database, and Model. These classes provide the basic functionality and structure of the web application.
- controllers/: A folder that contains the controller classes that handle the business logic and data manipulation of the web application. Each controller class extends the Controller class from the core folder and has methods that correspond to different actions.
- models/: A folder that contains the model classes that represent the data and entities of the web application. Each model class extends the Model class from the core folder and has properties and methods that interact with the database.
- views/: A folder that contains the view files that render the user interface and presentation of the web application. Each view file is a PHP file that contains HTML, CSS, and JavaScript code. The view files are organized into subfolders according to their corresponding controllers and actions.
- public/: A folder that contains the public assets of the web application, such as images, stylesheets, and scripts. This folder is also the document root of the web server, which means that all requests are redirected to this folder by default.
- config/: A folder that contains the configuration files of the web application, such as database credentials and application settings.

# Images
![image](https://github.com/Masud333/mvc-project/assets/78741570/02feb858-9a56-40a3-b58b-b88b93f9cc30)

