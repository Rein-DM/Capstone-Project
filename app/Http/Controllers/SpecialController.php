<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Special;


class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specials = Special::orderBy('created_at', 'DESC')->get();
  
        return view('specials.index', compact('specials'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('specials.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'dateReceived' => 'required',
        'Obligation' =>  ['required','regex:/^[A-z a-z 0-9]+$/','string','max:255'],
        'Dept' =>  ['required','regex:/^[A-z a-z -]+$/','string','max:255'],
        'Payee' => ['required','regex:/^[A-z a-z]+$/','string','max:255'],
        'Code' =>   ['required','regex:/^[A-z a-z 0-9]+$/','string','max:255'],
        'Name' => ['required','regex:/^[A-z a-z]+$/','string','max:255'],
        'Netdv' =>   ['required','numeric'],
        'Particulars' => ['required','regex:/^[A-z a-z . ,]+$/','string','max:255'],
        'Status' => 'required',
        'Transmittedto' => ['required','regex:/^[A-z a-z -]+$/','string','max:255'],
        'Remarks' => ['required','regex:/^[A-z a-z 0-9 , . -]+$/','string','max:255'],
        'Released' => 'required',
        'Check' => ['required','numeric'],
        'Issuance' => 'required',
        // Add more validation rules for other fields
    ]);


        Special::create($validatedData);

        return redirect()->route('special')->with('success', 'Record created successfully');
}

  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $specials = Special::findOrFail($id);
  
        return view('specials.show', compact('specials'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $specials = Special::findOrFail($id);
  
        return view('specials.edit', compact('specials'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'dateReceived' => 'required',
            'Obligation' =>  ['required','regex:/^[A-z a-z 0-9]+$/','string','max:255'],
            'Dept' =>  ['required','regex:/^[A-z a-z -]+$/','string','max:255'],
            'Payee' => ['required','regex:/^[A-z a-z]+$/','string','max:255'],
            'Code' =>   ['required','regex:/^[A-z a-z 0-9]+$/','string','max:255'],
            'Name' => ['required','regex:/^[A-z a-z]+$/','string','max:255'],
            'Netdv' =>   ['required','numeric'],
            'Particulars' => ['required','regex:/^[A-z a-z . ,]+$/','string','max:255'],
            'Status' => '',
            'Transmittedto' => ['required','regex:/^[A-z a-z -]+$/','string','max:255'],
            'Remarks' => ['required','regex:/^[A-z a-z 0-9 , . -]+$/','string','max:255'],
            'Released' => 'required',
            'Check' => ['required','numeric'],
            'Issuance' => 'required',
            // Add more validation rules for other fields
        ]);
        $specials = Special::findOrFail($id);
  
        $specials->update($request->all());
  
        return redirect()->route('special')->with('success', 'Special Educational Funds updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $specials = Special::findOrFail($id);
  
        $specials->delete();
  
        return redirect()->route('special')->with('success', 'Special Educational Funds deleted successfully');
    }
}