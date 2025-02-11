<?php

$title = 'Login';
require_once __DIR__ . '/template-views/header.php';

?>

<div class="container">
    <div class="wrapper">
        <div class="title">
            <h1>Chat App</h1>
        </div>

        <div class="header">
            <h3>Login</h3>
            <div class="error-txt">This is error Message</div>
            <div class="success-txt">This is error Message</div>
        </div>

        <div class="form">
            <form action="" autocomplete="off">
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <i class="bi bi-eye" id="icon"></i>
                </div>

                <div class="form-button">
                    <button id="button">Login</button>
                </div>
            </form>
        </div>

        <div class="account-promt">
            Don’t have an account? <a href="signup.php">Sign up now!</a>
        </div>
    </div>
</div>


<script src="javascript/toogle-eye.js"></script>
<script src="javascript/login.js"></script>


<!-- <header class="header">Chat App</header>
        <form action="" method="post">
            <div class="section">Login</div>
            <div class="error">This is error Message</div>

            <div class="field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="off" required>
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off" required>
                <i class="bi bi-eye icon" id="icon"></i>
            </div>

            <div class="button">
                <button type="submit">Login</button>
            </div>
            
            <div class="small">Don’t have an account? <a href="signup.php">Sign up now!</a></div>
        </form> -->