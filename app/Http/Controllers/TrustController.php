<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Trust;


class TrustController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trust = trust::orderBy('created_at', 'DESC')->get();
  
        return view('trusts.index', compact('trust'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trusts.create');
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


        Trust::create($validatedData);

        return redirect()->route('trust')->with('success', 'Record created successfully');
}

  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trusts = Trust::findOrFail($id);
  
        return view('trusts.show', compact('trusts'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trusts = Trust::findOrFail($id);
  
        return view('trusts.edit', compact('trusts'));
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
        $trusts = Trust::findOrFail($id);
  
        $trusts->update($request->all());
  
        return redirect()->route('trust')->with('success', 'Trust Funds updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trusts = Trust::findOrFail($id);
  
        $trusts->delete();
  
        return redirect()->route('trust')->with('success', 'Trust Funds deleted successfully');
    }
}

