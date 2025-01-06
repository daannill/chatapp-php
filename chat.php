<?php

$title = 'Sign up';
require __DIR__ . '/template-views/header.php';

?>

<div class="container">
    <div class="header-chat">
        <div class="user-info">
            <i class="bi bi-arrow-left-short"></i>
            <img src="img/16.png" alt="">
            <div class="text">
                <h3>Nama</h3>
                <p>Active Now</p>
            </div>
        </div>
    </div>
    
    <div class="wrapper-message">
        <div class="chat-bubble bubble-right">
            <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi qui minima natus ea laborum. Id facere modi</p>
            <span class="timestamp">11:54 PM</span>
        </div>
        <div class="chat-bubble bubble-left">
            <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi qui minima</p>
            <span class="timestamp">11:54 PM</span>
        </div>
        <div class="chat-bubble bubble-left">
            <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi qui minima</p>
            <span class="timestamp">11:54 PM</span>
        </div>
        <div class="chat-bubble bubble-left">
            <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi qui minima</p>
            <span class="timestamp">11:54 PM</span>
        </div>
        <div class="chat-bubble bubble-right">
            <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi qui minima natus ea laborum. Id facere modi</p>
            <span class="timestamp">11:54 PM</span>
        </div>
    </div>

    <div class="message-box-wrapper">
        <div class="message-box">
            <input type="text" name="chat" placeholder="Write a message ...">
            <div class="icon">
                <i class="bi bi-send-fill"></i>
            </div>
        </div>
    </div>
</div>