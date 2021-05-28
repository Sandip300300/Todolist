<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO ||CREATE</title>

</head>
<body style="text-align: center">
    <h1>Create Your TODO</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/upload" method="POST">
        @csrf
    <input type="text" name="title"/>
    <input type="submit" value="Create" />
    </form>
    <br>
    <a href="/index">Back</a>

</body>
</html>
