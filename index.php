<?php
////require dirname(__DIR__) . '/bin/chat-server.php';
//include_once('bin/chat-server.php');
//?>
<!---->
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--    <script>-->
<!--        var conn = new WebSocket('ws://localhost:8080');-->
<!--        conn.onopen = function(e) {-->
<!--            console.log("Connection established!");-->
<!--        };-->
<!---->
<!--        conn.onmessage = function(e) {-->
<!--            alert(e.data);-->
<!--        };-->
<!--    </script>-->
<!--</head>-->
<!--<body>-->
<!--</body>-->
<!--</html>-->

<html>
<head>
    <style>
        input, button { padding: 10px; }
    </style>
</head>
<body>
<input type="text" id="message" />
<button onclick="transmitMessage()">Send</button>
<script>
    // Create a new WebSocket.
    var socket  = new WebSocket('ws://localhost:8080');

    // Define the
    var message = document.getElementById('message');

    function transmitMessage() {
        socket.send( message.value );
    }

    socket.onmessage = function(e) {
        alert( e.data );
    }
</script>
</body>
</html>