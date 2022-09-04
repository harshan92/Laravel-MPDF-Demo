<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
  font-family: 'iskpota', sans-serif;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>User list</h1>
        <table border="1" cellpadding="5" width="100%" style="margin-bottom: 100px;">
            <tr>
                <th width="20%">ID</th>
                <th width="40%">Name</th>
                <th width="40%">Email</th>
            </tr>
           @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>