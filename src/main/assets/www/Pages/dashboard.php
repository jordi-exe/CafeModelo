<?php
    session_start();
    if(!isset($_SESSION['name'])){
        header("Location: index.html");
    }
    if(isset($_GET['logout']) == 'yes'){
        session_destroy();
        header("Location: index.html");
    }


?>

<ons-navigator swipeable id="myNavigator" page="page1.html" animation="slide"></ons-navigator>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
    <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
<template id="page1.html">
<ons-page id="page1">
        <div style="text-align: center; margin-top: 20px; color:#01579b;">
            <img src="img/modelo-01.png" width="60%">
            <h4>Cocina Modelo</h4>
        </div>
        <div style="text-align: left; margin-top: 50px; margin-left: 85px; color:#01579b;">
            <h2>Sign In</h2>
            <h4>Inicia sesión para ordenar.</h4>
        </div>
        <div style="text-align: center; margin-top: 50px">

            <p>
                <ons-input id="username" placeholder="Username" modifier="underbar"></ons-input>
            </p>
            <p style="margin-top:25px">
                <ons-input
                        id="password"
                        placeholder="Password"
                        type="password"
                        modifier="underbar"
                >
                </ons-input>
            </p>

            <section style="padding-left:50px; padding-right:50px; padding-top:20px">
                    <p><a href="?logout=yes">Logout</a></p>
                <br>
                    <ons-button id="push-button" modifier="quiet" >Registrate!</ons-button>
            </section>
            <div id="txtHint">Customer info will be listed here...</div>

        </div>
</ons-page>
</template>

<!-- Register Page -->
<template id="register.html">
    <ons-page id="register">
        <ons-toolbar>
            <div class="left"><ons-back-button>Registrate!</ons-back-button></div>
            <div class="center"></div>
        </ons-toolbar>
        <div style="text-align: center; margin-top: 10px; color:#01579b;">
            <img src="img/modelo-01.png" width="30%">
            <h4>Cocina Modelo</h4>
        </div>

        <div style="text-align: center; color:#01579b;">
        <div style="display: inline-block; text-align: left; margin-top: 10px">
            <h4>Usuario</h4>
            <p>
                <ons-input id="username" placeholder="ejemplo" modifier="underbar"></ons-input>
            </p>

            <h4>Contrasena</h4>
            <p>
                <ons-input
                        id="password"
                        type="password"
                        placeholder="*******"
                        modifier="underbar"
                >
                </ons-input>
            </p>

            <h4>Confirma Contrasena</h4>
            <p>
                <ons-input
                        id="confirmPass"
                        type="password"
                        placeholder="*******"
                        modifier="underbar"
                >
                </ons-input>
            </p>

            <h4>Numero Telefonico</h4>
            <p>
                <ons-input id="phoneNum" placeholder="123 4565" modifier="underbar"></ons-input>
            </p>

            <h4>Correo</h4>
            <p>
                <ons-input id="email" type="email" placeholder="ejemplo@gmail.com" modifier="underbar"></ons-input>
            </p>

            <section style="padding-left:50px; padding-right:50px; padding-top:10px">
                <ons-button modifier="large">Registrate</ons-button>
            </section>
        </div>
        </div>
    </ons-page>
</template>
</body>
</html>