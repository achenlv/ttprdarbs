<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit client</title>
</head>
<body>
    <h1>Edit Client {{ $client->name }}</h1>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="identifier">Id:</label>
            <input type="text" id="identifier" name="identifier" value="{{ $client->identifier }}" required>
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $client->name }}" required>
        </div>

        <div>
            <label for="additional_information">Notes:</label>
            <textarea id="additional_information" name="additional_information" required cols="80" rows="20">{{ $client->additional_information }}</textarea>
        </div>

        <div>
            <label for="address_id">Category:</label>
            <select id="address_id" name="address_id">
                @foreach ($addresses as $address)
                    <option value="{{ $address->id }}" {{ $address->id == $client->address_id ? 'selected' : '' }}>
                        {{ $address->country }}, {{ $address->city }}, {{ $address->street }}
                    </option>
                @endforeach
            </select>
            <a href="{{ route('addresses.create') }}">Add new address</a>
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
