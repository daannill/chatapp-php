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
            <div class="error-txt">This is error Message</div>
        </div>

        <div class="form">
            <form action="" autocomplete="off">
                <div class="input-name">
                    <div class="form-input">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="Enter your first name" required>
                    </div>
                    <div class="form-input">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Enter your last name" required>
                    </div>
                </div>

                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off" required>
                </div>
            
                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off" required>
                    <i class="bi bi-eye icon" id="icon"></i>
                </div>
        
                <div class="form-file">
                    <label for="file">Profil Picture</label>
                    <input class="file" type="file" name="file" id="file">
                    <img id="preview-img" class="preview-img" alt="">
                </div>

                <div class="form-button">
                    <button type="submit">Sign up</button>
                </div>
            </form>
        </div>

        <div class="account-promt">Already have an account? <a href="index.php">Login now!</a></div>
    </div>
</div>

<script src="javascript/toogle-eye.js"></script>
<script src="javascript/preview-img.js"></script>


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