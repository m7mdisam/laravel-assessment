<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return response()->json(Schedule::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'franchise_id' => 'required|integer|exists:objects,id',
        ]);

        $item = Schedule::create($data);
        return response()->json($item, 201);
    }

    public function show($id)
    {
        return response()->json(Schedule::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $item = Schedule::findOrFail($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        Schedule::destroy($id);
        return response()->json(null, 204);
    }
}
