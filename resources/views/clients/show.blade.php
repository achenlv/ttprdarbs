<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$client->title}}</title>
</head>
<body>
  <h2>Show {{ $client->name }} <a href="{{ route('clients.edit', $client->id) }}">Edit</a></h2>
  <div>
    <p>Id: {{ $client->identifier }}</p>
    <p>Name: {{ $client->name }}</p>
    <!-- Address:  $client->address->country  $client->address->city $client->address->street   -->
    <p><textarea name="additional_information" id="additional_information" cols="30" rows="10">{{ $client->additional_information }}</textarea></p>
    <hr>
    <p>Added at: {_{ $client->created_at->format("d.m.Y H:i:s") }_}</p>
    <p>Updated at: {_{ $client->updated_at->format("d.m.Y H:i:s") }_}</p>
    </div>
</body>
</html>