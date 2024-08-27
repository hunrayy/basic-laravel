<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the admin dashboard</h1>
    <form action="/admin/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

    
</body>
</html>