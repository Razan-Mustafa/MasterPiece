<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
</head>
<body>


    @if (isset($details['name']) && isset($details['email']) && isset($details['subject']))
        <p>Name: {{ $details['name'] }}</p>
        <p>Email: {{ $details['email'] }}</p>
        <p>Subject: {{ $details['subject'] }}</p>
    @endif
    <p>Message: {{$details['message']}}</p>


    @if(isset($content))
        <p>Message: {{$content}}</p>
    @else
        <p>Message: {{$details['message']}}</p>
    @endif
</body>
</html>
