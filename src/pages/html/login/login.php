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


</head>

<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: 'your-app-id',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v12.0'
            });
            FB.api('/me', {
                fields: 'name'
            }, function(response) {
                console.log(response);
            });
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <h1>Inicio sesión con facebook</h1>

    <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
</body>

</html>