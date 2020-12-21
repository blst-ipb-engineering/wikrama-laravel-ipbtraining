<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perspektif;

class tambah_data_controller extends Controller
{

    public function index()
    {
        return view('ipps.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perspektif' => 'required',
        ]);
    
        Perspektif::create($request->all());
     
        return redirect()->route('ipps.index')
                        ->with('success','created successfully.');
    }
}
