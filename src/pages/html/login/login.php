<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '331230838551755',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v12.0'
            });
        };
        FB.api(path, method, params, callback)
    </script>
    
</head>

<body>
    <h1>Inicio sesión con facebook</h1>
    <p>
        <fb:login-button autologoutlink="true"></fb:login-button>
    </p>


    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '123456',
                status: true,
                cookie: true,
                xfbml: true
            });
        };


        (function() {
            var e = document.createElement('script');
            e.type = 'text/javascript';
            e.src = document.location.protocol +
                '//connect.facebook.net/en_US/all.js';
            e.async = true;
            document.getElementById('fb-root').appendChild(e);
        }());
    </script>
</body>

</html>