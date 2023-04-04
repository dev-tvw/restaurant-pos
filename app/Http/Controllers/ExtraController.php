<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\ExtraType;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extra::all();
        return view('extras.index', compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = ExtraType::all();
        return view('extras.create', compact('types'));
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
            'extra_type_id' => 'required',
            'name' => 'required',
            'price' => 'required'
        ]);
        Extra::create([
            'name' => $request->name,
            'extra_type_id' => $request->extra_type_id,
            'price' => $request->price
        ]);
        return redirect()->route('extras.index')->with('success', 'Extra added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Extra $extra)
    {
        $types = ExtraType::all();
        return view('extras.edit', compact('extra', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extra $extra)
    {
        $request->validate([
            'extra_type_id' => 'required',
            'name' => 'required',
            'price' => 'required'
        ]);
        $extra->update([
            'extra_type_id' => $request->extra_type_id,
            'name' => $request->name,
            'price' => $request->price
        ]);
        return redirect()->route('extras.index')->with('success', 'Extra updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extra $extra)
    {
        $extra->status = $extra->status ? 0 : 1;
        $extra->save();
        return redirect()->back()->with('success', 'Status changed successfully');
    }
}
