<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	# code...
    	$user = User::whereNull('is_admin')->get();

    	return view('user.dashboard', compact('user'));
    }

    public function add()
    {
    	# code...
   

    	return view('user.add');
    }

     public function store(Request $request)
    {
    	# code...
   
    	DB::table('users')->insert([
    		'name' => $request->nama,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    		'alamat' => $request->alamat,
    		'nohp' => $request->nohp,
    	]);
    
    	return redirect('/user/dashboard');
    }

    public function edit($id)
    {
    	# code...
   		
   		$user = User::where('id', $id)->get();

    	return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        # code...
   
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
        ]);
    
        return redirect('/user/dashboard');
    }

    public function delete($id)
    {
        
        $file = DB::table('users')->where('id',$id)->first();
        DB::table('users')->where('id',$id)->delete();

        return redirect('/product/dashboard');
    }

}
