<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klienti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 <h2>Show {{ $client->name }} <a href="{{ route('clients.edit', $client->id) }}">Edit</a></h2>
                    {{ __("You're logged in!") }}

                    lalala - tests 23
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


  <h2>Show {{ $client->name }} <a href="{{ route('clients.edit', $client->id) }}">Edit</a></h2>
  <div>
    <p>Id: {{ $client->identifier }}</p>
    <p>Name: {{ $client->name }}</p>
    <!-- Address:  $client->address->country  $client->address->city $client->address->street   -->
    <p><textarea name="additional_information" id="additional_information" cols="30" rows="10">{{ $client->additional_information }}</textarea></p>
    <hr>
    <p>Added at: {{ $client->created_at }}</p>
    <p>Updated at: {{ $client->updated_at }}</p>
    </div>
</body>
</html>