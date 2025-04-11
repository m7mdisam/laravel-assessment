<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function index()
    {
        return response()->json(Franchise::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            
        ]);

        $item = Franchise::create($data);
        return response()->json($item, 201);
    }

    public function show($id)
    {
        return response()->json(Franchise::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $item = Franchise::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        Franchise::destroy($id);
        return response()->json(null, 204);
    }
}
