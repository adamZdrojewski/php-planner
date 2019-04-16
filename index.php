<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <!--Navbar-->
        <nav>
            <div class="nav-wrapper green">
                <a href="#" class="brand-logo">Planner</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="container center aligned">
            <br>
            <br>
            <h2>Planner Home</h2>
            <h4>Login</h4>
            <br>
            <form action='login.php' method='post'>
                <div class="input-field">
                    <input id="username" type="text" class="validate" name="username">
                    <label for="username">Username</label>
                </div>
                <div class="input-field col s10">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Password</label>
                </div>
                <button class='btn waves-effect waves-light' type='submit' name='action'>Login<i class='material-icons right'>person</i></button>
            </form>
            
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>