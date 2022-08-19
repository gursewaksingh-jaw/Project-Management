<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
</head>
<body>
<table>
<tr>
    <p>You received an email from : {{ $details['name'] }}
    Here are the details:</p><br>
    <tr><b>Name:</b> {{ $details['name'] }}</tr>
    <tr><b>Email:</b> {{$details['email'] }}</tr>
    <tr><b>Message:</b> {{ $details['message'] }}</tr>
    <tr>Thank you</tr>
</tr>

</table>
</body>
</html>