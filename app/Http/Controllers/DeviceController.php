<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // $devices = DB::table('properties')
      //     ->leftJoin('devices', 'properties.id', '=', 'devices.property_id')
      //     // ->leftJoin('addresses', 'devices.address_id', '=', 'addresses.id')
      //     ->leftJoin('clients', 'properties.client_id', '=', 'client.id')
      //     ->select(
      //         DB::raw('clients.name AS Klients'),
      //         DB::raw('properties.name'),
      //         // DB::raw("CONCAT(addresses.city, ', ', addresses.street) AS Adrese"),
      //         DB::raw("CONCAT(devices.manudacturer, ' ', devices.model) AS Iekarta"),
      //         'devices.serial_number',
      //         'devices.provided_at'
      //     )
      //     ->whereNotNull('devices.property_id')
      //     // ->whereNotNull('Ik.id')
      //     ->get();

      // return view('devices.index', compact('devices'));
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
