<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>internal</title>
</head>

<body>

<div class="container">
    <h1>Devices</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Adrese</th>
                <th>Īpašums</th>
                <th>Iekarta</th>
                <th>Serial Number</th>
                <th>Provided At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devices as $device)
                <tr>
                    <td>{_{ $device->Adrese }_}</td>
                    <td>{{ $device->name }}</td>
                    <td>{{ $device->Iekarta }}</td>
                    <td>{{ $device->serial_number }}</td>
                    <td>{{ $device->provided_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>