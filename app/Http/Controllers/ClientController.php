<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('resources.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('resources.clients.create');
    }

    public function store(Request $request)
    {
        $client = Client::create(request(['name']));

        if ($request->hasFile('logo')) { 
            $this->saveFile($request, 'logo', $client, 'public/images/clients');
        }
        return redirect('/clients');
    }

    public function show(Client $client)
    {
        return view('resources.clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('resources.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->update(request(['name']));

        if ($request->hasFile('logo')) { 
            $this->saveFile($request, 'logo', $client, 'public/images/clients');
        }

        return redirect(('/clients'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/clients');
    }

    private function saveFile($request, $column, $model, $basePath)
    {
        $name_with_ext = $request->file($column)->getClientOriginalName();
        $name = pathinfo($name_with_ext, PATHINFO_FILENAME);
        $ext = $request->file($column)->getClientOriginalExtension();
        $filename = $name . '_' . time().'.'.$ext;
        $path = $request->file($column)->storeAs($basePath, $filename);

        $model->logo = $filename;
        $model->save();
    }
}
