<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function listAdmin(Request $request)
    {
        if($request->has('cari')){
            $data_admin = User::where('role','Admin')->where('name', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_admin = User::where('role','Admin')->get();
        }
        //dd($data_admin);
        return view('admin.daftar_admin',['data_admin' => $data_admin]);
    }

    public function addAdmin()
    {
        return view('admin.tambah_admin');
    }

    public function createAdmin(Request $request)
    {
        $admin=$request->all();
        $admin['password']=Hash::make($admin['password']);
        $admin['role']='Admin';
        $admin['remember_token']=Str::random(60);
        //dd($admin);
        User::create($admin);
        
        return redirect('http://127.0.0.1:8000/admin')->with('sukses', 'Admin berhasil ditambahkan!');
    }

    public function listCustomer(Request $request)
    {
        if($request->has('cari')){
            $data_cus = User::where('role','user')->where('name', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_cus = User::where('role','user')->get();
        }
        //dd($data_admin);
        return view('customer.daftar_customer',['data_cus' => $data_cus]);
    }

    public function createCustomer(Request $request)
    {
        //dd();
        $customer=$request->all();
        $customer['no_telp']=$request->no_telp;
        $customer['alamat']=$request->alamat;
        $customer['password']=Hash::make($customer['password']);
        $customer['role']='Customer';
        $customer['remember_token']=Str::random(60);
        //dd($customer);
        User::create($customer);
        
        return redirect('http://127.0.0.1:8000/login')->with('sukses', 'Anda berhasil register!');
    }

    public function deleteAdmin($id)
    {
        $admin = User::find($id);
        $admin->delete($admin);
        return redirect('http://127.0.0.1:8000/admin')->with('sukses', 'Admin berhasil dihapus!');
    }
}
