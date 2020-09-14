<!--<h3>Sign In</h3>-->
<!--<form action="/account/login" method="post">-->
<!---->
<!--	<p>Login</p>-->
<!--	<p><input type="text" name="login"></p>-->
<!--	<p>Password</p>-->
<!--	<p><input type="text" name="password"></p>-->
<!---->
<!--	<b><button type="submit" name="enter">Login</button></b>-->
<!---->
<!--</form>-->


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<!--<link rel="stylesheet" type="text/css" href="/public/css/style.css" />-->
</head>
<body>
<div class="container">
    <section id="content">
        <form action="/account/login" method="post">

            <h1>Login</h1>
            <div>
                <input type="text" name="login" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <input type="submit" name="enter" value="Log in" />
<!--                <a href="#">Lost your password?</a>-->
<!--                <a href="#">Register</a>-->
            </div>
        </form><!-- form -->

    </section><!-- content -->
</div><!-- container -->
</body>
</html>
