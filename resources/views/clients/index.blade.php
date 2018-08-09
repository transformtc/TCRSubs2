<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

@foreach($clients as $client)
    <label>
        Client Name
        <input type="text" name="client_name" value="{{ $client->client_name }}">
    </label>

    <label>
        Client Email
        <input type="text" name="client_email" value="{{ $client->client_email }}">
    </label>
@endforeach
</body>

</html>