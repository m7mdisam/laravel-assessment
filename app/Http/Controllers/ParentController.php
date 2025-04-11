<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        return response()->json(ParentModel::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'franchise_id' => 'required|integer|exists:objects,id',
        ]);

        $item = ParentModel::create($data);
        return response()->json($item, 201);
    }

    public function show($id)
    {
        return response()->json(ParentModel::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $item = ParentModel::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        ParentModel::destroy($id);
        return response()->json(null, 204);
    }
}
