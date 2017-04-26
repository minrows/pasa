<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>Feedback</h1>
    <h3>Name: {{$inserted->name}}</h3>
    <h3>Email: {{$inserted->email}}</h3>
    <h3>Phone Number: {{$inserted->phn_no}}</h3>
    <h3>Message: </h3>
    <p>
        {{$inserted->message}}
    </p>
</body>
</html>