<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:clients,username',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients,email',
            'password' => 'required|string|min:8',
        ]);

        // Crear el cliente
        Client::create([
            'username' => $validatedData['username'],
            'name' => $validatedData['name'],
            'surname' => $validatedData['surname'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Encriptar contraseña
        ]);

        return to_route('client.index')->with('status', 'Client Created');
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
