<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      $addresses= Address::all()->sortBy('id');
      return view('addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      $request->validate([
        'country' => 'required',
        'city' => 'required',
        'street' => 'required',
        'additional_inforamtion' => 'nullable',
      ]);

      $address = new Address;
      $address->country = $request->country;
      $address->city = $request->city;
      $address->street = $request->street;
      if ($request->additional_information) {
        $client->additional_information = $request->additional_information;
      } else {
        $client->additional_information = '';
      };

      return redirect()->route('addresses.index');      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
      $address = Address::findOrFail($id);
      return view('addresses.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
      $address = Address::findOrFail($id);
      return view('addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
