<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('resources.services.index', compact('services'));
    }

    public function create()
    {
        return view('resources.services.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'image|nullable|max:1999'
        ]);

        $service = Service::create(request(['name', 'description']));

        if ($request->hasFile('image')) {
            $nameWithExt = $request->file('image')->getClientOriginalName();
            $name = pathinfo($nameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $fileToStore = $name.'_'.time().'.'.$ext;

            $path = $request->file('image')->storeAs('public/images/services', $fileToStore);

            $service->image = $fileToStore;
            $service->save();
        }
        
        return redirect('/services');
    }

    public function show(Service $service)
    {
        return view('resources.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('resources.services.edit', compact('service'));
    }
    
    public function update()
    {
        Service::update(request(['name', 'description', 'image']));
        return redirect('/services');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/services');
    }
}
