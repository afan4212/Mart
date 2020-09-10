<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
use App\User;
use App\Barang;
use App\PesananDetail;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $product = Barang::all()->count();
        $order = Pesanan::all()->count();
        $customer = User::whereNull('is_admin')->count();
        $admin = User::whereNotNull('is_admin')->count();
        $konfirmasi = Pesanan::where('status', 1)->get();
        $cancel = Pesanan::where('status', 0)->get();

        return view('admin.home', compact('konfirmasi', 'cancel', 'product', 'order', 'customer', 'admin'));
    }

    public function konfirmasi($id)
    {
        DB::table('pesanans')->where('id',$id)->update([
            'status' => 0
            ]);

        return redirect('/admin/home');
    }

    public function cancel($id)
    {
        DB::table('pesanans')->where('id',$id)->update([
            'status' => 1
            ]);

        return redirect('/admin/home');
    }
}
