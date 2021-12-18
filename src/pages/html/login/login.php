<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>


</head>

<body>
    <h1>Inicio sesión con facebook</h1>
    <input type="text">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0&appId=331230838551755&autoLogAppEvents=1" nonce="GRaZWCk9"></script>
    <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
    <script>
        FB.api('/me', {
            fields: 'name'
        }, function(response) {
            console.log(response);
        });
    </script>
</body>

</html>