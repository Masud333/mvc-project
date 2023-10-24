<ul>
    <div class="menuBar"> 
    <li><a href="/home/restricted">Restricted</a></li>

        <?php if(isset($_SESSION['logged_in'])) : ?>
            <li><a href="/upload/all_images">Images</a></li>
            <li><a href="/upload/upload">Upload</a></li>
            <li><a href="/user/all_users">Users</a></li>
            <li><a href="/user/logout"> <i class="fa-solid fa-right-to-bracket"></i></a></li>
            
        <?php else : ?>
            <li><a href="/user/register">Register</a></li>
            <li><a href="/user/login">Login</a></li>
        <?php endif; ?>
    </div>
        </ul>
<?php
/**
 * The menu file contains the top menu of the project.
 */