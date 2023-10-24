<!-- <h1>Login</h1>
<form method="post" action="/user/login">
    <div>    
        <label for="username">username</label>
        <br>
        <input id="username" name="username">
    </div>

    <div>    
        <label for="user_password">password</label>
        <br>
        <input id="user_password" name="user_password" type="password">
    </div>

    <button type="submit">Submit</button>
</form> -->

<div class="row">

<!-- Creating a left column div, so that the FORM position in center-->
<div class="col-l-4 col-m-3 col-s-2"></div>

<!-- CREATING THE FORM -->
<div class="col-l-4 col-m-6 col-s-8">
    <div class="form" style="background-color: #8ec5e8;">
        <!-- The value inserted in the action attribute is to prevent cross-site scripting -->
        <form action="/user/login" method="post"> 
            <label for="username"><span><i class="fa-solid fa-user"></i> Username</span></label>
            <input type="text" id="username" name="username"> <!-- pattern="^[a-zA-Z]+$" required -->

            <label for="user_password"><span><i class="fa-solid fa-key"></i> Password</span></label>
            <input type="text" id="user_password" name="user_password"> <!-- pattern="^[a-zA-Z]+$" required -->
            
            <input id="myBtn" type="submit" value="Login" name="Login">

            <a href="/user/register">Click to Register</a>
        </form> 
    </div>
</div>   