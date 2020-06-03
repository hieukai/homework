<html>
<head>
<title>Middlware</title>
</head>
<body>
    <h1>Login</h1>
    <form action="demologin" method="post">
    @csrf 
    <input type="text" name="email" placeholder="please enter the email">
    <br>
    <br>
    <input type="password" name="password" placeholder="please enter the password">
    <br>
    <br>
    <input type="submit">
    </form>
</body>
</html>