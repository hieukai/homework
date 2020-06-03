<html>
<head>
<title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <form action="/user/update/{{$id}}" method="post">
        @csrf
        <br>
        <label>ID: {{$id}}</label>
        <br>
        <br>
        <label>Email: </label>
        <input type="text" name="email" placeholder="please enter the email">
        <br>
        <br>
        <label>Password: </label>
        <input type="password" name="password" placeholder="please enter the password">
        <br>
        <br>
        <input type="submit">
    </form>
</body>
</html>