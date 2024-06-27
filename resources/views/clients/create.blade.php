<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add client</title>
</head>
<body>
<h1>Add Client</h1>
<form action="/clients" method="POST">
  @csrf
  <div>
  <label for="identifier">Id:</label>
  <input type="identifier" name="identifier" id="identifier" required>
</div><div>
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>
</div><div>
      <label for="additional_information">Notes:</label>
      <textarea id="additional_information" name="additional_information" required cols="80" rows="20">Sākotnējā informācija</textarea>
  </div>
  <div>
            <label for="address">Category:</label>
            <select id="address" name="address_id">
                @foreach ($addresses as $address)
                    <option value="{{ $address->id }}" >
                        {{ $address->country }}, {{ $address->city }}, {{ $address->street }}
                    </option>
                @endforeach
            </select>
        </div>
  <button type="submit">Add Client</button>
</form>
</body>
</html>