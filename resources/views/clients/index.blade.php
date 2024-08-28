@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Klienti</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Reģisrtācijas numurs</th>
                <th>Nosaukums</th>
                <th>Adrese</th> <!-- Add this line -->
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->identifier }}</a></td>
                    <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a></td>
                    <td>{{ $client->address->country }}, {{ $client->address->city }}, {{ $client->address->street }}</td> <!-- Add this line -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klienti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{ route('clients.create') }}">&gt;&gt; JAUNS KLIENTS &lt;&lt;</a></br>
                 

                  <table class="table">
                    <thead>
                      <tr>
                        <th>Reģisrtācijas numurs</th>
                        <th>Nosaukums</th>
                        <th>Adrese</th>
                      </tr>
                    </thead>  
                    <tbody>
                      @foreach ($clients as $client)
                        <tr>
                        <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->identifier }}</a></td>
                        <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a></td>
                        <td>{{ $client->address->country }}, {{ $client->address->city }}, {{ $client->address->street }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> -->
