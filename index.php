<?php

require "lib/db.data.php";
include "lib/header.php";


?>

<body>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h1 class="text-center pt-lg-5">E-Banking</h1>
        <!-- Icon -->
        <div class="fadeIn first" >
            <img src="img/1200px-User_font_awesome.svg.png" id="icon" alt="User Icon"/>
        </div>

        <!-- Login Form -->
        <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Registrieren -->
        <div id="formFooter">
            <a class="underlineHover" href="reg.php">Registrieren</a>
        </div>

    </div>
</div>




</body>
</html>