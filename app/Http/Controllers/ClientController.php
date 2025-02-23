<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveClientRequest;
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
    public function create(Client $client)
    {
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveClientRequest $request)
    {
        // Validamos y obtenemos los datos
        $data = $request->validated();

        // Hasheamos el password antes de crear el cliente
        $data['password'] = bcrypt($data['password']);

        // Creamos el nuevo cliente
        Client::create($data);

        // Redirigimos con un mensaje de éxito
        return to_route('client.index')->with('status', 'Client Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveClientRequest $request, Client $client)
    {
        // Validamos y obtenemos los datos
        $data = $request->validated();

        // Si el password fue proporcionado, lo hasheamos
        if ($request->has('password') && !empty($request->password)) {
            $data['password'] = bcrypt($data['password']);
        } else {
            // Si no se proporciona un password, no lo cambiamos
            unset($data['password']);
        }

        // Actualizamos el cliente con los nuevos datos
        $client->update($data);

        // Redirigimos con un mensaje de éxito
        return to_route('client.index')->with('status', 'Client Updated');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return to_route('client.index')->with('status','Client Deleted');
    }
}
