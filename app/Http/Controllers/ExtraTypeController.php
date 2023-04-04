<?php

namespace App\Http\Controllers;

use App\Models\ExtraType;
use Illuminate\Http\Request;

class ExtraTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ExtraType::all();
        return view('extra_types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('extra_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        ExtraType::create([
            'name' => $request->name
        ]);
        return redirect()->route('types.index')->with('success', 'Type added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExtraType  $type
     * @return \Illuminate\Http\Response
     */
    public function show(ExtraType $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExtraType  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtraType $type)
    {
        return view('extra_types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExtraType  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtraType $type)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $type->update([
            'name' => $request->name
        ]);
        return redirect()->route('types.index')->with('success', 'Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExtraType  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtraType $type)
    {
        $type->status = $type->status ? 0 : 1;
        $type->save();
        return redirect()->back()->with('success', 'Status changed successfully');
    }
}
