<?php

namespace App\Http\Controllers;

use App\Models\portal;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        $circulars = portal::all();
        return view("circulars.index", compact("circulars"));
    }

    public function create()
    {
        return view("circulars.create");
    }
    public function store(Request $request){
        $request->validate([
            'universityName' => 'required|string|max:255',
            'programeName' => 'required|string|max:255',
            'description' => 'nullable|string',
            'applicationDeadline' => 'nullable|date',
        ]);

        portal::create($request->all());
        return redirect()->route('circulars.index')->with('success', 'Circular created successfully.');
    }
}
