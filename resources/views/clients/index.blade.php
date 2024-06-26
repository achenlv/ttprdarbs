<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>internal</title>
</head>

<body>

  <div class="container">
    <h1>Clients</h1>

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
            <td>{{ $client->name }}</td>
            <td>{{ $client->identifier }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>