<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Laravel Application</h1>
    <p>This is a simple welcome page.</p>
    <p>Current Date and Time: {{ now() }}</p>
    <p>Laravel Version: {{ app()->version() }}</p>
    <p>PHP Version: {{ phpversion() }}</p>
</body>
</html>
