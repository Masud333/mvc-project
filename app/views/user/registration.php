<!-- <h1>Register new user</h1>
<form method="post" action="/user/register">
    <div>    
        <label for="firstname">firstname</label>
        <br>
        <input id="firstname" name="firstname">
    </div>

    <div>    
        <label for="lastname">lastname</label>
        <br>
        <input id="lastname" name="lastname">
    </div>

    <div>    
        <label for="username">email address</label>
        <br>
        <input id="username" name="username">
    </div>

    <div>    
        <label for="user_password">password</label>
        <br>
        <input id="user_password" name="user_password" type="password">
    </div>

    <div>    
        <label for="user_password">Repeat Password</label>
        <br>
        <input id="user_password_confirm" name="user_password_confirm" type="password">
    </div>

    <button type="submit">Submit</button>
</form> -->

<div class="row">

<!-- Creating a left column div, so that the FORM position in center-->
<div class="col-l-4 col-m-3 col-s-2"></div>

<!-- CREATING THE FORM -->
<div class="col-l-4 col-m-6 col-s-8">
    <div class="form">
        <!-- The value inserted in the action attribute is to prevent cross-site scripting -->
        <form action="/user/register" method="post"> 
            <label for='firstname'></label><span><i class="fa-regular fa-user"></i> Firstname</span></label>
            <input type="text" id="firstname" name="firstname" onkeyup='saveValue(this);'> 

            <label for='lastname'></label><span><i class="fa-regular fa-user"></i> Lastname</span></label>
            <input type="text" id="lastname" name="lastname" onkeyup='saveValue(this);'>

            <label for="username"><span><i class="fa-solid fa-user"></i> Username</span></label>
            <input type="text" id="username" name="username" onkeyup='saveValue(this);'> <!-- pattern="^[a-zA-Z]+$" required -->

            <label for="user_password"><span><i class="fa-solid fa-key"></i> Password</span></label>
            <input type="text" id="user_password" name="user_password" onkeyup='saveValue(this);'> <!-- pattern="^[a-zA-Z]+$" required -->

            <label for="user_password"><span><i class="fa-solid fa-key"></i> Repeat Password</span></label>
            <input type="text" id="user_password_confirm" name="user_password_confirm">

            
            <input id="myBtn" type="submit" value="Register" name="Register">

            <a href="/user/login">Click to Login</a>
        </form> 
    </div>
</div>    
</div>

