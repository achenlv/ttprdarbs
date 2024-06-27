<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>internal</title>
</head>

<body>

  <div class="container">
    <h1>Clients</h1>
    <a href="{{ route('clients.create') }}">Add new client</a>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Identifier</th>
        </tr>
      </thead>  
      <tbody>
        @foreach ($clients as $client)
          <tr>
          <td><a href="{{ route('clients.edit', $client->id) }}">{{ $client->identifier }}</a></td>
          <td><a href="{{ route('clients.edit', $client->id) }}">{{ $client->name }}</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>