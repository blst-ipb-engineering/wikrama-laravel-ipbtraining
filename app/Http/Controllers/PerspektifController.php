<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perspektif;
use DB;

class PerspektifController extends Controller
{
    public function index()
    {
        
        $perspektif = Perspektif::all();
        $sasars = DB::table('pivot')->join('tb_perspektif', 'pivot.perspektif_id', '=', 'tb_perspektif.id')
                                            ->join('tb_sasaran', 'pivot.sasaran_id', '=', 'tb_sasaran.id')
                                            ->join('tb_ukuran', 'pivot.ukuran_id', '=', 'tb_ukuran.id')
                                            ->select('tb_perspektif.*','tb_sasaran.*','tb_ukuran.*')
                                            ->get();
       
        return view('ipp', compact("perspektif","sasars"));
        // $data = DB::table('product_trainer')->join('products', 'product_trainer.product_id', '=', 'products.id')
        //                                     ->where('product_trainer.product_id', '=', $request->training_title)
        //                                     ->select('product_trainer.trainer_id')
        //                                     ->count();
    }


    public function store(Request $request)
    {
        $request->validate([
            'perspektif' => 'required'
        ]);
    
        DB::table('tb_perspektif')->insert([
            'nama_perspektif' => $request->perspektif
        ]);
        
        return redirect()->route('ipp')
                         ->with('success','created successfully.');
    }
}
