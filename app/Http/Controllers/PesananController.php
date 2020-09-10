<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	# code...
    	$pesanan = Pesanan::all();

    	return view('pesanan.dashboard', compact('pesanan'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

     	return view('pesanan.detail', compact('pesanan','pesanan_details'));
    }

     public function delete($id)
    {
    	DB::table('pesanans')->where('id',$id)->delete();
    	DB::table('pesanan_details')->where('pesanan_id',$id)->delete();

     	return redirect('/pesanan/dashboard');
    }
}
