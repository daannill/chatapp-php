<?php

$title = 'Login';
require_once __DIR__ . '/template-views/header.php';

?>

<div class="wrapper">
    <header class="header">Chat App</header>
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
    </form>
</div>

<script src="javascript/toogle-eye.js"></script>