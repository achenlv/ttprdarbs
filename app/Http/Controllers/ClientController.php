<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Address;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $clients= Client::all()->sortBy('name');
      return view('clients.index', compact('clients'));
      // $addresses= Address::all();
      // return view('clients.index', compact('clients', 'addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $addresses= Address::all();
      return view('clients.create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'identifier' => 'required',
        'additional_information' => 'nullable',
        'address_id' => 'required|exists:addresses,id',
      ]);

      $client = new Client;
      $client->name = $request->name;
      $client->identifier = $request->identifier;
      if ($request->additional_information) {
        $client->additional_information = $request->additional_information;
      } else {
        $client->additional_information = '';
      };
      $client->address_id = $request->address_id;
      $client->save();

      return redirect()->route('clients.show', $client->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $client = Client::find($id);
      return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $addresses = Address::all();
      $client = Client::find($id);
      return view('clients.edit', compact('client', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $request->validate([
        'name' => 'required',
        'identifier' => 'required',
        'additional_information' => 'nullable',
        'address_id' => 'required|exists:addresses,id',
      ]);

      if ($request->name == null || $request->identifier == null) {
        return redirect()->route('clients.edit', $id);
      };

      $client = Client::find($id);
      $client->name = $request->name;
      $client->identifier = $request->identifier;
      if ($request->additional_information == null) {
        $client->additional_information = '';
      } else {
        $client->additional_information = $request->additional_information;
      };
      $client->address_id = $request->address_id;
      $client->save();
      return redirect()->route('clients.show', $client->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Client::findOrfail($id)->delete();
      return redirect()->route('clients.index');
    }
}
