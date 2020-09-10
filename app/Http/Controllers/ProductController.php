<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;
use File;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	# code...
    	$product = Barang::all();

    	return view('product.dashboard', compact('product'));
    }

    public function add()
    {
    	# code...
   

    	return view('product.add');
    }

    public function upload(Request $request)
    {
    	# code...
   
    	DB::table('barangs')->insert([
    		'nama_barang' => $request->nama,
    		'harga' => $request->harga,
    		'stok' => $request->jumlah,
    		'keterangan' => $request->keterangan,
    		'image' => $request->file->getClientOriginalName(),
    	]);
    	$file = $request->file;
    	$tujuan_upload = 'img/product';
    	$file->move($tujuan_upload,$file->getClientOriginalName());

    	
    
    	return redirect('/product/dashboard');
    }

     public function edit($id)
    {
    	# code...
   		
   		$product = Barang::where('id', $id)->get();

    	return view('product.edit', compact('product'));
    }

    public function update(Request $request)
    {
    	# code...
   		
   		DB::table('barangs')->where('id',$request->id)->update([
	    	'nama_barang' => $request->nama,
    		'harga' => $request->harga,
    		'stok' => $request->jumlah,
    		'keterangan' => $request->keterangan,
	    	]);
    	return redirect('/product/dashboard');
    }

    public function details($id)
    {
    	# code...
   		
   		$product = Barang::where('id', $id)->get();

    	return view('product.detail', compact('product'));
    }

     public function delete($id)
    {
    	
    	$file = DB::table('barangs')->where('id',$id)->first();
    	File::delete('img/product/'.$file->image);
    	DB::table('barangs')->where('id',$id)->delete();

    	return redirect('/product/dashboard');
    }
}
