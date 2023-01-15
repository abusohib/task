<?php

namespace App\Http\Controllers;

use App\Models\mytask;
use Illuminate\Http\Request;

class mytaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mytasks = mytask::latest()->paginate(5);

        return view('mytask.index', compact('mytasks'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mytask.create');
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
            'taskTitle' => 'required',
            'taskDescription' => 'required',
        ]);

        mytask::create($request->all());

        return redirect()->route('mytasks.index')
        ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mytask  $mytask
     * @return \Illuminate\Http\Response
     */
    public function show(mytask $mytask)
    {
        return view('mytask.show', compact('mytask'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mytask  $mytask
     * @return \Illuminate\Http\Response
     */
    public function edit(mytask $mytask)
    {
        //
        return view('mytask.edit', compact('mytask'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mytask  $mytask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mytask $mytask)
    {
        //
        $request->validate([
            'taskTitle' => 'required',
            'taskDescription' => 'required',
        ]);

        $mytask->update($request->all());

        return redirect()->route('mytasks.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mytask  $mytask
     * @return \Illuminate\Http\Response
     */
    public function destroy(mytask $mytask)
    {
        //
        $mytask->delete();
        return redirect()->route('mytasks.index')
            ->with('success', 'User deleted successfully');
    }
}
