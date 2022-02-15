<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

 <div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login" action="login process.php" method="POST" style="margin-left: auto; margin-right: auto;">
                
                <div class="login__field">
                    <img src="images/pngegg.png" style="width: 100px; height: 100px;display: block;margin-left: auto;margin-top: -100px ; margin-right: auto;">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                   <!--  <input type="text" class="login__input" placeholder="User name / Email" id="user" name="username> -->
                   <input type="text" id="user" name="username" placeholder="username" class="login__input"/>
                </div>

                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <!-- <input type="password" class="login__input" placeholder="Password" id="pass" name="password"> -->
                    <input type="Password" id="pass" name="password" placeholder="password" class="login__input"/>
                </div>
                <button class="button login__submit" id="btn" name="login" default>
                    <span class="button__text" style="margin-left:auto;">Log In</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>               
            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>      
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>      
    </div>
</div>

</body>
</html>