<?php

$title = 'Sign up';
require __DIR__ . '/template-views/header.php';

?>

<div class="wrapper">
    <header class="header">Chat App</header>
    <form action="" method="post">
        <div class="section">Sign up</div>
        <div class="error">This is error Message</div>

        <div class="name">
            <div class="field">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="Enter your first name" autocomplete="off" required>
            </div>
            <div class="field">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="Enter your last name" autocomplete="off" required>
            </div>
        </div>
        
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required>
        </div>
        
        <div class="field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off" required>
            <i class="bi bi-eye icon" id="icon"></i>
        </div>

        <div class="field">
            <label for="profil">Profil Picture</label>
            <input class="file" type="file" name="profil" id="profil">
            <img id="picture" class="picture" alt="">
        </div>

        <div class="button">
            <button type="submit">Sign up</button>
        </div>
        
        <div class="small">Already have an account? <a href="index.php">Login now!</a></div>
    </form>
</div>

<script src="javascript/toogle-eye.js"></script>
<script src="javascript/input-file.js"></script>