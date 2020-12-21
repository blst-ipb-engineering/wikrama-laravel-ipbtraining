<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sasaran;
use DB;

class SasaranController extends Controller
{
    public function index()
    {
        dd($sasars);  
        $sasaran = Sasaran::all();
       
                                      
        return view('ipp', compact("sasaran", ));
        
    }


    public function store(Request $request)
    {
        $request->validate([
            'sasaran' => 'required'
        ]);
            
        DB::table('tb_sasaran')->insert([
            'perspektif_id' => $request->perspektif,
            'nama_sasaran' => $request->sasaran
        ]);
        
        return redirect()->route('ipp')
                         ->with('success','created successfully.');
    }
}
