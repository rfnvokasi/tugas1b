<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data_user = \App\Users::all();
        return view('user.index',['data_user' => $data_user]);
    }

    public function create(Request $request)
        {
            \App\Users::create($request->all());
            return redirect('/user')->with('sukses','Data berhasil diinput');
        }

    public function edit($id)
    {
        $user = \App\Users::find($id);
        return view('user/edit',['user' => $user]);
    }    

    public function update(Request $request, $id)
    {
        $user = \App\Users::find($id);
        $user->update($request->all());
        return redirect('/user')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $user = \App\Users::find($id);
        $user->delete($user);
        return redirect('/user')->with('sukses','Data Berhasil dihapus');
    }
}
