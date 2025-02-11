<?php

$title = 'Sign up';
require __DIR__ . '/template-views/header.php';

?>

<div class="container">
    <div class="wrapper">
        <div class="title">
            <h1>Chat App</h1>
        </div>

        <div class="header">
            <h3>Sign Up</h3>
            <div id="error-txt" class="error-txt">This is error Message</div>
        </div>

        <div class="form">
            <form id="form-signup" action="" autocomplete="off">
                <div class="input-name">
                    <div class="form-input">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="Enter your first name">
                        <small id="error-fname" class="error-input">This is error input</small>
                    </div>
                    <div class="form-input">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Enter your last name">
                        <small id="error-lname" class="error-input">This is error input</small>
                    </div>
                </div>

                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" autocomplete="off">
                    <small id="error-email" class="error-input">This is error input</small>
                </div>
            
                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">
                    <i class="bi bi-eye icon" id="icon"></i>
                    <small id="error-password" class="error-input">This is error input</small>
                </div>
        
                <div class="form-file">
                    <label for="image">Profil Picture</label>
                    <input class="image" type="file" name="image" id="image">
                    <img id="preview-img" class="preview-img" alt="">
                    <small id="error-image" class="error-input">This is error input</small>
                </div>

                <div class="form-button">
                    <button id="btn-signup" type="button">Sign up</button>
                </div>
            </form>
        </div>

        <div class="account-promt">Already have an account? <a href="index.php">Login now!</a></div>
    </div>
</div>

<script src="javascript/toogle-eye.js"></script>
<script src="javascript/preview-img.js"></script>
<script src="javascript/signup.js"></script>


<!-- <form action="" method="post">
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
</form> -->